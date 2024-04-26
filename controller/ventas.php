<?php
require_once "../model/modelVentas.php";

$model = new ModelVentas();


//print_r($_POST);

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case "getInfo":
            echo $model->existe($_POST['code']);
            break;
        case 'venta':
            $model->newVenta($_POST['total']);
            $tiket = $model->getTicket();
            echo $tiket;
            $code = $_POST['codigo'];
            $import = $_POST['price'];
            for ($i = 0; $i < count($_POST['codigo']); $i++) {
                $model->addCompra($tiket, $code[$i], $import[$i]);
            }
            header('Location: ../views/ventas.php?vent=1&tk=' . $tiket);
            break;
    }
}
