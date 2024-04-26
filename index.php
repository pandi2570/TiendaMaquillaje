<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeslieMakeUp</title>
    <link rel="icon" href="src/icons/logo.jpg">
    <link rel="stylesheet" href="src/libs/bootstrap_5/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="src/css/general.css">
    <link rel="stylesheet" href="src/css/login.css">
</head>

<body>

    <div class="contenedor">
        <form class="form" action="controller/login.php" method="post">
            <h1 class="cursiva text-center">
                Login
            </h1>
            <input type="text" placeholder="Usuario:" class="form-control mt-5 mb-5" name="user" required>
            <input type="password" placeholder="Contraseña:" class="form-control mt-5 mb-5" name="pass" required>
            <br>
            <center>
                <button type="submit" class="btn btn-primary cursiva mb-4">
                    Ingresar
                </button>
            </center>
        </form>
    </div>


    <script src="src/libs/jquery.js"></script>
    <script src="src/libs/sweetalert.js"></script>
    <script src="src/libs/bootstrap_5/js/bootstrap.min.js"></script>
    <script src="src/libs/fontawesome/js/all.min.js"></script>
    <script>
        $(function() {
            response = "<?php if (isset($_GET['resp'])) {
                            echo $_GET['resp'];
                        } else echo 0; ?>"

            switch (response) {
                case "2":
                    alert("Usuario/contraseña erroneos");
                    break;
                case "-1":
                    alert("Error de Conexión, intentalo de nuevo mas tade!");
                    break;
            }
        });
    </script>

</body>

</html>