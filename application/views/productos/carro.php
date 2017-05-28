<article class="contenido">
<a href="<?php echo base_url()?>catalogo/carrito">Ver Carrito</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Talle</th>
            <th>Color</th>
            <th>Cantidad</th>
            </tr>
        <form action="<?php echo base_url()?>catalogo/agregar" method="post">
        <tr>
                <td>000_1</td>
                <input type="hidden" name="id" value="1">
                <td>Franelas</td>
                <input type="hidden" name="nombre" value="martin">
                <td>120$</td>
                <input type="hidden" name="precio" value="120">
                <td><select name="opcion[talle]">
                    <option value="" selected="">Seleccione</option>
                    <option value="s" selected="">S</option>
                    <option value="m" selected="">M</option>
                    <option value="l" selected="">L</option>
                </select></td>
                <td><select name="opcion[color]">
                    <option value="" selected="">Seleccione</option>
                    <option value="rojo" selected="">rojo</option>
                    <option value="azul" selected="">azul<color>
                    <option value="amarillo" selected="">amarillo</option>
                </select></td>
                <td>
                    <input type="text" name="cantidad" maxlength="10">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar" maxlength="10">
                </td>
            </tr>
        </form>
        </table>
</article>