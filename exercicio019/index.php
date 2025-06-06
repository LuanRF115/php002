<?php
$carros = array(
    "LMS-2312" => array("marca" => "VW", "modelo" => "Golf"),
    "ABC-1234" => array("marca" => "Fiat", "modelo" => "Uno"),
    "XYZ-9876" => array("marca" => "Toyota", "modelo" => "Corolla")
);

foreach ($carros as $placa => $carro) {
    echo "Placa: $placa - Marca: " . $carro['marca'] . " - Modelo: " . $carro['modelo'] . "<br>";
}
?>