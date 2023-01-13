<?php
session_start();
$_SESSION["carrito"] = array();
echo json_encode("ok");