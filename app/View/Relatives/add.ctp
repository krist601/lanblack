<?php if($userRole=="Admin"){?>
<ul class="breadcrumb">
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'UsersBlack', 'action' => 'index')) ?>" class="active">Usuarios Black</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'UsersBlack', 'action' => 'view',$idBlack)) ?>" class="active"><?php echo $nameBlack ?></a>
    </li>
    <li>
        Agregar
    </li>
</ul>

<div class="questionaires view">
    <div class="vd_title-section clearfix">
        <div class="vd_panel-header">
            <h1>Agregar Familiar</h1>
        </div>
    </div>  
    <div class="vd_content-section clearfix">
        <div class="related">
            <div class="fileuploads form" style="margin: 15px; padding: 15px;">
                <?php echo $this->Form->create('Relative'); ?>
                
                <div class="col-sm-6">
                    <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('relativeType', array('label' => 'Tipo de Familiar', 'class' => 'form-control',
                            'options' => array('Hijo/a'=>'Hijo/a','Esposo/a' => 'Esposo/a', 'Cónyuge' => 'Cónyuge', 'Padre' => 'Padre', 'Madre' => 'Madre', 'Otro' => 'Otro')
                        ));?>
                    </div>
                    <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('name', array('label' => 'Nombre', 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group form-group-default" aria-required="true">
                        <?php echo $this->Form->input('identifier', array('label' => 'RUT', 'class' => 'form-control'));?>
                    </div>
                </div>
                <br>
                <?php
                echo $this->Form->input("Agregar", array("label" => false, 'div' => 'false', "class" => "btn btn-success start", "type" => "submit"));
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>

</div>
<?php }else{ ?> 
    <div class="alert alert-danger"> <span class="vd_alert-icon"></span><strong> Error! </strong> su usuario no tiene acceso a este módulo de la aplicación </div>    
<?php } ?>