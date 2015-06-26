<?php if($userRole=="Admin"){?>
<ul class="breadcrumb">
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'index')) ?>" class="active">Usuarios Black</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'usersBlack', 'action' => 'view',$idUserBlack)) ?>" class="active"><?php echo $blackName ?></a>
    </li>
    <li>
        EDITAR <?php echo $blackName ?>
    </li>
</ul>

<div class="questionaires view">
    <div class="vd_title-section clearfix">
        <div class="vd_panel-header">
            <h1>Editar Menú</h1>
        </div>
    </div>  
    <div class="vd_content-section clearfix">
        <div class="related">

            <div class="fileuploads form" style="margin: 15px; padding: 15px;">
                <?php echo $this->Form->create('UserBlack'); ?>
                
               <div class="col-sm-6">
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('name', array('label' => 'Nombre', 'class' => 'form-control'));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('fathersLastName', array('label' => 'Apellido Paterno', 'class' => 'form-control'));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('mothersLastName', array('label' => 'Apellido Materno', 'class' => 'form-control'));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('nationality', array('label' => 'Nacionalidad', 'class' => 'form-control'));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('celPhone', array('label' => 'Telf. Celular', 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('economyCabinPref', array('label' => 'Preferencia de Asiento (Business)', 'class' => 'form-control',
                            'options' => array(''=>'Seleccione una opción...','Ventana' => 'Ventana', 'Pasillo' => 'Pasillo')
                        ));?>
                    </div>
                </div>
               <div class="col-sm-6">
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('identifier', array('label' => 'Rut/Cédula de Identidad', 'class' => 'form-control'));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('email', array('label' => 'Correo', 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('gender', array('label' => 'Genero', 'class' => 'form-control',
                            'options' => array('Masculino' => 'Masculino', 'Femenino' => 'Femenino')
                        ));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('officePhone', array('label' => 'Telf. Oficina', 'class' => 'form-control'));?>
                    </div>
                   <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('homePhone', array('label' => 'Telf. Particular', 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('businessCabinPref', array('label' => 'Preferencia de Asiento (Economy)', 'class' => 'form-control',
                            'options' => array(''=>'Seleccione una opción...','Primera Fila' => 'Primera Fila', 'Salida de Emergencias' => 'Salida de Emergencias')
                        ));?>
                    </div>
                </div>
            
                <br>
                <?php
                echo $this->Form->input("Editar", array("label" => false, 'div' => 'false', "class" => "btn btn-success start", "type" => "submit"));
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>
<?php }else{ ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>