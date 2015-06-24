<?php if($userRole=="Admin"){?>
<ul class="breadcrumb">
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>" class="active">Usuarios</a>
    </li>
    <li>
        Crear Usuario
    </li>
</ul>

<div class="vd_title-section clearfix">
    <div class="vd_panel-header">
        <h1>Crear Usuario</h1>

    </div>
</div> 
<div class="vd_content-section clearfix">
    <div class="related">
        <div class="users form">
            <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <?php
                echo '<div class="col-sm-6"><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('name', array('label' => 'Nombre', 'class' => 'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('email', array('label' => 'Correo', 'class' => 'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('role', array('label' => 'Rol', 'class' => 'form-control',
                    'options' => array('Admin' => 'Admin', 'Usuario' => 'Usuario')
                ));
                echo '</div></div><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('username', array('label' => 'Usuario', 'class' => 'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('password', array('label' => 'Contraseña', 'class' => 'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('confirmPassword', array('label' => 'Confirma la Contraseña', 'class' => 'form-control'));
                echo '</div><div class="form-group form-group-default" aria-required="true">';
                ?>
            </fieldset><br>
            <?php echo $this->Form->input("Agregar", array("label" => false, 'div' => 'false', "class" => "btn btn-success start", "type" => "submit"));
            echo $this->Form->end();
            ?>
        </div>
    </div>

</div>
<?php }else{ ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>