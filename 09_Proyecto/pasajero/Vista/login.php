<?php
require_once("../../Template/templateFormulario.php");
?>
<header class="p-3 bg-dark text-white">
    <div >
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" _mstaria-label="138918">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a class="navbar-brand" href="#"><img src="../../Imagen/logo.png" width="60" height="60"
                            alt="CitricApp"></a></li>
                <li><a href="#" class="nav-link px-2 text-white" _msthash="1633541" _msttexthash="136006">
                        <h1><b>CitricApp</b></h1>
                    </a></li>

            </ul>
            <a href="../../Index.php"><button type="button" class="btn btn-info" _msthash="1717859"
                    _msttexthash="264433">Volver</button></a>
        </div>
</header>

    <div class="container">
        <form action="../Controlador/login.php" method="POST">
            <br>
            <center> <b> Inicio de Sesion</b></center>
            <div class="mb-4">
                <label> Email</label>
                <input type="text" name="email" placeholder="@correo.com" class="form-control" required>
            </div>

            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

           <center><button type="submit" name="btn_enviar" class="btn btn-success">Enviar</button></center> 
        </form>
    </div>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    <footer>
        <div class="p-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">CitricApp</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula
                        rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel
                        in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                            class="icon ion-social-twitter"></i></a><a href="#"><i
                            class="icon ion-social-snapchat"></i></a><a href="#"><i
                            class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">CitricApp © 2022</p>
        </div>
        </div>
    </footer>