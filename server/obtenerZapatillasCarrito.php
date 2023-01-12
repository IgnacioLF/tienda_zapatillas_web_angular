<?php
session_start();
if(isset($_SESSION["carrito"])){
    require "../librerias_php/setup_red_bean.php";
    $ids = array();
    $cantidades =  array();
    foreach($_SESSION["carrito"] as $elemento) {
        array_push($ids, $elemento[0]);
        array_push($cantidades, $elemento[1]);
    }
    $ids_sql = implode(",",$ids);
    $sql = "select * from zapatillas where id in ($ids_sql)";
    $zapatillas = R::getAll($sql);
    $respuesta = array();
    for ($i = 0; $i<count($zapatillas); $i++){
        array_push( $respuesta, array( "zapatilla" => $zapatillas[$i], "cantidad" => $cantidades[$i]));
    }
    echo json_encode($respuesta);
}else{
    echo json_encode(array());
}