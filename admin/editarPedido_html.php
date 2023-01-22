<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar pedido</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#00040f] text-white">
     <?php include("menu.php"); ?>
<p class="text-lg text-center font-bold m-[3rem] text-[2rem] text-white">Editar pedido</p>
        <p class="text-lg text-center font-bold text-[1.5rem] text-white">Productos</p>
        <table class="m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-500 to-indigo-800">
		<thead class="text-left border-b-2 border-indigo-300">
			<tr>
                <th class="px-4 py-3">Modelo</th>
				<th class="px-4 py-3">Talla</th>
                <th class="px-4 py-3">Marca</th>
                <th class="px-4 py-3">Sexo</th>
                <th class="px-4 py-3">Cantidad</th>
				<th class="px-4 py-3">Precio</th>
			</tr>
		</thead>
 		<tbody>
			<?php
                foreach($productosPedido as $pa){
                    include("pedidos_productos_elemento_html.php");
                }
                ?>
		</tbody> 
	</table>
        <p class="text-lg text-center font-bold text-[1.5rem] m-[1rem] text-white">Detalles</p>
     <div class="flex justify-center w-full">
        <form action="editarPedido2.php" method="post" enctype="multipart/form-data" class="flex flex-col text-white bg-gradient-to-b from-gray-900 to-gray-600 bg-gradient-to-r w-fit p-3 rounded-lg text-[1.5rem]">
            <label class="m-2 flex justify-end items-center"> Nombre: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="nombre" value="<?= $pedido["nombre"] ?>" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Apellidos: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="apellidos" value="<?= $pedido["apellidos"] ?>" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Direccion: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="direccion" value="<?= $pedido["direccion"] ?>" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Tarjeta: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="tarjeta" value="<?= $pedido["tarjeta"] ?>" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Codigo postal: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="cp" value="<?= $pedido["cp"] ?>" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Envio: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="envio" value="<?= $pedido["envio"] ?>"  /> 
            </label>
            <input name="id" value="<?= $pedido["id"] ?>" type="hidden"  />
            <input class="py-2 px-3 bg-gradient-to-l from-indigo-500 to-indigo-800 font-bold m-auto w-fit h-fit text-[2rem] my-5 text-white hover:text-[#00040f] outline-none rounded-[10px] border-[2px] border-white hover:border-indigo-900" type="submit" value="Actualizar pedido" />
    </form>
    </div>

</body>
</html>