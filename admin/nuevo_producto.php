<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#00040f] text-white">
    
    <?php include("menu.php"); ?>

    <p class="text-lg text-center font-bold m-[3rem] text-[2rem] text-white">Registrar zapatilla</p>

    <div class="flex justify-center w-full">
        <form action="registrar_producto.php" method="post" enctype="multipart/form-data" class="flex flex-col text-white bg-gradient-to-b from-gray-900 to-gray-600 bg-gradient-to-r w-fit p-3 rounded-lg text-[1.5rem]">
            <label class="m-2 flex justify-end items-center"> Modelo: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="modelo" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Talla: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="number" name="talla" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Marca: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="marca" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Descripcion: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="descripcion" /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Sexo: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="text" name="sexo"  /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Precio: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="munber" name="precio"  /> 
            </label>
            <label class="m-2 flex justify-end items-center"> Foto: 
                <input class="text-[#000000] ml-[1rem] rounded-md px-2 py-1" type="file" name="foto"  /> 
            </label>

            <input class="py-2 px-3 bg-gradient-to-l from-indigo-500 to-indigo-800 font-bold m-auto w-fit h-fit text-[2rem] my-5 text-white hover:text-[#00040f] outline-none rounded-[10px] border-[2px] border-white hover:border-indigo-900" type="submit" value="Registrar Zapatilla" />
        </form>
    </div>

</body>
</html>