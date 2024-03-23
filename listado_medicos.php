

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.jpg">
    <title>Sanidad</title>

    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" height="60" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
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

    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
            <h1>Listado Médicos</h1>
        </div>

        <div class="row">

            <div class="col-md-6">
                <img src="img/medicos.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <?php

                $servername = "localhost"; // Cambia "localhost" por la dirección de tu servidor de base de datos si es diferente
                $username = "root"; // Cambia "tu_usuario" por tu nombre de usuario de MySQL
                $password = ""; // Cambia "tu_contraseña" por tu contraseña de MySQL
                $database = "sanitat"; // Cambia "tu_base_de_datos" por el nombre de tu base de datos

                $conn2 = mysqli_connect($servername, $username, $password, $database);
                $sql = "SELECT * FROM sanitat.doctor";
                $med = mysqli_query($conn2, $sql);

                $data = array();

                // Verificar si hay resultados
                if (mysqli_num_rows($med) > 0) {
                    // Recorrer los resultados y guardarlos en el array
                    while ($med2 = mysqli_fetch_assoc($med)) {
                        echo "Codigo Hospital: ".$med2['HOSPITAL_COD']." - Numero Doctor: ".$med2['DOCTOR_NO']." - Apellido: ".$med2['COGNOM']." - Especialidad: ".$med2['ESPECIALITAT']."<br>";
                    }
                } else {
                    echo "No se encontraron resultados.";
                }
                ?>
        </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
