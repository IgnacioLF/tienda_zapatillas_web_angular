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

    introduce los datos del nuevo producto:<br>
    <form action="registrar_producto.php" method="post" enctype="multipart/form-data">
        Modelo: <input type="text" name="modelo" /> <br/>
        Talla: <input type="number" name="talla" /> <br/>
        Marca: <input type="text" name="marca" /> <br/>
        Sexo: <input type="text" name="sexo" /> <br/>
        Precio: <input type="munber" name="precio" /> <br/>
        Foto: <input type="file" name="foto" /> <br/>
        <input type="submit" value="Registrar Zapatilla"/>
    </form>

</body>
</html>