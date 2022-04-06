<?php
require_once("../../Templates/template_formulario.php");
?>

<div class="formulario">

    <form action="../Controlador/login.php" method="POST">

        <div class="mb-3">
            <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
        </div>

        <div class="form-label-group">
            <label for="inputEmail">Email</label>
            <input type="text" name="email" placeholder="Email address" required="">
        </div>
        <br>
        <div class="mb-3">
            <label for="inputPassword">Password</label>
            <input type="password" name="password" placeholder="Password" required="">
        </div>
    
        <button typt="submit" name="btn_enviar" class="btn btn-success">Sign in</button>

    </form>

</div>