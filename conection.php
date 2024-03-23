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
    </head>
    <body>
        <?php
            $servername = "34.88.54.4"; // Cambia "localhost" por la dirección de tu servidor de base de datos si es diferente
            $username = "jamayor"; // Cambia "tu_usuario" por tu nombre de usuario de MySQL
            $password = "deltahftris"; // Cambia "tu_contraseña" por tu contraseña de MySQL
            $database = "sanitat"; // Cambia "tu_base_de_datos" por el nombre de tu base de datos

            $email=$_POST["email"];
            $pass=$_POST["pass"];

            function login($email, $pass, $servername, $username, $password, $database){
                // Verificar conexión
                    $sql = "SELECT COUNT(email)
                        FROM usuariossession
                        WHERE email='$email' AND password='$pass';";
                    $resultado = mysqli_query($conn = mysqli_connect($servername, $username, $password, $database), $sql);
                    if($resultado == 1){
                        return 1;
                    }else
                    return 0;
                } 

                $resultado = login($email, $pass, $servername, $username, $password, $database);

                // Verificar si hay resultados
                if ($resultado == 1) {
                    header("Location: menu.php");
                    }
                else {
                    echo "No se encontraron resultados";
                    sleep(30);
                    mysqli_close($conn);
                    header("Location: index.php");
                }    
        ?>
    </body>
</html>