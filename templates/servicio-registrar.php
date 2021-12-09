<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Registrar un nuevo Servicio</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Registrar Servicio</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 login register">

                    <h2> Registrar Servicio </h2>


                    <?php

                    if(isset($alerta)) {
                        echo "<div class='alert alert-warning' role='alert'>$alerta</div>";
                    }

                    ?>


                    <div id="">
                        <form action="" method="post" role="form">

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label>Caracteristicas del Servicio</label>
									
                                    <input type="text" class="form-control" name="nombre_servicio" id="nombre" placeholder="Nombre *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="tipo_servicio" id="tipo" placeholder="Tipo *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="insititucion"  id="institucion" placeholder="Institucion *" required="">
                                </div>
                            </div>
							
                            <input type="hidden" name="userInput" value="checkRegister"/>
                            <div class="text-center submitPurple"><br><button type="submit">Registrar Servicio</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->