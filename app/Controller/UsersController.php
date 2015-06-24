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
        function beforeFilter(){    
            $this->Auth->allow('forgetPassword','recoverPassword');
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
        function login() {
            $this->set("textVar","Ingresa con tu cuenta de LAN/TAM Menú");
            $this->layout = 'login';
            if($this->Session->read('Auth.User')){
                return $this->redirect(array('controller'=>'pages','action' => 'index'));
            }else{
            if ($this->request->is('post')) {
                // Important: Use login() without arguments! See warning below.
                if ($this->Auth->login()) {
                    date_default_timezone_set('Chile/Continental');
                    $user=$this->Session->read('Auth.User');
                    $user_array=array('idUser'=>$user['idUser'],'lastConnection'=>date('Y-m-d H:i:s'));
                    $this->User->save($user_array);
                    if($user['defaultLogin']==""){
                        return $this->redirect($this->Auth->redirectUrl());
                    }else{
                        return $this->redirect(array('controller'=>'tweets','action' => $user['defaultLogin']));
                    }
                    // Prior to 2.3 use
                    // `return $this->redirect($this->Auth->redirect());`
                }
                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>El Usuario o la Contraseña son erroneos </div>');
            }
        }
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
                for($i=0; $i<strlen($user[0]['user']['idUser']); $i++) {
                    $char = substr($user[0]['user']['idUser'], $i, 1);
                    $keychar = substr("SoCiaLBraNdNeTENCRipt", ($i % strlen("SoCiaLBraNdNeTENCRipt"))-1, 1);
                    $char2 = chr(ord($char)+ord($keychar));
                    $result.=$char2;
                 }
                $idEncriptado=base64_encode($result);
                $Email = new CakeEmail();
                $Email->config('default');
                $Email->emailFormat('html','text');	
                $mailTo = $user[0]['user']['email'];
                $Email->from(array('seguridad@socialbrand.cl' => 'Administrador'));
                $Email->to($user[0]['user']['email']);
                $Email->subject('Solicitud de Recuperacion de Usuario');
                $Email->send('Saludos, <br>Ingrese al siguiente link para recuperar su contraseña: <br><br>'.Router::url('/', true).'users/recoverPassword/'.$idEncriptado);
                $this->User->save(array('idUser'=>$user[0]['user']['idUser'],'recoverPassword'=>'1'));
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
                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong>Error! </strong>sesion de ecuperación de contraseña vencido </div>');
                return $this->redirect(array('controller'=>'users','action' => 'login'));
            }
        }
    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }
}