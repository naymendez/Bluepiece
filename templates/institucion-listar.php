<main id="main">

    <?php
    $institute = $institute ?? "Paciente";
    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mis instituciones registradas</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Instituciones registradas</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="mchat">
                <?php

                if(empty($institutes) || empty($user)) {
                    echo "No tiene {$institute}s registrados.";
                }
                else {

                    echo '<table class="table" >
                            <tr bgcolor="#8BD1F6">
                                <th scope="col">Nombre</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Email</th>
                                <th scope="col">Servicios</th>
                                <th scope="col">Estado de institucion</th>
                            </tr>';

                    foreach($institutes as $institucion) {

                        ?>

                        <tr>
                            <td scope="row"><?=$institucion["nombre_institucion"]?></td>
                            <td scope="row"><?=$institucion["direccion_institucion"]?></td>
                            <td scope="row"><?=$institucion["estado"]?></td>
                            <td scope="row"><?=$institucion["ciudad"]?></td>
                            <td scope="row"><?=$institucion["telefono"]?></td>
                            <td scope="row"><?=$institucion["email"]?></td>
                            <td scope="row"><?=$institucion["servicios"]?></td>
                            <td scope="row"><?=$institucion["status"]?></td>
                            <td scope="row"><a href="?section=institucion&action=editar&parameter=<?=$institucion["id_institucion"]?>">Editar institucion</a></td>
                            <td scope="row"><a href="?section=institucion&action=eliminar&parameter=<?=$institucion["id_institucion"]?>">Eliminar institucion</a></td>
                        </tr>


                        <?php
                    }

                    echo '</table>';
                }
                ?>

            </div>

        </div>
    </section>

</main><!-- End #main -->