<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Relatives Controller
 *
 * @property Relative $Relative
 * @property PaginatorComponent $Paginator
 */
class RelativesController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $uses=array('UserBlack','Relative');
        function beforeFilter(){    
            $user = $this->Session->read('Auth.User');
            $this->set('screenName', 'userBlack');
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

/**
 * add method
 *
 * @return void
 */
	public function add($idUserBlack = null) {
                $idBlack="";
                $nameBlack="";
                if($idUserBlack){
                    $black=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$idUserBlack)));
                    $idBlack=$black['UserBlack']['idUserBlack'];
                    $nameBlack=$black['UserBlack']['name'];
                }
                $this->set('idBlack',$idBlack);
                $this->set('nameBlack',$nameBlack);
                
		if ($this->request->is('post')) {
                    if($idUserBlack){
			$this->Relative->create();
                        $this->request->data['Relative']['UserBlack_idUserBlack']=$idUserBlack;
                        $this->request->data['Relative']['name']=$this->encryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['email']=$this->encryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['relativeType']=$this->encryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['observation']=$this->encryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
			if ($this->Relative->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Familiar se a <a href="#" class="alert-link">Creado con Éxito</a>. </div>');
				if($idUserBlack){
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'view',$idUserBlack));
                                }else{
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'index'));
                                }
			} else {
                                $this->request->data['Relative']['name']=$this->decryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['email']=$this->decryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['relativeType']=$this->decryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['observation']=$this->decryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
				$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>  Error! </strong> El Familiar no pudo ser creado, intenta nuevamente mas tarde </div>');
			}
                    }else{
                        $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>  Error! </strong> El Familiar no pudo ser creado, intenta nuevamente mas tarde </div>');
                    }
                }
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idUserBlack = null) {
                    
                $idBlack="";
                $nameBlack="";
                if($idUserBlack){
                    $black=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$idUserBlack)));
                    $idBlack=$black['UserBlack']['idUserBlack'];
                    $nameBlack=$black['UserBlack']['name'];
                }
                $this->set('idBlack',$idBlack);
                $this->set('nameBlack',$this->decryptAES128($nameBlack,"LanTaMeNCrYpTKri"));
		if (!$this->Relative->exists($id)) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar es Inválido </div>');
		}
		if ($this->request->is(array('post', 'put'))) {
                    $this->request->data['Relative']['idRelative']=$id;
                        $this->request->data['Relative']['name']=$this->encryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['email']=$this->encryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['relativeType']=$this->encryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['observation']=$this->encryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
			if ($this->Relative->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Familiar se a editado con éxito. </div>');
				if($idUserBlack){
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'view',$idUserBlack));
                                }else{
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'index'));
                                }
			} else {
                                $this->request->data['Relative']['name']=$this->decryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['email']=$this->decryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['relativeType']=$this->decryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['observation']=$this->decryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
				$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar no pudo ser editado, Intenta nuevamente </div>');
			}
                    $this->set('idRelative',$id);
                    //$this->set('relativeNumber',$this->request->data['Relative']['relativeNumber']);
		} else {
			$options = array('conditions' => array('Relative.' . $this->Relative->primaryKey => $id));
			$this->request->data = $this->Relative->find('first', $options);
                        $this->request->data['Relative']['name']=$this->decryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['email']=$this->decryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['relativeType']=$this->decryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['observation']=$this->decryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
                        $this->set('idRelative',$id);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$idUserBlack = null) {
		$this->Relative->id = $id;
		if (!$this->Relative->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar es Inválido </div>');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Relative->delete()) {
			$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>El Familiar se a eliminado con éxito. </div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar no pudo ser eliminado, Intenta nuevamente </div>');
		}
		if($idUserBlack){
                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'view',$idUserBlack));
                }else{
                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'index'));
                }
	}
        
        public function addFromUser($idUserBlack = null) {
            $this->layout=null;
                $idBlack="";
                $nameBlack="";
                if($idUserBlack){
                    $black=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$idUserBlack)));
                    $idBlack=$black['UserBlack']['idUserBlack'];
                    $nameBlack=$black['UserBlack']['name'];
                }
                $this->set('idBlack',$idBlack);
                $this->set('nameBlack',$nameBlack);
                
		if ($this->request->is('post')) {
                    if($idUserBlack){
			$this->Relative->create();
                        $this->request->data['Relative']['UserBlack_idUserBlack']=$idUserBlack;
                        $this->request->data['Relative']['name']=$this->encryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['email']=$this->encryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['relativeType']=$this->encryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['observation']=$this->encryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
			if ($this->Relative->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Familiar se a <a href="#" class="alert-link">Creado con Éxito</a>. </div>');
				if($idUserBlack){
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'relativeBlack',$idUserBlack));
                                }else{
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'indexasdasd'));
                                }
			} else {
                                $this->request->data['Relative']['name']=$this->decryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['email']=$this->decryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['relativeType']=$this->decryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['observation']=$this->decryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
				$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>  Error! </strong> El Familiar no pudo ser creado, intenta nuevamente mas tarde </div>');
			}
                    }else{
                        $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>  Error! </strong> El Familiar no pudo ser creado, intenta nuevamente mas tarde </div>');
                    }
                }
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editFromUser($id = null, $idUserBlack = null) {
            $this->layout=null;
                    
                $idBlack="";
                $nameBlack="";
                if($idUserBlack){
                    $black=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$idUserBlack)));
                    $idBlack=$black['UserBlack']['idUserBlack'];
                    $nameBlack=$black['UserBlack']['name'];
                }
                $this->set('idBlack',$idBlack);
                $this->set('nameBlack',$this->decryptAES128($nameBlack,"LanTaMeNCrYpTKri"));
		if (!$this->Relative->exists($id)) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar es Inválido </div>');
		}
		if ($this->request->is(array('post', 'put'))) {
                    $this->request->data['Relative']['idRelative']=$id;
                        $this->request->data['Relative']['name']=$this->encryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['email']=$this->encryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['relativeType']=$this->encryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['observation']=$this->encryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
			if ($this->Relative->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Familiar se a editado con éxito. </div>');
				if($idUserBlack){
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'relativeBlack',$idUserBlack));
                                }else{
                                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'indexasdas'));
                                }
			} else {
                                $this->request->data['Relative']['name']=$this->decryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['email']=$this->decryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['relativeType']=$this->decryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                                $this->request->data['Relative']['observation']=$this->decryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
				$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar no pudo ser editado, Intenta nuevamente </div>');
			}
                    $this->set('idRelative',$id);
                    //$this->set('relativeNumber',$this->request->data['Relative']['relativeNumber']);
		} else {
			$options = array('conditions' => array('Relative.' . $this->Relative->primaryKey => $id));
			$this->request->data = $this->Relative->find('first', $options);
                        $this->request->data['Relative']['name']=$this->decryptAES128($this->request->data['Relative']['name'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['email']=$this->decryptAES128($this->request->data['Relative']['email'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['relativeType']=$this->decryptAES128($this->request->data['Relative']['relativeType'],"LanTaMeNCrYpTKri");
                        $this->request->data['Relative']['observation']=$this->decryptAES128($this->request->data['Relative']['observation'],"LanTaMeNCrYpTKri");
                        $this->set('idRelative',$id);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function deleteFromUser($id = null,$idUserBlack = null) {
		$this->Relative->id = $id;
		if (!$this->Relative->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar es Inválido </div>');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Relative->delete()) {
			$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>El Familiar se a eliminado con éxito. </div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Familiar no pudo ser eliminado, Intenta nuevamente </div>');
		}
		if($idUserBlack){
                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'relativeBlack',$idUserBlack));
                }else{
                    return $this->redirect(array('controller'=>'usersBlack', 'action' => 'index'));
                }
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