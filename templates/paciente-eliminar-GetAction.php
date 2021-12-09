<main id="main">

    <?php

    $userInfo = $data ?? NULL;
    $nombre_paciente = $userInfo["nombre"] ?? "No se proporcionó";



    ?>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Eliminar paciente: <?=$nombre_paciente?> </h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Eliminar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 login">

                    <h2> Eliminar paciente</h2>

                    <p>

                    <div class='alert alert-danger' role='alert'>
                        ¿Estás seguro que deseas eliminar al paciente permanentemente?
                        <br>
                        <b>ESTA ACCIÓN NO PUEDE SER REVERTIDA</b>
                    </div>

                    </p>

                    <div id="tutor">
                        <form action="" method="post" role="form">

                            <div class="my-3">

                            </div>
                            <div class="text-center submitPurple">
                                <input type="checkbox" id="eliminar" name="eliminar" value="eliminar" onclick="document.getElementById('botonEliminar').removeAttribute('disabled')">
                                <button type="submit" id="botonEliminar" disabled>Eliminar paciente</button>
                                <button type="button" onclick="window.history.back()">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->