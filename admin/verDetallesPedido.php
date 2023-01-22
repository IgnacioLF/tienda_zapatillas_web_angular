<?php

require("../librerias_php/setup_red_bean.php");
$idPedido = $_GET["idPedido"];
$pedido = R::load('pedidos', $idPedido);

$sql= "select z.id as id_producto, z.modelo, z.talla, z.precio, z.marca, z.sexo, pp.cantidad from zapatillas as z, productopedido as pp where pp.id_pedido = $idPedido and z.id = pp.id_producto";

$productosPedido = R::getAssoc($sql);
require("editarPedido_html.php");