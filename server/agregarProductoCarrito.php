<?php
session_start();
$jsonInfo = json_decode(file_get_contents("php://input"));

if( ! isset($_SESSION["carrito"]) ){
    $_SESSION["carrito"] = array();
}

$_producto_en_carrito = false;

for($i = 0; $i<count($_SESSION["carrito"]); $i++){
    if($_SESSION["carrito"][$i][0] == $jsonInfo->id){
        $_producto_en_carrito =true;
        $_SESSION["carrito"][$i][1] += $jsonInfo->cantidad;
    }
}
if (! $_producto_en_carrito ) {
    array_push($_SESSION["carrito"],array($jsonInfo->id, $jsonInfo->cantidad));
}

echo json_encode("ok");