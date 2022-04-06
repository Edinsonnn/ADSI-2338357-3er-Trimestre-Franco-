<?php
require_once("../../Templates/templateIndex.php");
require_once("../Modelo/pasajero.php");
$modeloPasajero = new Pasajero();
?>

<h2>Listado de Pasajero</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres </th>
            <th scope="col">Email </th>
            <th scope="col">Telefono</th>
        </tr>
    </thead>
    <tbody>
            <?php
            $verPasajeros = $modeloPasajero->getPasajero();
            if ($verPasajeros != Null){
                foreach ($verPasajeros as $listarPasajeros) {
                    
            ?>
            <tr>
                <th scope="row">1<?= $listarPasajeros['idPasajero'];?> </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>

            </tr>
            <?php
                }
            }
            ?>
    </tbody>
</table>