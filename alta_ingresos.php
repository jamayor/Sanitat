<?php
if(!empty($_POST['ingreso']))
{
    $servername = "34.88.54.4"; // Cambia "localhost" por la dirección de tu servidor de base de datos si es diferente
    $username = "jamayor"; // Cambia "tu_usuario" por tu nombre de usuario de MySQL
    $password = "deltahftris"; // Cambia "tu_contraseña" por tu contraseña de MySQL
    $database = "sanitat"; // Cambia "tu_base_de_datos" por el nombre de tu base de datos

    //Insert
    $ins   = $_POST["inscripcion"];
    $ap   = $_POST["apellidos"];
    $dir = $_POST["direccion"];
    $cam  = $_POST["fecha"];
    $sex  = $_POST["sexo"];
    $nss  = $_POST["nss"];
    
    $sql = "INSERT INTO malalt (INSCRIPCIO, COGNOM, ADRECA, DATA_NAIX, SEXE, NSS) VALUES ('$ins', '$ap', '$dir', '$cam', '$sex', '$nss')";
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?>

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
                <li class="nav-item">
                    <a class="nav-link" href="listado_medicos.php">Listado de Médicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listado_hospitales.php">Listado de Hospitales</a>
                </li>
                <li class="nav-item active">
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
            <h1>Listado Pacientes</h1>
        </div>

        <div class="row">

            <div class="col-md-6">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    Inscripción <input type="text" name="inscripcion" placeholder="inscripcion"><br>
                    Apellidos <input type="text" name="apellidos" placeholder="apellidos"><br>
                    Dirección <input type="text" name="direccion" placeholder="dirección"><br>
                    Fecha de Nacimiento <input type="text" name="fecha" placeholder="año-mes-dia"><br>
                    Sexo <input type="text" name="sexo" placeholder="H/D"><br>
                    NSS <input type="text" name="nss" placeholder="111111111"><br>
                    <input type="submit" name="ingreso" value="Enviar">
                </form>

            </div>
            <div class="col-md-6">
                <?php

                $servername = "34.88.54.4"; // Cambia "localhost" por la dirección de tu servidor de base de datos si es diferente
                $username = "jamayor"; // Cambia "tu_usuario" por tu nombre de usuario de MySQL
                $password = "deltahftris"; // Cambia "tu_contraseña" por tu contraseña de MySQL
                $database = "sanitat"; // Cambia "tu_base_de_datos" por el nombre de tu base de datos

                $conn2 = mysqli_connect($servername, $username, $password, $database);
                $sql = "SELECT * FROM sanitat.malalt";
                $paciente = mysqli_query($conn2, $sql);

                $data = array();

                // Verificar si hay resultados
                if (mysqli_num_rows($paciente) > 0) {
                    // Recorrer los resultados y guardarlos en el array
                    while ($paciente2 = mysqli_fetch_assoc($paciente)) {
                        echo "Inscripción: ".$paciente2['INSCRIPCIO']." - Apellidos: ".$paciente2['COGNOM']." - Dirección: ".$paciente2['ADRECA']." - Fecha:  ".$paciente2['DATA_NAIX']." - Sexe:  ".$paciente2['SEXE']." - Nss:  ".$paciente2['NSS']."<br>";
                    }
                } else {
                    echo "No se encontraron resultados.";
                }
                ?>
        </div>
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
