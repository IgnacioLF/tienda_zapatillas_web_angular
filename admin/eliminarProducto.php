<?php
require("../librerias_php/setup_red_bean.php");
$idEliminar = $_GET["idEliminar"];
$zapatilla = R::load('zapatillas', $idEliminar);
R::trash($zapatilla);
header("Location: gestionar_productos.php");
exit;