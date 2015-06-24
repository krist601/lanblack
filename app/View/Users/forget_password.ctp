
<?php
echo $this->Form->create('User', array("controller" => "users", "action" => "forgetPassword", "method" => "post"))
?>
<div class="form-group form-group-default">
    <label>Correo</label>
    <div class="controls">
        <input type="text" name="data[User][username]" id="data[User][username]" placeholder="Correo Electrónico" class="form-control" required>
    </div>
</div>
<button class="btn btn-primary btn-cons m-t-10" type="submit">Eviar Correo</button>
<?php
echo $this->Form->end();
?>