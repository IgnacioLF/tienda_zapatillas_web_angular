<?php

require_once "../librerias_php/setup_red_bean.php";

$zapatilla = R::dispense("zapatillas");
$zapatilla->modelo = $_POST["modelo"];
$zapatilla->talla = $_POST["talla"];
$zapatilla->precio = $_POST["precio"];
$zapatilla->marca = $_POST["marca"];
$zapatilla->sexo = $_POST["sexo"];
$zapatilla->descripcion = $_POST["descripcion"];
$id_generada = R::store($zapatilla);

move_uploaded_file($_FILES["foto"]["tmp_name"],"../server/imagenes/$id_generada.png");

include("registro_ok.php");