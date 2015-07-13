<?php echo $this->Form->create('User', array("controller" => "users", "action" => "login", "method" => "post")) ?>
    <!-- START Form Control-->
    <div class="form-group form-group-default">
        <label>Usuario</label>
        <div class="controls">
            <input type="text" name="data[User][username]" id="data[User][username]" placeholder="Usuario de LAN/TAM Black" class="form-control" required>
        </div>
    </div>
    <!-- END Form Control-->
    <!-- START Form Control-->
    <div class="form-group form-group-default">
        <label>Contraseña</label>
        <div class="controls">
            <input type="password" class="form-control" name="data[User][password]" id="data[User][password]" placeholder="Credenciales" required>
        </div>
    </div>
    <div class="row">
              <div class="col-md-6 text-left">
                <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'forgetPassword')) ?>" class="text-info small">Olvide mi contraseña.</a>
              </div>
            </div>
    <button class="btn btn-primary btn-cons m-t-10" type="submit">Entrar</button>
<?php echo $this->Form->end(); ?>