<?php if($userRole=="Admin"){?>
<ul class="breadcrumb">
    <li>
        <p><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a></p>
    </li>
    <li>
        Usuarios
    </li>
</ul>


<div class="vd_title-section clearfix">
    <div class="vd_panel-header">
        <h1>Lista de Usuarios</h1>

    </div>
</div>
<div class="vd_content-section clearfix">
    <div class="related">
        <div class="row">
            <div class="col-md-12">
                <div class="panel widget">
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Nombre</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td style="padding: 5px;">
                                            <span class="thumbnail-wrapper d48 circular inline m-t-5">
                                                <img align="middle" src="<?php if($user['User']['imgPath']!="0"){echo $user['User']['imgPath'];}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" alt="" data-src="<?php if($user['User']['imgPath']!="0"){echo $user['User']['imgPath'];}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" data-src-retina="<?php if($user['User']['imgPath']!="0"){echo $user['User']['imgPath'];}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>">
                                            </span>
                                        </td>
                                        <td><?php echo h($user['User']['username']); ?></td>
                                        <td><?php echo h($user['User']['email']); ?></td>
                                        <td><?php echo h($user['User']['name']); ?></td>
                                        <td><?php echo h($user['User']['role']); ?></td>
                                        <td class="menu-action">
                                            <a data-original-title="Ver" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('action' => 'view', $user['User']['idUser'])); ?>"> <i class="fa fa-eye"></i> </a>
                                            <a data-original-title="Editar" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('action' => 'edit', $user['User']['idUser'])); ?>"> <i class="fa fa-pencil"></i> </a>
                                            <form action="<?php echo $this->Html->url(array('action' => 'delete', $user['User']['idUser'])) ?>" name="post_delete<?php echo $user['User']['idUser']; ?>" id="post_delete<?php echo $user['User']['idUser']; ?>" style="display:none;" method="post">
                                                <input type="hidden" name="_method" value="POST">
                                            </form>
                                            <a data-original-title="Borrar"  data-toggle="tooltip" data-placement="top" href="#" onclick="if (confirm(&quot;¿Estás seguro que deseas borrar el usuario: <?php echo $user['User']['username']; ?> ?&quot;)) { document.post_delete<?php echo $user['User']['idUser']; ?>.submit(); } event.returnValue = false; return false;" class="btn menu-icon vd_bd-yellow vd_yellow"><i class="glyphicon glyphicon-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Panel Widget --> 
            </div>
            <!-- col-md-12 --> 
        </div>
            <?php if($buttonAvaliable=='false'){ ?>
                <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')) ?>" class="btn btn-success start"> <i class="glyphicon glyphicon-plus"></i> <span>Agregar Usuario</span> </a>
            <?php } ?>
    </div> 
</div>
<?php }else{ ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>