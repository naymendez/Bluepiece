
<main id="main">
    <!-- ======= Breadcrumbs ======= -->

    <!-- ======= Estilos para vista servicio ======= -->
    <style>
        /* Nuevas clases*/
        .cuerpo{
            display: grid;
            justify-content: center;
            align-content: center;
            min-height: 10vh;
            grid-template-columns: repeat(1, 500px);
            grid-template-rows: repeat(1, 500px);

        }

        .cuerpo > button{
            font-size: 3rem;
            outline: none;
            background:url('./assets/img/instituto.jpg');
            filter: brightness(50%);

        }

        .cuerpo > button:hover{
            filter: brightness(75%);
        }

        .nombre{
            color: #ffffff;
            text-shadow: #000e4f 0.1em 0.1em 0.2em;
        }

    </style>

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Catalogo de servicios</h2>
                <ol>
                    <li><a href="index.php">Inicio</a></li>
                    <li>Catalogo de servicios</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <div>
               <p align="center"><b>Catalogo de servicios</b></p>
            </div>
        </div>

        <div class ="cuerpo">
            <button><a class="nombre" href="?section=institucion&action=consultar">Ver el catalogo de servicios</a></button>
        </div>

    </section>





</main><!-- End #main -->