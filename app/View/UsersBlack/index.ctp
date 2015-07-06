<ul class="breadcrumb">
    <li>
        <p><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a></p>
    </li>
    <li>
        Usuarios Black
    </li>
</ul>

<div class="vd_title-section clearfix">
    <div class="vd_panel-header">
        <h1>Listado de Usuarios Black</h1>
    </div> 
</div>
<div class="vd_content-section clearfix">
    <div class="related">
        <div class="row">
            <div class="col-md-12">
                <div class="panel widget">
                    <div class="panel-body table-responsive">
                        <table class="table table-hover demo-table-search" id="tableWithSearch">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">RUT/Cédula de Identidad</th>
                                    <th style="text-align: center;">Nombre</th>
                                    <th style="text-align: center;">Apellido Paterno</th>
                                    <th style="text-align: center;">Apellido Materno</th>
                                    <th style="text-align: center;">Correo</th>
                                    <th style="text-align: center;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usersBlack as $userBlack): ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo h($userBlack['UserBlack']['identifier']); if(!($userBlack['UserBlack']['identifier'])||($userBlack['UserBlack']['identifier']=="")){ echo "No Registrado"; }  ?></td>
                                        <td style="text-align: center;"><?php echo h($userBlack['UserBlack']['name']); ?></td>
                                        <td style="text-align: center;"><?php echo h($userBlack['UserBlack']['fathersLastName']); if(!($userBlack['UserBlack']['identifier'])||($userBlack['UserBlack']['identifier']=="")){ echo "No Registrado"; } ?></td>
                                        <td style="text-align: center;"><?php echo h($userBlack['UserBlack']['mothersLastName']); if(!($userBlack['UserBlack']['identifier'])||($userBlack['UserBlack']['identifier']=="")){ echo "No Registrado"; } ?></td>
                                        <td style="text-align: center;"><?php echo h($userBlack['UserBlack']['email']); ?></td>
                                        <td class="userBlack-action" style="padding: 16px;text-align: center;">
                                            <div style=" width: 220px;"> 
                                                <a data-original-title="Ver" data-toggle="tooltip" data-placement="top" class="btn userBlack-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('action' => 'view', $userBlack['UserBlack']['idUserBlack'])); ?>"> <i class="fa fa-eye"></i> </a>
                                                <?php if($userBlack['UserBlack']['completed']=="1"){  ?>
                                            <a data-original-title="Activar edición de usuario" data-toggle="tooltip" data-placement="top" class="btn userBlack-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('action' => 'activateFromIndex', $userBlack['UserBlack']['idUserBlack'])); ?>"> <i class="fa fa-power-off"></i> </a>
                                                <?php }else {?>
                                            <a data-original-title="Desactivar edición de usuario" data-toggle="tooltip" data-placement="top" class="btn userBlack-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('action' => 'desactivateFromIndex', $userBlack['UserBlack']['idUserBlack'])); ?>"> <i class="fa fa-power-off"></i> </a>
                                                <?php } ?>
                                            
                                            <a data-original-title="Editar" data-toggle="tooltip" data-placement="top" class="btn userBlack-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('action' => 'edit', $userBlack['UserBlack']['idUserBlack'])); ?>"> <i class="fa fa-pencil"></i> </a>
                                            <form action="<?php echo $this->Html->url(array('action' => 'delete', $userBlack['UserBlack']['idUserBlack'])) ?>" name="post_delete<?php echo $userBlack['UserBlack']['idUserBlack']; ?>" id="post_delete<?php echo $userBlack['UserBlack']['idUserBlack']; ?>" style="display:none;" method="post">
                                                <input type="hidden" name="_method" value="POST">
                                            </form>
                                            <a data-original-title="Borrar"  data-toggle="tooltip" data-placement="top" href="#" onclick="if (confirm(&quot;¿Estás seguro que deseas borrar el menú: <?php echo $userBlack['UserBlack']['name'] ?>?&quot;)) { document.post_delete<?php echo $userBlack['UserBlack']['idUserBlack']; ?>.submit(); } event.returnValue = false; return false;" class="btn userBlack-icon vd_bd-yellow vd_yellow"><i class="glyphicon glyphicon-trash"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <a href="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'add')) ?>" class="btn btn-success start"> <i class="glyphicon glyphicon-plus"></i> <span>Agregar Usuario Black</span> </a>
                    <a href="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'excel')) ?>" class="btn btn-success start"> <i class="glyphicon glyphicon-plus"></i> <span>Exportar a Excel</span> </a>
                    </div>
                </div>
                <!-- Panel Widget --> 
            </div>
            <!-- col-md-12 --> 
        </div>
            
    </div> 
</div>