<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * UsersBlack Controller
 *
 * @property UserBlack $UserBlack
 * @property PaginatorComponent $Paginator
 */
class UsersBlackController extends AppController {

/**
 * Components
 *
 * @var array
 */
public $uses = array('UserBlack','Relative');
        function beforeFilter(){    
            $this->Auth->allow('addBlackSpa','finishSpa','relativeBlackSpa','addBlackEng','finishEng','relativeBlackEng','addBlackPort','finishPort','relativeBlackPort');
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
 * index method
 *
 * @return void
 */
        private function translateDate($date){
            $timeData=explode(" ",$date);
            $dateString=explode("/",$timeData[0]);
            $time=explode(":",$timeData[1]);
            if($timeData[2]=="PM"){
                $theHour=$time[0]+12;
            }else{
                $theHour=$time[0];
            }
            return $dateString[2]."-".$dateString[0]."-".$dateString[1]." ".$theHour.":".$time[1].":00";
        }
        
	public function index() {
            $userBlack=$this->UserBlack->find('all');
            for($k=0;$k<count($userBlack);$k++){
                $userBlack[$k]['UserBlack']['businessCabinPref']=$this->decryptAES128($userBlack[$k]['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['celPhone']=$this->decryptAES128($userBlack[$k]['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['economyCabinPref']=$this->decryptAES128($userBlack[$k]['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['email']=$this->decryptAES128($userBlack[$k]['UserBlack']['email'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['fathersLastName']=$this->decryptAES128($userBlack[$k]['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['gender']=$this->decryptAES128($userBlack[$k]['UserBlack']['gender'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['homePhone']=$this->decryptAES128($userBlack[$k]['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['identifier']=$this->decryptAES128($userBlack[$k]['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['mothersLastName']=$this->decryptAES128($userBlack[$k]['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['name']=$this->decryptAES128($userBlack[$k]['UserBlack']['name'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['nationality']=$this->decryptAES128($userBlack[$k]['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['officePhone']=$this->decryptAES128($userBlack[$k]['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
            }
            $this->set('usersBlack', $userBlack);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>el Usuario es inválido </div>');
            }
            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));
            $userBlack=$this->UserBlack->find('first', $options);
            
            $userBlack['UserBlack']['businessCabinPref']=$this->decryptAES128($userBlack['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['celPhone']=$this->decryptAES128($userBlack['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['economyCabinPref']=$this->decryptAES128($userBlack['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['email']=$this->decryptAES128($userBlack['UserBlack']['email'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['fathersLastName']=$this->decryptAES128($userBlack['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['gender']=$this->decryptAES128($userBlack['UserBlack']['gender'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['homePhone']=$this->decryptAES128($userBlack['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['identifier']=$this->decryptAES128($userBlack['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['mothersLastName']=$this->decryptAES128($userBlack['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['name']=$this->decryptAES128($userBlack['UserBlack']['name'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['nationality']=$this->decryptAES128($userBlack['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
            $userBlack['UserBlack']['officePhone']=$this->decryptAES128($userBlack['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
            
            $this->set('userBlack', $userBlack);
            $userBlackRelative=$this->UserBlack->query('SELECT distinct(relativeType) FROM `Relative` WHERE `Relative`.UserBlack_idUserBlack='.$userBlack['UserBlack']['idUserBlack']);
            $array_userBlack=array();
            foreach ($userBlackRelative as $value) {
                $relativesUsersBlack=$this->UserBlack->query('SELECT * FROM `Relative` WHERE `Relative`.UserBlack_idUserBlack='.$userBlack['UserBlack']['idUserBlack'].' AND Relative.relativeType="'.$value['Relative']['relativeType'].'"');
                $array_relative=array();
                foreach ($relativesUsersBlack as $relativeUsersBlack) {
                    array_push($array_relative,array('idRelative'=>$relativeUsersBlack['Relative']['idRelative'],
                                                 'name'=>$this->decryptAES128($relativeUsersBlack['Relative']['name'],"LanTaMeNCrYpTKri"),
                                                 'type'=>$this->decryptAES128($relativeUsersBlack['Relative']['relativeType'],"LanTaMeNCrYpTKri"),
                                                 'email'=>$this->decryptAES128($relativeUsersBlack['Relative']['email'],"LanTaMeNCrYpTKri"),
                                                 'observation'=>$this->decryptAES128($relativeUsersBlack['Relative']['observation'],"LanTaMeNCrYpTKri"),
                        ));
                }
                array_push($array_userBlack,array('type'=>$this->decryptAES128($value['Relative']['relativeType'],"LanTaMeNCrYpTKri"),
                                             'relatives'=>$array_relative,
                    ));
            }
            $this->set('array_userBlack',$array_userBlack);
	}

/**
 * add method
 *
 * @return void
 */
        public function addBlackSpa($id = null) {
            $this->layout=null;
		if (!$this->UserBlack->exists($id)) {
			return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
		}
                
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                if($userBla['UserBlack']['completed']!="1"){
                    if ($this->request->is(array('post', 'put'))) {
                        $this->request->data['UserBlack']['idUserBlack']=$id;

                        $this->request->data['UserBlack']['businessCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['celPhone']=$this->encryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['economyCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['email']=$this->encryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['fathersLastName']=$this->encryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['homePhone']=$this->encryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['identifier']=$this->encryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['mothersLastName']=$this->encryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['name']=$this->encryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['nationality']=$this->encryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['officePhone']=$this->encryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                            if ($this->UserBlack->save($this->request->data)) {
                                    $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Usuario se a salvado con éxito. </div>');
                                    return $this->redirect(array('controller'=>'UsersBlack','action' => 'relativeBlackSpa',$id));
                            } else {
                                    $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                                    $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario no pudo ser salvado, Intenta nuevamente </div>');
                            }
                            $this->set('idBlack',$id);
                            $this->set('blackName',$this->request->data['UserBlack']['name']);
                    } else {
                            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                            $this->request->data = $this->UserBlack->find('first', $options);
                            $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
                            $this->set('idBlack',$id);
                            $this->set('blackName',$this->request->data['UserBlack']['name']);
                    }
                }else{
                    return $this->redirect(array('controller'=>'UsersBlack','action' => 'finishSpa',$id));
                }
            
        }
        
        public function addBlackEng($id = null) {
            $this->layout=null;
		if (!$this->UserBlack->exists($id)) {
			return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
		}
                
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                if($userBla['UserBlack']['completed']!="1"){
                    if ($this->request->is(array('post', 'put'))) {
                        $this->request->data['UserBlack']['idUserBlack']=$id;

                        $this->request->data['UserBlack']['businessCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['celPhone']=$this->encryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['economyCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['email']=$this->encryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['fathersLastName']=$this->encryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['homePhone']=$this->encryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['identifier']=$this->encryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['mothersLastName']=$this->encryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['name']=$this->encryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['nationality']=$this->encryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['officePhone']=$this->encryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                            if ($this->UserBlack->save($this->request->data)) {
                                    $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>The User was successfully saved. </div>');
                                    return $this->redirect(array('controller'=>'UsersBlack','action' => 'relativeBlackEng',$id));
                            } else {
                                    $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                                    $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>The user could not be saved, try again. </div>');
                            }
                            $this->set('idBlack',$id);
                            $this->set('blackName',$this->request->data['UserBlack']['name']);
                    } else {
                            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                            $this->request->data = $this->UserBlack->find('first', $options);
                            $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
                            $this->set('idBlack',$id);
                            $this->set('blackName',$this->request->data['UserBlack']['name']);
                    }
                }else{
                    return $this->redirect(array('controller'=>'UsersBlack','action' => 'finishPort',$id));
                }
            
        }
        
        public function addBlackPort($id = null) {
            $this->layout=null;
		if (!$this->UserBlack->exists($id)) {
			return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
		}
                
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                if($userBla['UserBlack']['completed']!="1"){
                    if ($this->request->is(array('post', 'put'))) {
                        $this->request->data['UserBlack']['idUserBlack']=$id;

                        $this->request->data['UserBlack']['businessCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['celPhone']=$this->encryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['economyCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['email']=$this->encryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['fathersLastName']=$this->encryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['homePhone']=$this->encryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['identifier']=$this->encryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['mothersLastName']=$this->encryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['name']=$this->encryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['nationality']=$this->encryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['officePhone']=$this->encryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                            if ($this->UserBlack->save($this->request->data)) {
                                    $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Sucesso! </strong>O Usuário para farelo com sucesso. </div>');
                                    return $this->redirect(array('controller'=>'UsersBlack','action' => 'relativeBlackPort',$id));
                            } else {
                                    $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                                    $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                                    $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Erro! </strong>O usuário não pode ser farelo, tente novamente. </div>');
                            }
                            $this->set('idBlack',$id);
                            $this->set('blackName',$this->request->data['UserBlack']['name']);
                    } else {
                            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                            $this->request->data = $this->UserBlack->find('first', $options);
                            $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                            $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
                            $this->set('idBlack',$id);
                            $this->set('blackName',$this->request->data['UserBlack']['name']);
                    }
                }else{
                    return $this->redirect(array('controller'=>'UsersBlack','action' => 'finishPort',$id));
                }
            
        }
        public function finishEng($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            if(!$id){
                return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            $save=array("idUserBlack"=>$id,"completed"=>"1");
            $this->UserBlack->save($save);
            $this->layout=null;
        }
        public function finishSpa($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            if(!$id){
                return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            $save=array("idUserBlack"=>$id,"completed"=>"1");
            $this->UserBlack->save($save);
            $this->layout=null;
        }
        public function finishPort($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            if(!$id){
                return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            $save=array("idUserBlack"=>$id,"completed"=>"1");
            $this->UserBlack->save($save);
            $this->layout=null;
        }
        
        public function relativeBlackSpa($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

            $userBla = $this->UserBlack->find('first', $options);
            if($userBla['UserBlack']['completed']!="1"){
                $this->layout=null;
                $relatives=$this->Relative->find('all',array('conditions'=>array('UserBlack_idUserBlack'=>$id)));
                for($k=0;$k<count($relatives);$k++){
                    $relatives[$k]['Relative']['name']=$this->decryptAES128($relatives[$k]['Relative']['name'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['email']=$this->decryptAES128($relatives[$k]['Relative']['email'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['relativeType']=$this->decryptAES128($relatives[$k]['Relative']['relativeType'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['observation']=$this->decryptAES128($relatives[$k]['Relative']['observation'], "LanTaMeNCrYpTKri");
                }
                $userBlack=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$id)));
                $this->set('relatives',$relatives);
                $this->set('idBlack',$id);
                $this->set('nameUser',$this->decryptAES128($userBlack['UserBlack']['name'], "LanTaMeNCrYpTKri"));
            }else{
                return $this->redirect(array('controller'=>'UsersBlack','action' => 'finishSpa',$id));
            }
        }
        public function relativeBlackEng($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

            $userBla = $this->UserBlack->find('first', $options);
            if($userBla['UserBlack']['completed']!="1"){
                $this->layout=null;
                $relatives=$this->Relative->find('all',array('conditions'=>array('UserBlack_idUserBlack'=>$id)));
                for($k=0;$k<count($relatives);$k++){
                    $relatives[$k]['Relative']['name']=$this->decryptAES128($relatives[$k]['Relative']['name'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['email']=$this->decryptAES128($relatives[$k]['Relative']['email'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['relativeType']=$this->decryptAES128($relatives[$k]['Relative']['relativeType'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['observation']=$this->decryptAES128($relatives[$k]['Relative']['observation'], "LanTaMeNCrYpTKri");
                }
                $userBlack=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$id)));
                $this->set('relatives',$relatives);
                $this->set('idBlack',$id);
                $this->set('nameUser',$this->decryptAES128($userBlack['UserBlack']['name'], "LanTaMeNCrYpTKri"));
            }else{
                return $this->redirect(array('controller'=>'UsersBlack','action' => 'finishEng',$id));
            }
        }
        public function relativeBlackPort($id = null) {
            if (!$this->UserBlack->exists($id)) {
                    return $this->redirect(array('controller'=>'UsersBlack','action' => '404'));
            }
            $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

            $userBla = $this->UserBlack->find('first', $options);
            if($userBla['UserBlack']['completed']!="1"){
                $this->layout=null;
                $relatives=$this->Relative->find('all',array('conditions'=>array('UserBlack_idUserBlack'=>$id)));
                for($k=0;$k<count($relatives);$k++){
                    $relatives[$k]['Relative']['name']=$this->decryptAES128($relatives[$k]['Relative']['name'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['email']=$this->decryptAES128($relatives[$k]['Relative']['email'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['relativeType']=$this->decryptAES128($relatives[$k]['Relative']['relativeType'], "LanTaMeNCrYpTKri");
                    $relatives[$k]['Relative']['observation']=$this->decryptAES128($relatives[$k]['Relative']['observation'], "LanTaMeNCrYpTKri");
                }
                $userBlack=$this->UserBlack->find('first',array('conditions'=>array('idUserBlack'=>$id)));
                $this->set('relatives',$relatives);
                $this->set('idBlack',$id);
                $this->set('nameUser',$this->decryptAES128($userBlack['UserBlack']['name'], "LanTaMeNCrYpTKri"));
            }else{
                return $this->redirect(array('controller'=>'UsersBlack','action' => 'finishPort',$id));
            }
        }
	public function add() {
            if ($this->request->is('post')) {
                
                $this->request->data['UserBlack']['name']=$this->encryptAES128($this->request->data['UserBlack']['name'],"LanTaMeNCrYpTKri");
                $this->request->data['UserBlack']['email']=$this->encryptAES128($this->request->data['UserBlack']['email'],"LanTaMeNCrYpTKri");
                $this->request->data['UserBlack']['gender']=$this->encryptAES128($this->request->data['UserBlack']['gender'],"LanTaMeNCrYpTKri");
                
                $this->UserBlack->create();
                if ($this->UserBlack->save($this->request->data)) {
                        $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Usuario se a <a href="#" class="alert-link">Creado con Éxito</a>. </div>');
                        return $this->redirect(array('action' => 'view',$this->UserBlack->getLastInsertID()));
                        
                } else {
                    $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'],"LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'],"LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['gender']=$this->decryptAES128($this->request->data['UserBlack']['gender'],"LanTaMeNCrYpTKri");
                
                        $this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>  Error! </strong>  El Usuario no pudo ser creado, intenta nuevamente mas tarde </div>');
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
	public function edit($id = null) {
		if (!$this->UserBlack->exists($id)) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
		if ($this->request->is(array('post', 'put'))) {
                    $this->request->data['UserBlack']['idUserBlack']=$id;
                    
                    $this->request->data['UserBlack']['businessCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['celPhone']=$this->encryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['economyCabinPref']=$this->encryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['email']=$this->encryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['fathersLastName']=$this->encryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['gender']=$this->encryptAES128($this->request->data['UserBlack']['gender'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['homePhone']=$this->encryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['identifier']=$this->encryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['mothersLastName']=$this->encryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['name']=$this->encryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['nationality']=$this->encryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                    $this->request->data['UserBlack']['officePhone']=$this->encryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
            
			if ($this->UserBlack->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong> Exito! </strong>El Usuario se a editado con éxito. </div>');
				return $this->redirect(array('action' => 'view',$id));
			} else {
                                $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['gender']=$this->decryptAES128($this->request->data['UserBlack']['gender'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                                $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

				$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario no pudo ser editado, Intenta nuevamente </div>');
			}
                        $this->set('idUserBlack',$id);
                        $this->set('blackName',$this->request->data['UserBlack']['name']);
		} else {
			$options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));
			
                        $this->request->data = $this->UserBlack->find('first', $options);
                        $this->request->data['UserBlack']['businessCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['celPhone']=$this->decryptAES128($this->request->data['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['economyCabinPref']=$this->decryptAES128($this->request->data['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['email']=$this->decryptAES128($this->request->data['UserBlack']['email'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['fathersLastName']=$this->decryptAES128($this->request->data['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['gender']=$this->decryptAES128($this->request->data['UserBlack']['gender'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['homePhone']=$this->decryptAES128($this->request->data['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['identifier']=$this->decryptAES128($this->request->data['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['mothersLastName']=$this->decryptAES128($this->request->data['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['name']=$this->decryptAES128($this->request->data['UserBlack']['name'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['nationality']=$this->decryptAES128($this->request->data['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                        $this->request->data['UserBlack']['officePhone']=$this->decryptAES128($this->request->data['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");

                        $this->set('idUserBlack',$id);
                        $this->set('blackName',$this->request->data['UserBlack']['name']);
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
		$this->UserBlack->id = $id;
		if (!$this->UserBlack->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserBlack->delete()) {
			$this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>El Usuario se a eliminado con éxito. </div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario no pudo ser eliminado, Intenta nuevamente </div>');
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function activateFromIndex($id = null) {
		$this->UserBlack->id = $id;
		if (!$this->UserBlack->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                $userBla['UserBlack']['completed']="0";
                $this->UserBlack->save($userBla);
                $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>Usuario activado para la edición. </div>');
                return $this->redirect(array('action' => 'index'));
	}
	public function activateFromView($id = null) {
		$this->UserBlack->id = $id;
		if (!$this->UserBlack->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                $userBla['UserBlack']['completed']="0";
                $this->UserBlack->save($userBla);
                $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>Usuario activado para la edición. </div>');
                return $this->redirect(array('action' => 'view',$id));
	}
	public function desactivateFromIndex($id = null) {
		$this->UserBlack->id = $id;
		if (!$this->UserBlack->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                $userBla['UserBlack']['completed']="1";
                $this->UserBlack->save($userBla);
                $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>Usuario desactivado para la edición. </div>');
                return $this->redirect(array('action' => 'index'));
	}
	public function desactivateFromView($id = null) {
		$this->UserBlack->id = $id;
		if (!$this->UserBlack->exists()) {
			$this->Session->setFlash('<div class="alert alert-danger"> <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Error! </strong>El Usuario es Inválido </div>');
		}
                $options = array('conditions' => array('UserBlack.' . $this->UserBlack->primaryKey => $id));

                $userBla = $this->UserBlack->find('first', $options);
                $userBla['UserBlack']['completed']="1";
                $this->UserBlack->save($userBla);
                $this->Session->setFlash('<div class="alert alert-success"> <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Exito! </strong>Usuario desactivado para la edición. </div>');
                return $this->redirect(array('action' => 'view',$id));
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
        
        public function excel (){
            $this->layout='excel';
            $userBlack=$this->UserBlack->find('all');
            for($k=0;$k<count($userBlack);$k++){
                $userBlack[$k]['UserBlack']['businessCabinPref']=$this->decryptAES128($userBlack[$k]['UserBlack']['businessCabinPref'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['celPhone']=$this->decryptAES128($userBlack[$k]['UserBlack']['celPhone'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['economyCabinPref']=$this->decryptAES128($userBlack[$k]['UserBlack']['economyCabinPref'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['email']=$this->decryptAES128($userBlack[$k]['UserBlack']['email'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['fathersLastName']=$this->decryptAES128($userBlack[$k]['UserBlack']['fathersLastName'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['gender']=$this->decryptAES128($userBlack[$k]['UserBlack']['gender'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['homePhone']=$this->decryptAES128($userBlack[$k]['UserBlack']['homePhone'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['identifier']=$this->decryptAES128($userBlack[$k]['UserBlack']['identifier'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['mothersLastName']=$this->decryptAES128($userBlack[$k]['UserBlack']['mothersLastName'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['name']=$this->decryptAES128($userBlack[$k]['UserBlack']['name'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['nationality']=$this->decryptAES128($userBlack[$k]['UserBlack']['nationality'], "LanTaMeNCrYpTKri");
                $userBlack[$k]['UserBlack']['officePhone']=$this->decryptAES128($userBlack[$k]['UserBlack']['officePhone'], "LanTaMeNCrYpTKri");
                $relatives=$this->Relative->find('all',array('conditions'=>array('UserBlack_idUserBlack'=>$userBlack[$k]['UserBlack']['idUserBlack'])));
                $relativeString="";
                foreach ($relatives as $relative) {
                    $relativeString=$relativeString.$this->decryptAES128($relative['Relative']['relativeType'], "LanTaMeNCrYpTKri").": ".$this->decryptAES128($relative['Relative']['name'], "LanTaMeNCrYpTKri")." (".$this->decryptAES128($relative['Relative']['email'], "LanTaMeNCrYpTKri")."), ";
                }
                $userBlack[$k]['UserBlack']['relatives']=$relativeString;
            }
            $this->log($userBlack);
            $this->set('usersBlack', $userBlack);
        }
        
}