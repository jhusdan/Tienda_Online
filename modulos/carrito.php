<h2><i class="fa fa-shopping-cart"></i>Carrito de Compras</h2>


<table class="table table-striped">
    <tr>
        <th>Nombre de producto</th>
        <th>Catntida</th>
        <th>Precio por unidad</th>
        <th>Precio total</th>
    </tr>
     <?php
            $id_cliente = clear($_SESSION['id_cliente']);

            $q=$mysqli->query("SELECT * FROM carro WHERE id_cliente='$id_cliente'");
            while($r=mysqli_fetch_array($q)){

            $q2 = $mysqli->query("SELECT * FROM productos WHERE id='".$r['id_producto']."'");
            $r2 = mysqli_fetch_array($q2);

            $nombre_prodcuto=$r2['names'];
            $cantidad=$r['cant'];
            $precio_unitario=$r2['price'];
            $precio_total=$cantidad * $precio_unitario;
            ?>
                <tr>
                    <td><?=$nombre_prodcuto?></td>
                    <td><?=$cantidad?></td>
                    <td><?=$precio_unitario?></td>
                    <td><?=$precio_total?></td>
                </tr>
            <?php
            }
        ?>
</table>