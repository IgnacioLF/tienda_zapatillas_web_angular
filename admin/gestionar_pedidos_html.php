<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Pedidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#00040f] text-white">
    <?php include("menu.php"); ?>
    <p class="text-lg text-center font-bold m-[3rem] text-[2rem] text-white">Gestionar pedidos</p>

<!--     <?php

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
    ?> -->

    <table class="m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-500 to-indigo-800">
		<thead class="text-left border-b-2 border-indigo-300">
			<tr>
				<th class="px-4 py-3">Nombre completo</th>
				<th class="px-4 py-3">Direccion</th>
				<th class="px-4 py-3">Ver mas</th>
			</tr>
		</thead>
 		<tbody>
			<?php

                $idpedido = 0;
                $idpedido_anterior = 0;
                foreach($pedidos as $pedido){
                    $idpedido = $pedido["id"];

                ?>
           <?php if($idpedido!=$idpedido_anterior){ ?>
				<tr class="border-b border-indigo-400">
					<td class="px-4 py-3"><?= $pedido["nombre"] ?></td>
					<td class="px-4 py-3"><?= $pedido["direccion"] ?></td>
					<td class="px-4 py-3"><a class="text-[#FFBF00] hover:text-[#FFEA00] font-bold border-[2px] border-[#FFBF00] hover:border-[#FFEA00] py-1 px-2 rounded-lg bg-[#FCF55F] hover:bg-[#FFBF00]" href="verDetallesPedido.php?idPedido=<?= $pedido["id"] ?>">Ver mas</a></td>
				</tr>
			<?php } ?>
            <?php 
           $idpedido_anterior = $idpedido;
        }
    ?>
		</tbody> 
	</table>
</body>
</html>