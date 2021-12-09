<main id="main">
    <?php

    $institutes = $instituteInfo ?? "No se proporcionó";

    ?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Catalogo de instituciones</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Catalogo de instituciones</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="cuerpo">
               <p align="center"><b>Catalogo de las instituciones encontradas en nuestros registros</b></p>
            </div>
        </div>

        <div class="container">
            <?php

                echo '<table class="table" >
                            <tr bgcolor="#8BD1F6">
                                <th scope="col">Nombre</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Email</th>
                                <th scope="col">Servicios</th>
                            </tr>';



                if(isset($institutes)){

                    foreach($institutes as $info) if("aceptado" == $info['status']){
                 ?>

                <tr>
                    <td scope="row"><?=$info['nombre_institucion'] ?? "no se proporciono"?></td>
                    <td scope="row"><?=$info['direccion_institucion'] ?? "no se proporciono"?></td>
                    <td scope="row"><?=$info['estado'] ?? "no se proporciono"?></td>
                    <td scope="row"><?=$info['ciudad'] ?? "no se proporciono"?></td>
                    <td scope="row"><?=$info['telefono'] ?? "no se proporciono"?></td>
                    <td scope="row"><?=$info['email'] ?? "no se proporciono"?></td>
                    <td scope="row"><?=$info['servicios'] ?? "no se proporciono"?></td>
                </tr>

                <?php
                    }
                }

                echo '</table>';

            ?>

        </div>

        </div>

    </section>





</main><!-- End #main -->