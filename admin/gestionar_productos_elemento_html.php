<!-- <div>
    modelo: <?= $zapatilla["modelo"] ?> <br>
    talla: <?= $zapatilla["talla"] ?> <br>
    precio: <?= $zapatilla["precio"] ?> <br>
    marca: <?= $zapatilla["marca"] ?> <br>
    sexo: <?= $zapatilla["sexo"] ?> <br>
    <img src="../server/imagenes/<?= $zapatilla["id"] ?>.png" height="80" /> <br>
    <a href="">borrar producto </a>
</div> -->


<tr class="border-b border-indigo-400">
    <td class="px-4 py-3">
        <img style="height: 60px" src="../server/imagenes/<?= $zapatilla["id"] ?>.png"/>
    </td>
    <td class="px-4 py-3"><?= $zapatilla["modelo"] ?></td>
    <td class="px-4 py-3"><?= $zapatilla["talla"] ?></td>
    <td class="px-4 py-3"><?= $zapatilla["precio"] ?></td>
    <td class="px-4 py-3"><?= $zapatilla["marca"] ?></td>
    <td class="px-4 py-3"><?= $zapatilla["sexo"] ?></td>
    <td class="px-4 py-3"><?= $zapatilla["descripcion"] ?></td>
    <td class="px-4 py-3"><a class="text-[#FF6666] hover:text-[#FF1A1A] font-bold border-[2px] border-[#FF6666] hover:border-[#FF1A1A] py-1 px-2 rounded-lg bg-[#DC143C] hover:bg-[#FF6666]" href="eliminarProducto.php?idEliminar=<?= $zapatilla["id"] ?>" >X</a></td>
    <td class="px-4 py-3"><a class="text-[#FFBF00] hover:text-[#FFEA00] font-bold border-[2px] border-[#FFBF00] hover:border-[#FFEA00] py-1 px-2 rounded-lg bg-[#FCF55F] hover:bg-[#FFBF00]" href="editarProducto.php?idZapatilla=<?= $zapatilla["id"] ?>">Editar</a></td>
</tr>