<?php
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];
    echo "Número digitado: $numero<br>";
    echo "Antecessor: " . ($numero - 1) . "<br>";
    echo "Sucessor: " . ($numero + 1);
}
?>
<form>
    Digite um número: <input type="number" name="numero">
    <button type="submit">Calcular</button>
</form>