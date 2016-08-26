<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
 
 	public $uses =array('User','UserBlack');
 
        function beforeFilter(){    
            $this->Auth->allow('forgetPassword','recoverPassword','lanFirstRequest','request','lanSecondRequest','lanError');
            $user = $this->Session->read('Auth.User');
            $this->set('screenName', 'user');
            if ($user['username']){
                $this->set('username', $user['username']);
            }
            if ($user['role']){
                $this->set('userRole', $user['role']);
            }
            if ($user['imgPath']){
                $this->set('imgPath', $user['imgPath']);
            }
            if ($user['idUser']){
                $this->set('idUser', $user['idUser']);
            }
        }
        
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index($user = null) {
            if($user){
                $this->set('buttonAvaliable','true');
		$this->set('users', $this->User->query('SELECT * FROM User WHERE username like "%'.$user.'%" OR name like "%'.$user.'%" OR email like "%'.$user.'%"'));
            }else{
                $this->set('buttonAvaliable','false');
                $this->set('users', $this->User->find('all'));
            }
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
            if (!$this->User->exists($id)) {
                    $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>el Usuario es inválido </div>');
            }
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->set('user', $this->User->find('first', $options));
            $this->set('thisUs',$this);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            return $this->redirect(array('controller'=>'Fileuploads','action' => 'addUser'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
            $this->set('idUser',$id);
		if (!$this->User->exists($id)) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Usuario se a editado con éxito. </div>');
				return $this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario no pudo ser editado, Intenta nuevamente </div>');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
                        $this->set('username',$this->request->data['User']['username']);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>El Usuario se a eliminado con éxito. </div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario no pudo ser eliminado, Intenta nuevamente </div>');
		}
		return $this->redirect(array('action' => 'index'));
	}
    function forgetPassword() {
        $this->set("textVar","Ingresa su correo electrónico para recuperar contraseña");
        $this->layout = 'login';
        if($this->Session->read('Auth.User')){
            return $this->redirect(array('controller'=>'pages','action' => 'home'));
        }else{
        if ($this->request->is('post')) {
            $user=$this->User->query("SELECT * FROM user WHERE BINARY email= '".$this->request->data['User']['username']."'");
            if($user){
                $result = '';
                for($i=0; $i<strlen($user[0]['User']['idUser']); $i++) {
                    $char = substr($user[0]['User']['idUser'], $i, 1);
                    $keychar = substr("SoCiaLBraNdNeTENCRipt", ($i % strlen("SoCiaLBraNdNeTENCRipt"))-1, 1);
                    $char2 = chr(ord($char)+ord($keychar));
                    $result.=$char2;
                 }
                $idEncriptado=base64_encode($result);
                $Email = new CakeEmail();
                $Email->config('default');
                $Email->emailFormat('html','text');	
                $mailTo = $user[0]['User']['email'];
                $Email->from(array('seguridad@socialbrand.cl' => 'Administrador'));
                $Email->to($user[0]['User']['email']);
                $Email->subject('Solicitud de Recuperacion de Usuario');
                $Email->send('Saludos, <br>Ingrese al siguiente link para recuperar su contraseña: <br><br>'.Router::url('/', true).'users/recoverPassword/'.$idEncriptado);
                $this->User->save(array('idUser'=>$user[0]['User']['idUser'],'recoverPassword'=>'1'));
                return $this->redirect(array('controller'=>'users','action' => 'login'));
            }
            else{
                return $this->redirect(array('controller'=>'users','action' => 'login'));
                //$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>EL Correo no Existe </div>');
            }
        }
        }
    }
    function recoverPassword($id = null) {
        $this->set("textVar","Ingresa una nueva contraseña");
        $this->layout = 'login';
        ini_set('max_execution_time', 300);
        if($this->Session->read('Auth.User')){
            return $this->redirect(array('controller'=>'pages','action' => 'home'));
        }else{
            $result = '';
            $string = base64_decode($id);
            for ($i = 0; $i < strlen($string); $i++) {
                $char = substr($string, $i, 1);
                $keychar = substr("SoCiaLBraNdNeTENCRipt", ($i % strlen("SoCiaLBraNdNeTENCRipt")) - 1, 1);
                $char2 = chr(ord($char) - ord($keychar));
                $result.=$char2;
            }
            if (!$this->User->exists($result)) {
                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>el usuario es inválido </div>');
            }
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $result));
            $theUser = $this->User->find('first', $options);
            if($theUser['User']['recoverPassword']=='1'){
                if ($this->request->is(array('post', 'put'))) {
                    $this->request->data['User']['idUser']=$result;
                    if($this->request->data['User']['password']==$this->request->data['User']['confirmPassword']){
                        $this->request->data['User']['recoverPassword']='0';
                        if ($this->User->save($this->request->data)) {
                            $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"></span><strong>Exito! </strong>la Contraseña se a restablecido con éxito. </div>');
                            $this->log($this->request->data,"error");
                            return $this->redirect(array('controller'=>'users','action' => 'login'));
                        } else {
                            $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>La contraseña no pudo ser restablecida, Intenta nuevamente </div>');
                        }
                    }else{
                        $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>Las contraseñan no coinciden, Intenta nuevamente </div>');
                    }
                } else {
                    $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
                    $this->request->data = $this->User->find('first', $options);
                }
            }else{
                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>sesión de recuperación de contraseña vencido </div>');
                return $this->redirect(array('controller'=>'users','action' => 'login'));
            }
        }
    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }
        function login() {
            $this->set("textVar","Ingresa con tu cuenta de LAN/TAM Black");
            $this->layout = 'login';
            if($this->Session->read('Auth.User')){
                return $this->redirect(array('controller'=>'pages','action' => 'index'));
            }else{
            if ($this->request->is('post')) {
                // Important: Use login() without arguments! See warning below.
                $ipClient=$this->get_client_ip();
                $this->log('el ip es: '.$this->get_client_ip());
                if (ip2long($ipClient) >= ip2long("0.0.0.0") && ip2long("255.255.255.255") >= ip2long($ipClient)) {
                    if ($this->Auth->login()) {
                        return $this->redirect($this->Auth->redirectUrl());
                        // Prior to 2.3 use
                        // `return $this->redirect($this->Auth->redirect());`
                    }
                }
                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>El Usuario o la Contraseña son erroneos </div>');
            }
        }
    }
    function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

public function lanLogin( $url = "https://ssl.lan.com/cgi-bin/canje_kms_partners/paso_show_login.cgi", $timeout = 5 )
 {
    $url = str_replace( "&amp;", "&", urldecode(trim($url)) );

	   $cookie = tempnam ("/tmp", "CURLCOOKIE");
	$ch = curl_init("https://ssl.lan.com/cgi-bin/canje_kms_partners/paso_show_login.cgi");
	curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
	curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_ENCODING, "" );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
	curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
	$content = curl_exec( $ch );
	$response = curl_getinfo( $ch );
	curl_close ( $ch );
	debug('si entre');debug('si entre'.'si entre'.'si entre'.'si entre');
	debug($content);
	if ($response['http_code'] == 301 || $response['http_code'] == 302)
	{
	    ini_set("user_agent", "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");
	    $headers = get_headers($response['url']);
	
	    $location = "";
	    foreach( $headers as $value )
	    {
	        if ( substr( strtolower($value), 0, 9 ) == "location:" )
	            return get_final_url( trim( substr( $value, 9, strlen($value) ) ) );
	    }
	}
	
	if (    preg_match("/window\.location\.replace\('(.*)'\)/i", $content, $value) ||
	        preg_match("/window\.location\=\"(.*)\"/i", $content, $value)
	)
	{
	    return get_final_url ( $value[1] );
	}
	else
	{
	    return $response['url'];
   }
}
	private function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	private function generateRandomNumber($length = 10) {
	    $characters = '0123456789';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	public function lanFirstRequest(){
            $this->autoRender = false;
            $this->response->type('xml');
            $getxml = trim(file_get_contents("php://input"));
            $this->log($getxml);
			$xml = simplexml_load_string($getxml, "SimpleXMLElement", LIBXML_NOCDATA);
			$json = json_encode($xml);
			$array = json_decode($json,TRUE);
			$URL="";
			$user=$this->UserBlack->find('first',array('conditions'=>array('identifier'=>$this->encryptAES128($array['REQUEST']['PARAMS']['MEMBER_NUMBER'], "LanTaMeNCrYpTKri"))));
			if($user){
				$user['UserBlack']['dateToken']=date('Y-m-d h:i:s');
				$user['UserBlack']['token']=$array['REQUEST']['PARAMS']['PARTNER_SESSION_ID'];
				$this->UserBlack->save($user);
                $totalMinutesArray=$this->UserBlack->query("SELECT TIMESTAMPDIFF(MINUTE, '".$user['UserBlack']['dateToken']."', '".date('Y-m-d h:i:s')."') as t");
                $totalMinutes=$totalMinutesArray[0][0]['t'];
                if($totalMinutes<30){
					if($array['REQUEST']['PARAMS']['LANGUAGE']=="ES"){
						$URL='usersBlack/addBlackSpa/'.$user['UserBlack']['idUserBlack']."/".$array['REQUEST']['PARAMS']['PARTNER_SESSION_ID'];
					}
					if($array['REQUEST']['PARAMS']['LANGUAGE']=="EN"){
						$URL='usersBlack/addBlackEng/'.$user['UserBlack']['idUserBlack']."/".$array['REQUEST']['PARAMS']['PARTNER_SESSION_ID'];
					}
					if($array['REQUEST']['PARAMS']['LANGUAGE']=="PT"){
						$URL='usersBlack/addBlackPort/'.$user['UserBlack']['idUserBlack']."/".$array['REQUEST']['PARAMS']['PARTNER_SESSION_ID'];
					}
				}else{
					if($array['REQUEST']['PARAMS']['LANGUAGE']=="ES"){
						$URL='usersBlack/noAvaliableTokenSpa';
					}
					if($array['REQUEST']['PARAMS']['LANGUAGE']=="EN"){
						$URL='usersBlack/noAvaliableTokenEng';
					}
					if($array['REQUEST']['PARAMS']['LANGUAGE']=="PT"){
						$URL='usersBlack/noAvaliableTokenPort';
					}
				}
			}else{
				if($array['REQUEST']['PARAMS']['LANGUAGE']=="ES"){
					$URL='usersBlack/noUserSpa';
				}
				if($array['REQUEST']['PARAMS']['LANGUAGE']=="EN"){
					$URL='usersBlack/noUserEng';
				}
				if($array['REQUEST']['PARAMS']['LANGUAGE']=="PT"){
					$URL='usersBlack/noUserPort';
				}
			}
			$xmlArray = array('XML' => array('REQUEST'=>array('ACTION'=>'REQUEST_URL_REDIRECT',
																		   'PARAMS'=>$array['REQUEST']['PARAMS']),
																		   'RESPONSE' => array(
																		   'META'=>array('RESPONSEDATETIME'=>date('Ymdhis'),
																		  				  'REQUESTID'=>$this->generateRandomNumber(10)),
																		   'RESULT'=>'OK',
																		   'LAN_TOKEN'=>$array['REQUEST']['PARAMS']['LAN_TOKEN'],
																		   'PARTNER_SESSION_ID'=>$array['REQUEST']['PARAMS']['PARTNER_SESSION_ID'],
																		   'ID_PARTNER'=>'32',
																		   'URL_REDIRECT'=>Router::url('/', true).$URL)));
			$xmlObject = Xml::fromArray($xmlArray, array('format' => 'tags'));
			$xmlString = $xmlObject->asXML();
            $this->response->body($xmlString);
	}
	public function lanSecondRequest(){
            $this->autoRender = false;
            $this->response->type('xml');
			$xmlArray = array('response'=>'succesfull');
			$xmlObject = Xml::fromArray($xmlArray, array('format' => 'tags')); // You can use Xml::build() too
			$xmlString = $xmlObject->asXML();
            $this->response->body($xmlString);
	}
	public function lanError(){
            $this->autoRender = false;
            $this->response->type('xml');
			$xmlArray = array('XML' => array('RESPONSE' => array('ACTION'=>'REQUEST_URL_REDIRECT',
																		   'META'=>array('RESPONSEDATETIME'=>date('Ymdhis'),
																		  				  'REQUESTID'=>'321456999'),
																		   'RESULT'=>'NOK',
																		   'ERROR'=>array('CODE'=>'101',
																		   				  'MESSAGE'=>'INCORRECT PARAMETERS'))));
			$xmlObject = Xml::fromArray($xmlArray, array('format' => 'tags')); // You can use Xml::build() too
			$xmlString = $xmlObject->asXML();
            $this->response->body($xmlString);
	}
    public function request() {
    	$this->layout=null;
		$stringRandom=$this->generateRandomString(32);
		$input_xml = '<XML>
						 <REQUEST>
						   <ACTION>SHOW_LOGIN</ACTION>
						   <PARAMS>
								<ID_PARTNER>32</ID_PARTNER>
								<PARTNER_SESSION_ID>'.$stringRandom.'</PARTNER_SESSION_ID> 
								<URL_ERROR_REDIRECT>'.Router::url('/', true).'users/lanError</URL_ERROR_REDIRECT>
								<URL_REQUEST_REDIRECT>'.Router::url('/', true).'users/lanFirstRequest</URL_REQUEST_REDIRECT> 
						  </PARAMS>
						  </REQUEST>
						</XML>';
		 $url = 'https://ssl.lan.com/cgi-bin/canje_kms_partners/paso_show_login.cgi';
        App::uses('HttpSocket', 'Network/Http');
        $HttpSocket = new HttpSocket(array('ssl_verify_peer' => false));
	    $request = array(
	        'header' => array('Content-Type' => 'application/xml',),
	        'redirect' => true
	    );
	    $response = $HttpSocket->post($url, $input_xml, $request);
	    $explode1=explode('<script type="text/javascript">window.location="',$response->body());
	    $explode2=explode('"</script>',$explode1[1]);
	    $this->redirect('https://ssl.lan.com'.$explode2[0]);

	}
        
        function encryptAES128($str, $key){
             $block = mcrypt_get_block_size('rijndael_128', 'ecb');
             $pad = $block - (strlen($str) % $block);
             $str .= str_repeat(chr($pad), $pad);
             return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_ECB));
        }

        function decryptAES128($str, $key){ 
             $str = base64_decode($str);
             $str = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $str, MCRYPT_MODE_ECB);
             $block = mcrypt_get_block_size('rijndael_128', 'ecb');
             $pad = ord($str[($len = strlen($str)) - 1]);
             $len = strlen($str);
             $pad = ord($str[$len-1]);
             return substr($str, 0, strlen($str) - $pad);
        }
    
    
}