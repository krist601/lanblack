<?php if($userRole=="Admin"){?>
<ul class="breadcrumb">
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>" class="active">Usuarios</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'view',$idUser)) ?>" class="active"><?php echo $username; ?></a>
    </li>
    <li>
        Editar
    </li>
</ul>

        <h1>Editar Usuario</h1>
              <div class="vd_content-section clearfix">
<div class="related">
<div class="form-group-attached">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('idUser',array('label'=>false,'hidden'=>'true'));
                echo '<div class="col-sm-6"><div class="form-group form-group-default" aria-required="true">';
		echo $this->Form->input('name',array('label'=>'Nombre','class'=>'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
		echo $this->Form->input('email',array('label'=>'Correo','class'=>'form-control'));
                echo '</div></div><div class="form-group form-group-default" aria-required="true">';
		echo $this->Form->input('username',array('label'=>'Usuario','class'=>'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('role', array('label'=>'Rol','class'=>'form-control',
                    'options' => array('Admin'=>'Admin','Usuario' => 'Usuario')
                ));
                echo '</div></div>';
                
	?>
	</fieldset><br>
<?php echo $this->Form->input("Editar",array("label" => false,'div'=>'false', "class" => "btn btn-success start", "type" => "submit"));
	echo $this->Form->end(); ?>
</div>
          </div>
          
        </div>
<?php }else{ ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>