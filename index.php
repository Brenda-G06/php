<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho php Polimorfismo</title>
</head>
<body>
<?php
require_once 'Bicicleta.php';
require_once 'Carro.php';
require_once 'Veiculo.php';

$bi = new Bicicleta;
$ca = new Carro;
$bi->setPedal(2);
$ca->setMotor("v8");
echo $bi->velocidade();
//msm nome de método mas de diferentes formas, com diferentes valores 
echo $ca->velocidade();

?>
</body>
</html>





