<?php
require_once("../../Templates/template_formulario.php");
?>
<div class="formulario">
    <form action="../Controlador/add.php" method="POST">
        <div class="mb-3">
            <label>Nombres completos</label>
            <input type="text" name="nombres" class="form-control">
        </div>
        <div class="mb-3">
            <label>Telefono</label>
            <input type="text" name="telefono" placeholder="Celular.." class="form-control">
        </div>
        <div class="mb-3">
            <label>Horario</label>
            <input type="time" name="horario" placeholder="hora ingreso" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" placeholder="@correo.com" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password"  class="form-control">
        </div>
        <button type="submit" name ="btn_enviar" class="btn btn-success">Registrar</button>

    </form>
</div>
