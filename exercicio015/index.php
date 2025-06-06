<?php
if (isset($_POST['sortear'])) {
    $numero = rand();
    echo "Número sorteado: $numero";
}
?>
<form method="post">
    <button name="sortear">Sortear número</button>
</form>