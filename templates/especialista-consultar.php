<main id="main">
    <?php

    $espeInfo = $espeInfo ?? "No se proporcionó";

    ?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Catalogo de Especialistas</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Catalogo de Especialistas</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="cuerpo">
                <p align="center"><b>Catalogo de los Especialistas encontradas en nuestros registros</b></p>
            </div>
        </div>

        <div class="container">
            <?php

            echo '<table class="table" >
                            <tr bgcolor="#8BD1F6">
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Email</th>
                            </tr>';

            foreach ($espeInfo as $info) {

                ?>

                <tr>
                    <td scope="row"><?= $info['nombre_especialista'] ?? "no se proporciono" ?></td>
                    <td scope="row"><?= $info['apellido_especialista'] ?? "no se proporciono" ?></td>
                    <td scope="row"><?= $info['estado_especialista'] ?? "no se proporciono" ?></td>
                    <td scope="row"><?= $info['ciudad_especialista'] ?? "no se proporciono" ?></td>
                    <td scope="row"><?= $info['telefono_especialista'] ?? "no se proporciono" ?></td>
                    <td scope="row"><?= $info['email_especialista'] ?? "no se proporciono" ?></td>
                </tr>

                <?php
            }

            echo '</table>';

            ?>

        </div>

        </div>

    </section>


</main><!-- End #main -->