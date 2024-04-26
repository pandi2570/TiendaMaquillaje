<?php
require_once "../model/settings.php";
$model = new Settings();
$aux = $model->login($_POST['user'], $_POST['pass']);

if ($aux == 1)
    header("Location: ../views/menu.php");
else
    header("Location: ../views/index.php?resp=$aux");
