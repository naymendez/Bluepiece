
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Eliminar institucion</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Eliminar institucion</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 login">

                    <h2> Eliminar institucion</h2>

                    <p>

                    <div class='alert alert-danger' role='alert'>
                        ¿Seguro que deseas eliminar la institucion?
                        <br>
                        todos los especialistas relacionados serán removidos de la institución y esta será eliminada del servicio.
                        <br>
                        <b>Presione Confirmar en el siguiente Campo para continuar con la baja de la institución o presione Cancelar para regresar al Perfil</b>
                    </div>

                    </p>

                    <div id="tutor">
                        <form action="" method="post" role="form">

                            <div class="my-3">

                            </div>
                            <div class="text-center submitPurple">
                                <input type="checkbox" id="eliminar" name="eliminar" value="eliminar" onclick="document.getElementById('botonEliminar').removeAttribute('disabled')">
                                <button type="submit" id="botonEliminar" disabled>Confirmar</button>
                                <button type="button" onclick="window.history.back()">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->