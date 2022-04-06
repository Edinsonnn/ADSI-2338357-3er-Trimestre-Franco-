<?php
    require_once("Template/templateIndex.php");
?>
<!-- Menu del Index -->
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" _mstaria-label="138918"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class="navbar-brand" href="#"><img src="Imagen/logo.png" width="60" height="60" alt="CitricApp"></a></li>
          <li><a href="#" class="nav-link px-2 text-white" _msthash="1633541" _msttexthash="136006"><h1><b>CitricApp</b></h1></a></li>
          
        </ul>

        <div class="text-end">
          <a href="pasajero/Vista/add.php"> <button type="button" class="btn btn-primary" _msthash="1718041" _msttexthash="176449"><i class="bi bi-person-plus-fill"> Registrar </i></button></a>  
          <a href="pasajero/Vista/login.php"><button type="button" class="btn btn-success" _msthash="1717859" _msttexthash="264433">Iniciar sesión</button></a>
          <a href="pasajero/Vista/index.php"><button type="button" class="btn btn-warning" _msthash="1717859" _msttexthash="264433">Buscar</button></a>
        </div>
      </div>
    </div>
  </header>
    <br><br>
    <!-- Contenedores de elementos  imagen circulo texto -->
    <center>
    <div class="row">
      <div class="col-lg-4">
        <img src="Imagen/001.png" class="avatar"  >

        <h2 _msthash="970905" _msttexthash="152542">Encabezado</h2>
        <p _msthash="929318" _msttexthash="10116535">Algún contenido de marcador de posición representativo para las tres columnas de texto debajo del carrusel. Esta es la primera columna.</p>
        <p><a class="btn btn-secondary" href="#" _msthash="1115764" _msttexthash="224497">Ver detalles »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="Imagen/002.png" alt="Avatar" class="avatar"  >

        <h2 _msthash="971113" _msttexthash="152542">Encabezado</h2>
        <p _msthash="929513" _msttexthash="8021013">Otro poco emocionante de contenido representativo de marcador de posición. Esta vez, hemos pasado a la segunda columna.</p>
        <p><a class="btn btn-secondary" href="#" _msthash="1116011" _msttexthash="224497">Ver detalles »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="avatar" src="Imagen/003.png" alt="Avatar" class="avatar"  >

        <h2 _msthash="971321" _msttexthash="152542">Encabezado</h2>
        <p _msthash="929708" _msttexthash="4547907">Y por último, la tercera columna de contenido representativo del marcador de posición.</p>
        <p><a class="btn btn-secondary" href="#" _msthash="1116258" _msttexthash="224497">Ver detalles »</a></p>
      </div><!-- /.col-lg-4 -->
    </div>
    </center>
    <br><br>
  <!-- Contenedores de elementos  imagen cuadro texto -->
  <div class="row">
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary" _msthash="1515657" _msttexthash="60918">Mundo</strong>
          <h3 class="mb-0" _msthash="1273116" _msttexthash="306839">Entrada destacada</h3>
          <div class="mb-1 text-muted" _msthash="1336166" _msttexthash="48880">nov 12</div>
          <p class="card-text mb-auto" _msthash="1224925" _msttexthash="7882225">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.</p>
          <a href="#" class="stretched-link" _msthash="1223677" _msttexthash="234481">Seguir leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="809640"><title _mstHash="1337063" _mstTextHash="112281">Marcador</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" _mstHash="1755052" _mstTextHash="135850">Miniatura</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success" _msthash="1516073" _msttexthash="95472">Diseño</strong>
          <h3 class="mb-0" _msthash="1273480" _msttexthash="546507">Título de la publicación</h3>
          <div class="mb-1 text-muted" _msthash="1336543" _msttexthash="48737">nov 11</div>
          <p class="mb-auto" _msthash="1225276" _msttexthash="7882225">Esta es una tarjeta más amplia con texto de apoyo a continuación como una introducción natural a contenido adicional.</p>
          <a href="#" class="stretched-link" _msthash="1224028" _msttexthash="234481">Seguir leyendo</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posición: Miniatura" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="809640"><title _mstHash="1337440" _mstTextHash="112281">Marcador</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" _mstHash="1755520" _mstTextHash="135850">Miniatura</text></svg>

        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="p-3 bg-dark text-white">
        <footer>
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
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
        </footer>