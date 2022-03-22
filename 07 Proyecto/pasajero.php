<?php
require_once("Templates/template_formulario.php");
?>

<div class="formulario"
<form action="" method="">
  <div class="mb-3">
    <label>Nombres Completos</label>
    <input type="text" name="nombre" class="form-control">
    
  </div>
  <div class="mb-3">
  <label >Email</label>
    <input type="text" name ="email" placeholder="@correo.com" class="form-control">
</div>

  <div class="mb-3">
  <label>Telefono</label>
    <input type="tex" name="telefono" placeholder="Celular.." class="form-control" pattern="[0-10]"{10}" required>
  </div>
  <button type="button" class="btn btn-success">Registrar</button require>
</form>
</div>
