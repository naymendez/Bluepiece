<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Registrar una nueva institucion</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Registrar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 login register">

                    <h2> Registrar institucion </h2>


                    <?php

                    if(isset($alerta)) {
                        echo "<div class='alert alert-warning' role='alert'>$alerta</div>";
                    }

                    ?>


                    <div id="">
                        <form action="" method="post" role="form">

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label>Datos de la institucion</label>
                                    <input type="text" class="form-control" name="nombre_institucion" id="nombre" placeholder="Nombre *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="direccion_institucion" id="direccion" placeholder="Direccion *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="estado"  id="estado" placeholder="Estado *" required="">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad *" required="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="number" min="0" maxlength="10" class="form-control" name="telefono" id="telefono" placeholder="Telefono *" required="required">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name=email" id="Email" placeholder="Email *" equired="required">

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="servicios" id="Servicios" placeholder="Servicios *">

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mt-3">
                                    <input type="file" disabled="disabled" class="form-control" name="Documento" id="Documento" placeholder="Documentacion para la institucion*">

                                </div>
                            </div>

                            <input type="hidden" name="userInput" value="checkRegister"/>
                            <div class="text-center submitPurple"><br><button type="submit">Registrar insititucion</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->