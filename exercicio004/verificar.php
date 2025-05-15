<?php
$idade = $_POST['idade'];

if($idade>18){
    echo "você tem mais de 18 anos";

}else if($idade < 18){
     echo "você tem menos de 18 anos"; 

}else{
    echo "você tem 18 anos";
}

?>