<?php
require_once "../model/modelProduct.php";
$model = new ModelProd();

if (isset($_GET['ID'])) {
    $res = $model->deleteProducto($_GET['ID']);
    header('Location: ../views/productos.php?del=' . $res);
}
