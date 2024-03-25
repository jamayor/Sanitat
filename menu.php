<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="José Antonio Mayor Donaire">
        <link rel="icon" href="img/logo.jpg">
        <title>Sanidad</title>
        
        <!--Template based on URL below-->
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Place your stylesheet here-->
        <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
        <style>
        /* Estilos CSS para centrar la imagen */
        .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Establece el contenedor al 100% del alto de la ventana del navegador */
        }
        .imagen-centrada {
            max-width: 100%; /* Ajusta la imagen al 100% del ancho del contenedor */
            max-height: 100%; /* Ajusta la imagen al 100% del alto del contenedor */
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" height="60" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="menu.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listado_medicos.php">Listado de Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listado_hospitales.php">Listado de Hospitales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alta_ingresos.php">Alta de Ingresos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alta_hospitales.php">Alta de Hospitales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-center mt-5 pt-5">
            <h1>Bienvenido</h1>
        </div>
        <div class="contenedor">
            <img src="img/hospital.jpg" class="imagen-centrada">
        </div>
    </body>
</html>