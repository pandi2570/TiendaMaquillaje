<?php
require_once "../model/modelVentas.php";
$model = new ModelVentas();
$car = $model->getVenta($_GET['tk']);
$res = -1;
$from = "ing.Angel_mendoza@outlook.com";
$to = "c16106699@tecnmtlahuac.onmicrosoft.com, leslie.martinezinfante@hotmail.com";
$subject = "Tiket de Compra";
$headers = "From:" . $from;
$message = "Hola este es tu tiket digital: \n";
$title = "Tiket de Compra";
if ($car->num_rows > 0) {
    while ($aux = $car->fetch_assoc()) {
        $message .= $aux['nombre_prenda'] . "\t";
        $message .= $aux['cant'] . "\t";
        $message .= "$" . $aux['importe'] . "\n";
    }
    $aux = mail($to, $subject, $message, $headers);
}

header("Location: ../views/ventas.php");
