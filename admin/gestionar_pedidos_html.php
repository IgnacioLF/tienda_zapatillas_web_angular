<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("menu.php"); ?>
    <div>
    pedidos realizados en la tienda    
    </div>
    <?php
        foreach($pedidos as $pedido){
           ?>
           <div style="margin:10px">
            nombre destinatario: <?= $pedido["nombre"] ?> <br>
            direccion de envio: <?= $pedido["direccion"] ?> <br>
            </div>
           <?php 
        }
    ?>
</body>
</html>