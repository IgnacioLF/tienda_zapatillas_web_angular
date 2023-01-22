<?php

require_once "../librerias_php/setup_red_bean.php";

$pedido2 = R::load('pedidos', $_POST["id"]);
$pedido2->nombre = $_POST["nombre"];
$pedido2->apellidos = $_POST["apellidos"];
$pedido2->direccion = $_POST["direccion"];
$pedido2->tarjeta = $_POST["tarjeta"];
$pedido2->cp = $_POST["cp"];
$pedido2->envio = $_POST["envio"];
R::store($pedido2);


header("Location: gestionar_pedidos.php");
exit;