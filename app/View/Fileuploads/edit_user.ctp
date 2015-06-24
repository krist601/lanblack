<ul class="breadcrumb">
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>" class="active">Home</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>" class="active">Usuarios</a>
    </li>
    <li>
        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'view',$idUser)) ?>" class="active"><?php echo $username ?></a>
    </li>
    <li>
        Editar Imagen
    </li>
</ul>

<div class="questionaires view">
    <div class="vd_title-section clearfix">
        <div class="vd_panel-header">
            <h1>Editar Imagen de Usuario</h1>

        </div>
    </div>  
    <div class="vd_content-section clearfix">
        <div class="related">


            <div class="fileuploads form">
                <?php echo $this->Form->create('Fileupload', array('type' => 'file'));
                        echo '</div><div class="form-group form-group-default" aria-required="true">';
                        echo $this->Form->input('archivo', array('type' => 'file'));
                        echo '</div>'
                ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('fileName', array('type' => 'hidden'));
                    ?>
                </fieldset>
                <br>

                <?php
                echo $this->Form->input("Editar", array("label" => false, 'div' => 'false', "class" => "btn btn-success start", "type" => "submit"));
                echo $this->Form->end();
                ?>

            </div>
        </div>

    </div>