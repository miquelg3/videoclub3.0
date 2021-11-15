<?php
// Recuperamos la información de la sesión
if(!isset($_SESSION)) {
    session_start();
}

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
   die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}

$clientes = [
    "Cliente1" => "Bruce Wayne",
    "Cliente2" => "Clark Kent"
];

$soportes = [
    "Soporte1" => "Los cazafantasmas",
    "Soporte2" => "The Last of Us Part II",
    "Soporte3" => "Origen",
    "Soporte4" => "El Imperio Contraataca"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <h1>Bienvenido <?= $_SESSION['usuario'] ?></h1>
    <p>Cliente 1: <?php echo $clientes["Cliente1"]?></p>
    <p>Cliente 2: <?php echo $clientes["Cliente2"]?></p>
    <p>Soporte 1: <?php echo $soportes["Soporte1"]?></p>
    <p>Soporte 2: <?php echo $soportes["Soporte2"]?></p>
    <p>Soporte 3: <?php echo $soportes["Soporte3"]?></p>
    <p>Soporte 4: <?php echo $soportes["Soporte4"]?></p>
    <p>Pulse <a href="logout.php">aquí</a> para salir</p>
</body>
</html>