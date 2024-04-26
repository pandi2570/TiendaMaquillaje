<?php
require_once "../model/modelProduct.php";
$model = new ModelProd();
if (isset($_GET['ID'])) {
    $res = $model->addStock($_GET['ID'], $_GET['Stock']);
    echo $res;
    header('Location:../views/productos.php?stock=' . $res);
}
