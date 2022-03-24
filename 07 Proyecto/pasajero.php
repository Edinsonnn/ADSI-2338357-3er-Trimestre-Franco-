<?php
require_once("Templates/template_formulario.php");
?>

<div class="formulario"
<form action="" method="">
<div class="text-center mb-4">
        <img class="mb-4" src="imagen/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Registrarme</h1>
        
      </div>
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
