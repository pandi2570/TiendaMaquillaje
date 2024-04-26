<?php
require_once "../model/modelVentas.php";
$model = new ModelVentas();

echo $model->getFrecuencias();

?>
