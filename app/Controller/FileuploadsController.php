<?php
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
//App::import('Vendor', 'Uploader.Uploader');
/**
 * Fileuploads Controller
 *
 * @property Fileupload $Fileupload
 * @property PaginatorComponent $Paginator
 */
class FileuploadsController extends AppController {

        public $uses = array('Fileupload','User');
        function beforeFilter(){    
            $user = $this->Session->read('Auth.User');
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
	public function index() {
		$this->Fileupload->recursive = 0;
		$this->set('fileuploads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	}
	public function viewRepairshop($id = null) {
	}

/**
 * add method
 *
 * @return void
 */
	public function addUser() {
            $this->set('screenName', 'user');
		if ($this->request->is('post')) {
                    if($this->request->data['Fileupload']['password']==$this->request->data['Fileupload']['confirmPassword']){
                        $this->Fileupload->create();
                        if($this->request->data['Fileupload']['archivo']['name']!=''){
                            $fileName=$this->request->data['Fileupload']['archivo']['name'];
                            $this->request->data['Fileupload']['fileName'] = $fileName;
                            if ($this->Fileupload->save($this->request->data)) {
                                $id = $this->Fileupload->getLastInsertID();
                                $directorio=Router::url('/', true).'app/webroot/files/fileupload/archivo/'.$id.'/'.$fileName;
                                $array_user=array('imgPath'=>$directorio,
                                                   'name'=>$this->request->data['Fileupload']['name'],
                                                   'email'=>$this->request->data['Fileupload']['email'],
                                                   'role'=>$this->request->data['Fileupload']['role'],
                                                   'username'=>$this->request->data['Fileupload']['username'],
                                                   'password'=>$this->request->data['Fileupload']['password'],
                                    );
                                $this->User->create();
                                if($this->User->save($array_user)){
                                    $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"></span><strong> Exito! </strong>el Usuario se a <a href="#" class="alert-link">creado con éxito</a>. </div>');
                                    return $this->redirect(array('controller'=>'users','action' => 'view',$this->User->getLastInsertID()));
                                }else{
                                    $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>el Usuario no puedo ser creado </div>');
                                }
                            } else {
                                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>el Archivo no pudo subirse, reintentelo </div>');
                            }
                        }
                        else{
                            $array_user=array( 'name'=>$this->request->data['Fileupload']['name'],
                                               'email'=>$this->request->data['Fileupload']['email'],
                                               'role'=>$this->request->data['Fileupload']['role'],
                                               'username'=>$this->request->data['Fileupload']['username'],
                                               'password'=>$this->request->data['Fileupload']['password'],
                                );
                            $this->User->create();
                            if($this->User->save($array_user)){
                                $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"></span><strong> Exito! </strong>el Usuario se a <a href="#" class="alert-link">creado con éxito</a>. </div>');
                                return $this->redirect(array('controller'=>'users','action' => 'view',$this->User->getLastInsertID()));
                            }else{
                                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>el Usuario no puedo ser creado </div>');
                            }
                        }
                    }else{
                        $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>las contraseñas no coinciden </div>');
                    }
		}
	}
        public function editUser($idUser = null) {
                $this->set('screenName', 'user');
		if (!$this->User->exists($idUser)) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>el Usuario es inválido </div>');
                        return $this->redirect(array('controller'=>'users','action' => 'index'));
		}
		if ($this->request->is('post')) {
			$this->Fileupload->create();
                        $fileName=$this->request->data['Fileupload']['archivo']['name'];
                        $this->request->data['Fileupload']['fileName'] = $fileName;
			if ($this->Fileupload->save($this->request->data)) {
                            $id = $this->Fileupload->getLastInsertID();
                            $directorio=Router::url('/', true).'/app/webroot/files/fileupload/archivo/'.$id.'/'.$fileName;
                            $array_user=array('idUser'=>$idUser,'imgPath'=>$directorio);
                            if($this->User->save($array_user)){
                                $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"></span><strong> Exito! </strong>el Usuario se a <a href="#" class="alert-link">editado con éxito</a>. </div>');
                                return $this->redirect(array('controller'=>'users','action' => 'view',$idUser));
                            }else{
                                $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>el Usuario no puedo ser creado </div>');
                                
                            }
			} else {
                            $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong>el Usuario no pudo subirse, reintentelo </div>');
			}
                }else{
                    $options = array('conditions' => array('User.' . $this->User->primaryKey => $idUser));
                    $theUser = $this->User->find('first', $options);
                    $this->set('username',$theUser['User']['username']);
                    $this->set('idUser',$theUser['User']['idUser']);
                }
	}
}