<?php
require_once "../model/modelProduct.php";
$model = new ModelProd();

//print_r($_POST);

if (isset($_POST['action'])) {
    if ($_POST['action'] ==  'new') {
        $res = $model->newProducto($_POST);
        echo $res;
        if ($res == 1) {
            $id = $model->getLastProd();
            $imagen = $_FILES['imagen']['name'];

            if (isset($imagen) && $imagen != "") {
                $tipo = $_FILES['imagen']['type'];
                $temp  = $_FILES['imagen']['tmp_name'];

                move_uploaded_file($temp, '../src/imgs/' . $id . '.jpeg');
            }

            header('Location: ../views/productos.php?res=' . $res);
        }
    }
}
