 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Editar institucion</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Regresar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div class="institucion editar">
                <?php

                if(isset($warning)) {
                    echo $warning;
                }
                else {

                    if(isset($success)) {

                        echo "<div class='alert alert-success' role='alert'>$success</div>";

                    }

                ?>

                    <div class="row d-flex justify-content-center">

                        <h2 class="text-center" >Editar  institucion</h2>

                        <div class="col-md-8 editar">

                            <form method="post">

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label class="title">Datos institucion</label>
                                        <label> institucion: </label>
                                        <input type="text" class="form-control" name="nombre_institucion" id="nombre" placeholder="Nombre *" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">

                                        <label>Direccion: </label>

                                        <input type="text" class="form-control" name="direccion_institucion" id="direccion" placeholder="Direccion *" required="">
                                    </div>
                                </div>

                                 

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>Estado: </label>
                                        <input type="text" class="form-control" name="estado"  id="estado" placeholder="Estado *" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                         
                                        <label>Ciudad: </label>
                                       <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad *" required="">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>Telefono: </label>
                                        <input type="number" min="0" class="form-control" name="telefono" id="telefono" placeholder="Telefono *" required="">  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label>email: </label>
                                        <input type="email" class="form-control" name="Email" id="Email" placeholder="Email *">
                                    </div>
                                </div>


                                <div class="submitPurple text-center submitButton">
                                    <button type="submit">Editar Institucion</button>
                                </div>


                            </form>

                        </div>

                    </div>

                <?php
                }
                ?>

            </div>

        </div>
    </section>

</main><!-- End #main -->