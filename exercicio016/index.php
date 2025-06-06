<?php
if (isset($_POST['dado'])) {
    $numero = rand(1, 6);
    echo "<h2>Você tirou: $numero</h2>";
    echo "<img src='dado$numero.png' width='100'>";
}
?>
<form method="post">
    <button name="dado">Rolar dado</button>
</form>