<?php
require("../librerias_php/setup_red_bean.php");
$idZapatilla = $_GET["idZapatilla"];
$zapatilla = R::load('zapatillas', $idZapatilla);
require("editarProducto_html.php");
