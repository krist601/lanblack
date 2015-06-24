<?php if($userRole=="Admin"){?>
<ul class="breadcrumb">
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>" class="active">Usuarios</a>
    </li>
    <li>
        <?php echo $user['User']['username']; ?>
    </li>
</ul>    
<div class="col-sm-3" style="margin-top: 30px;">
                    <div style="margin-left: 10%;">
                        <h1>Usuario: <?php echo $user['User']['username']; ?></h1>
                        <span class="thumbnail-wrapper d100 circular inline m-t-5">
                            <img align="middle" src="<?php if($user['User']['imgPath']!="0"){echo $user['User']['imgPath'];}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" alt="" data-src="<?php if($user['User']['imgPath']!="0"){echo $user['User']['imgPath'];}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" data-src-retina="<?php if($user['User']['imgPath']!="0"){echo $user['User']['imgPath'];}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" style="width: 200px; height: 200px;">
                        </span>
                    </div>
    <center>
<a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'edit',$user['User']['idUser'])) ?>" class="btn btn-success start"> <i class="glyphicon glyphicon-upload"></i> <span>Editar</span> </a>
    <a href="<?php echo $this->Html->url(array('controller' => 'Fileuploads', 'action' => 'editUser',$user['User']['idUser'])) ?>" class="btn btn-success start"> <i class="glyphicon glyphicon-picture"></i> <span>Imagen</span> </a>
    <form action="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'delete', $user['User']['idUser'])) ?>" name="post_delete" id="post_delete" style="display:none;" method="post">
        <input type="hidden" name="_method" value="POST">
    </form>
    <a href="#" style="margin-top: 5px;" onclick="if (confirm(&quot;¿Estás seguro que deseas borrar el usuario: <?php echo strtotime($user['User']['username']); ?> ?&quot;)) { document.post_delete.submit(); } event.returnValue = false; return false;" class="btn btn-danger start"><i class="glyphicon glyphicon-trash"></i> Borrar</a>
    </center>
                </div>
                <div class="col-sm-9">
                    <table class="table m-t-50">
                      <tbody>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Username</p>
                            <p class="text-black">
                              <?php echo h($user['User']['username']); ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Nombre</p>
                            <p class="text-black">
                              <?php echo h($user['User']['name']); ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Correo</p>
                            <p class="text-black">
                              <?php echo h($user['User']['email']); ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Rol</p>
                            <p class="text-black">
                              <?php echo h($user['User']['role']); ?>
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
<?php }else{ ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>