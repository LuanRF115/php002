<?php
if (isset($_POST['peso']) && isset($_POST['altura'])) {
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);
    $imc = $peso / ($altura * $altura);
    echo "IMC: " . number_format($imc, 2) . "<br>";

    if ($imc < 18.5) {
        echo "Situação: Abaixo do peso.";
    } elseif ($imc < 25) {
        echo "Situação: Peso normal.";
    } elseif ($imc < 30) {
        echo "Situação: Sobrepeso.";
    } else {
        echo "Situação: Obesidade.";
    }
}
?>

<form method="post">
    Peso (kg): <input type="number" step="0.1" name="peso"><br>
    Altura (m): <input type="number" step="0.01" name="altura"><br>
    <input type="submit" value="Calcular IMC">
</form>