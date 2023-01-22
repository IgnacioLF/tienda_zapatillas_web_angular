<?php

require_once "../librerias_php/setup_red_bean.php";

$zapatilla2 = R::load('zapatillas', $_POST["id"]);
$zapatilla2->modelo = $_POST["modelo"];
$zapatilla2->talla = $_POST["talla"];
$zapatilla2->precio = $_POST["precio"];
$zapatilla2->marca = $_POST["marca"];
$zapatilla2->sexo = $_POST["sexo"];
$zapatilla2->descripcion = $_POST["descripcion"];
R::store($zapatilla2);


header("Location: gestionar_productos.php");
exit;