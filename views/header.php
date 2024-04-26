<?php
session_start();
if (!isset($_SESSION['ID'])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NamePerson</title>
    <link rel="icon" href="../src/icons/logo.jpg">
    <link rel="stylesheet" href="../src/libs/bootstrap_5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../src/css/general.css">
    <link rel="stylesheet" href="../src/css/menu.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="menu.php">
                    <img src="../src/icons/logo.png" height="40px" alt="">
                    <?php echo $_SESSION['nameUs']; ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ventas.php">Ventas</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <a href="../controller/exit.php" class="btn btn-danger btn-block">
                            Cerrar Sesión
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <div class="container mt-2">
        <div class="row">
            <a href="productos.php" class="col-6 col-md-3 mx-auto menu-item bg-primary">
                <center>
                    <i class="fas fa-box"></i>
                    <h1>Productos</h1>
                    <p>Control de Altas</p>
                </center>
            </a>

            <a href="ventas.php" class="col-6 col-md-3 mx-auto menu-item bg-success">
                <center>
                    <i class="fas fa-shopping-bag"></i>
                    <h1>Ventas</h1>
                    <p>Nueva Venta</p>
                </center>
            </a>

            <a href="graficas.php" class="col-6 col-md-3 mx-auto menu-item bg-warning">
                <center>
                    <i class="fas fa-box"></i>
                    <h1>Metricas</h1>
                    <p>Control de Ventas</p>
                </center>
            </a>
        </div>
    </div>