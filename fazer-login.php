<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 1234){
 header("locattion:liberado.php");
}else{
    header("locattion:bloqueado.php");
}

?>