<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#00040f] text-white">
    <?php include("menu.php"); ?>

<!--     <div>
        Listado de productos de la tienda
    </div>
 -->

    <p class="text-lg text-center font-bold m-[3rem] text-[2rem] text-white">Gestionar productos</p>

    <table class="m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-500 to-indigo-800">
		<thead class="text-left border-b-2 border-indigo-300">
			<tr>
				<th class="px-4 py-3">Foto</th>
				<th class="px-4 py-3">Modelo</th>
				<th class="px-4 py-3">Talla</th>
				<th class="px-4 py-3">Precio</th>
				<th class="px-4 py-3">Marca</th>
				<th class="px-4 py-3">Sexo</th>
				<th class="px-4 py-3">Descripcion</th>
				<th class="px-4 py-3">Eliminar</th>
				<th class="px-4 py-3">Editar</th>
			</tr>
		</thead>

		<tbody>
		    <?php
                foreach($zapatillas as $zapatilla){
                    include("gestionar_productos_elemento_html.php");
                }
            ?>
		</tbody>
	</table>
</body>
</html>