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

<div class="questionaires view">
    <div class="vd_title-section clearfix">
        <div class="vd_panel-header">
            <h1>Crear Usuario</h1>

        </div>
    </div>  
    <div class="vd_content-section clearfix">
        <div class="related">


            <div class="fileuploads form" style="margin: 15px; padding: 15px;">
                <?php echo $this->Form->create('Fileupload', array('type' => 'file')); ?>
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
                echo $this->Form->input('confirmPassword', array('type'=>'password','label' => 'Confirma la Contraseña', 'class' => 'form-control'));
               
                
                
                echo '</div></div>';
                echo '<div class="col-sm-6"><div class="form-group form-group-default" aria-required="true">';
                echo $this->Form->input('archivo', array('type' => 'file'));
                echo '</div></div>';
                ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('fileName', array('type' => 'hidden'));
                    ?>
                </fieldset>
                <br>

                <?php
                echo $this->Form->input("Crear", array("label" => false, 'div' => 'false', "class" => "btn btn-success start", "type" => "submit"));
                echo $this->Form->end();
                ?>

            </div>
        </div>

    </div>