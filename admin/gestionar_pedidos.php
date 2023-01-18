<?php

require("../librerias_php/setup_red_bean.php");
$sql = "select p.id, z.modelo, z.talla, z.precio, p.nombre, p.direccion, p.tarjeta, pp.cantidad from zapatillas as z, pedidos as p, productopedido as pp where p.id = pp.id_pedido and z.id = pp.id_producto order by p.id desc";
$pedidos = R::getAll($sql);
require("gestionar_pedidos_html.php");
