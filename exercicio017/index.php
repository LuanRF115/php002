<?php
if (isset($_POST['reais'])) {
    $reais = floatval($_POST['reais']);
    $dolar = 5.20; // cotação exemplo
    $convertido = $reais / $dolar;
    echo "R$ $reais equivalem a \$" . number_format($convertido, 2);
}
?>

<form method="post">
    Valor em Reais: <input type="number" step="0.01" name="reais">
    <input type="submit" value="Converter para Dólar">
</form>