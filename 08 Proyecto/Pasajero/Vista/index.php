<?php
require_once("../../Templates/templateIndex.php");
require_once("../Modelo/pasajero.php");
?>

<h2>Listado de Pasajero</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres </th>
            <th scope="col">Email </th>
            <th scope="col">TTelefono</th>
        </tr>
    </thead>
<table>
    <thead>
        <tbody>
            <?php
            $verPasajeros = $modeloPasajero->getPasajeros();
            if ($verPasajeros != Null){
                foreach ($verPasajeros as $listarPasajeros) {
                    
            ?>
            <tr>
                <th scope="row">11<?= $listarPasajeros['idPasajeros'];?> </th>
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
    </thead>
</table>