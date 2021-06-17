<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
<?php
require_once "../includes/class_user.php";
$user_sistema =new Deporte();
$resultado=$user_sistema->guardar_deporte
($_POST['deporte_user'],
$_POST['hora_user'],
$_POST['inhoraria_user'],
$_POST['profe_user'],
$_POST['cantestud_user']);
echo $resultado;
?>

</body>
</html>