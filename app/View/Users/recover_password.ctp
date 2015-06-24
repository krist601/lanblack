<?php echo $this->Form->create('User'); ?>
<!-- START Form Control-->
<div class="form-group form-group-default">
    <label>Contraseña</label>
    <div class="controls">
        <input type="password" class="form-control" name="data[User][password]" id="data[User][password]" placeholder="Credenciales" required>
    </div>
</div>
<div class="form-group form-group-default">
    <label>Confirme la Contraseña</label>
    <div class="controls">
        <input type="password" class="form-control" name="data[User][confirmPassword]" id="data[User][password]" placeholder="Repetir Credenciales" required>
    </div>
</div>
<button class="btn btn-primary btn-cons m-t-10" type="submit">Restablecer</button>
<?php
echo $this->Form->end();
?>
