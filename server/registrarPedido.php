<?php
session_start();
require("../librerias_php/setup_red_bean.php");
$jsonInfo = json_decode(file_get_contents("php://input"));

$pedido = R::dispense("pedidos");

$pedido -> nombre = $jsonInfo->nombre;
$pedido -> direccion = htmlentities($jsonInfo->direccion);

if( preg_match("/^[0-9]{0,30}$/",$jsonInfo->tarjeta)){
    $pedido->tarjeta = $jsonInfo->tarjeta;
} else {
    $pedido->tarjeta = "tarjeta no valida";
}

$pedido -> tarjeta = $jsonInfo->tarjeta;
$pedido -> apellidos = $jsonInfo->apellidos;
$pedido -> cp = $jsonInfo->cp;
$pedido -> envio = $jsonInfo->envio;
$pedido -> provincia = $jsonInfo->provincia;

$ip = "";
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}else if(!empty($_SERVER["REMOTE_ADDR"])){
    $ip = $_SERVER["REMOTE_ADDR"];
}
$pedido->ip = $ip;
$pedido->useragent = $_SERVER["HTTP_USER_AGENT"];

$id_generado_pedido = R::store($pedido);

foreach($_SESSION["carrito"] as $pc){
    $producto_pedido = R::dispense("productopedido");
    $producto_pedido->id_pedido = $id_generado_pedido;
    $producto_pedido->id_producto = $pc[0];
    $producto_pedido->cantidad = $pc[1];
    R::store($producto_pedido);
}

$_SESSION["carrito"] = array();

echo json_encode("ok");