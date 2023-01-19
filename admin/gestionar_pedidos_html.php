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

        $idpedido = 0;
        $idpedido_anterior = 0;
        foreach($pedidos as $pedido){
            $idpedido = $pedido["id"];

           ?>
           <?php if($idpedido!=$idpedido_anterior){ ?>
                <div style="margin:10px">
                nombre destinatario: <?= $pedido["nombre"] ?> <br>
                direccion de envio: <?= $pedido["direccion"] ?> <br>
                </div>
                <div style="margin:10px">
                    productos del pedido:  
                </div>
                <?php } ?>
            <div style="margin:10px">
                modelo: <?= $pedido["modelo"] ?> <br>
                talla: <?= $pedido["talla"] ?> <br>
                precio: <?= $pedido["precio"] ?> <br>
            </div>

           <?php 
           $idpedido_anterior = $idpedido;
        }
    ?>
</body>
</html>