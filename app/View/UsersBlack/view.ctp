<?php if ($userRole == "Admin") { ?>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
        </li>
        <li>
            <a href="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'index')) ?>" class="active">Usuarios Black</a>
        </li>
        <li>
            <?php echo $userBlack['UserBlack']['name'] ?>
        </li>
    </ul>    

        <div class="col-sm-6">
                    <table class="table m-t-50">
                      <tbody>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Nombre</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['name']); ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Apellido Paterno</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['fathersLastName']); if(!($userBlack['UserBlack']['fathersLastName'])||($userBlack['UserBlack']['fathersLastName']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Apellido Materno</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['mothersLastName']); if(!($userBlack['UserBlack']['mothersLastName'])||($userBlack['UserBlack']['mothersLastName']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Nacionalidad</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['nationality']); if(!($userBlack['UserBlack']['nationality'])||($userBlack['UserBlack']['nationality']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Teléfono Celular</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['celPhone']); if(!($userBlack['UserBlack']['celPhone'])||($userBlack['UserBlack']['celPhone']=="")){ echo "<font style='color: gray'>No especificado</font>"; } ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Preferencia cabina Economy</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['economyCabinPref']);  if(!($userBlack['UserBlack']['economyCabinPref'])||($userBlack['UserBlack']['economyCabinPref']=="")){ echo "<font style='color: gray'>No especificado</font>"; } ?>
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>

                <div class="col-sm-6">
                    <table class="table m-t-50">
                      <tbody>
                        <tr>
                          <td class="">
                            <p class="small hint-text">RUT/Cédula de Identidad</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['identifier']); if(!($userBlack['UserBlack']['identifier'])||($userBlack['UserBlack']['identifier']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Correo</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['email']); if(!($userBlack['UserBlack']['email'])||($userBlack['UserBlack']['email']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Genero</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['gender']); if(!($userBlack['UserBlack']['gender'])||($userBlack['UserBlack']['gender']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Teléfono de Oficina</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['officePhone']); if(!($userBlack['UserBlack']['officePhone'])||($userBlack['UserBlack']['officePhone']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Teléfono Particular</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['homePhone']); if(!($userBlack['UserBlack']['homePhone'])||($userBlack['UserBlack']['homePhone']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td class="">
                            <p class="small hint-text">Preferencia cabina Business</p>
                            <p class="text-black">
                              <?php echo h($userBlack['UserBlack']['businessCabinPref']); if(!($userBlack['UserBlack']['businessCabinPref'])||($userBlack['UserBlack']['businessCabinPref']=="")){ echo "<font style='color: gray'>No especificado</font>"; }  ?>
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>



<table class="table table-hover">
    <?php if (!empty($array_userBlack)): ?> 
        <?php foreach ($array_userBlack as $option): ?>
    <thead style="background: gray;">
                        <tr>
                          <th style="background: gray; color: white;"><?php echo $option['type']?></th>
                          <th valign="middle" style="vertical-align:middle;"></th>
                          <th valign="middle" style="vertical-align:middle;"></th>
                          <th valign="middle" style="vertical-align:middle;"></th>
                          <th valign="middle" style="vertical-align:middle;"></th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <?php if (!empty($option['relatives'])): ?> 
                            <?php foreach ($option['relatives'] as $relative): ?>
                                <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $relative['name'] ?></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $relative['email'] ?></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $relative['type'] ?></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;Observación: <?php echo $relative['observation'] ?></td>
                                        <td class="userBlack-action" style="width:15%;">
                                              <a style="margin-left: 16px; padding-left: 16px;" ></a>
                                              <a data-original-title="Editar" data-toggle="tooltip" data-placement="top" class="btn userBlack-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('controller' => 'relatives', 'action' => 'edit',$relative['idRelative'],$userBlack['UserBlack']['idUserBlack'])) ?>"> <i class="fa fa-pencil"></i> </a>
                                              <form action="<?php echo $this->Html->url(array('controller' => 'relatives', 'action' => 'delete',$relative['idRelative'],$userBlack['UserBlack']['idUserBlack'])) ?>" name="post_deleteRow<?php echo $relative['idRelative'] ?>" id="post_deleteRow<?php echo $relative['idRelative'] ?>" style="display:none;" method="post">
                                                    <input type="hidden" name="_method" value="POST">
                                                </form>
                                                <a data-original-title="Borrar"  data-toggle="tooltip" data-placement="top" href="#" onclick="if (confirm(&quot;¿Estás seguro que deseas borrar el familiar: <?php echo $relative['name'] ?> ?&quot;)) { document.post_deleteRow<?php echo $relative['idRelative'] ?>.submit(); } event.returnValue = false; return false;"  class="btn userBlack-icon vd_bd-red vd_red" href=""><i class="glyphicon glyphicon-trash"></i></a>
                                          </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
        <?php endforeach; ?>
                      
    <?php endif; ?>
</table>

    <a href="<?php echo $this->Html->url(array('controller' => 'relatives', 'action' => 'add', $userBlack['UserBlack']['idUserBlack'])) ?>" class="btn btn-info start"> <i class="glyphicon glyphicon-plus"></i> <span> Agregar Familiar</span> </a>
    <a href="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'edit', $userBlack['UserBlack']['idUserBlack'])) ?>" class="btn btn-success start"> <i class="glyphicon glyphicon-upload"></i> <span> Editar Usuario Black</span> </a>
    <form action="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'delete', $userBlack['UserBlack']['idUserBlack'])) ?>" name="post_delete" id="post_delete" style="display:none;" method="post">
        <input type="hidden" name="_method" value="POST">
    </form>
    <a href="#" onclick="if (confirm(&quot;¿Estás seguro que deseas borrar el Usuario Black: <?php echo $userBlack['UserBlack']['name'] ?> ?&quot;)) { document.post_delete.submit(); } event.returnValue = false; return false;" class="btn btn-danger start"><i class="glyphicon glyphicon-trash"></i> Borrar Usuario Black</a>
    
   
<?php } else { ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>
