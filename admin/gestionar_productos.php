<?php

require("../librerias_php/setup_red_bean.php");

$zapatillas = R::getAll("select * from zapatillas");
require("gestionar_productos_html.php");
