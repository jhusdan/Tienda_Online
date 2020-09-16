<?php
chick_admin();
$id=clear($id);
$q=$mysqli->query("SELECT * FROM productos WHERE id='$id'");
$rq=mysqli_fetch_array($q);


if(isset($enviar)){
    $idpro=clear($idpro);
    $names=clear($names);
    $price=clear($price);
    $categoria=clear($categoria);

    $mysqli->query("UPDATE productos SET names='$names',price='$price',id_categoria='$categoria' WHERE id='$idpro'");
    alert("Se modefico el producto");
    redir("?p=agregar_producto");
}
?>

<form method="post"action="" enctype="multipart/form-data">
    <div class="form-group">
    <input class="form-control" type="text" name="names" value="<?=$rq['names']?>" placeholder="Nombre del Producto">
    </div>

    <div class="form-group">
    <input class="form-control" type="text" name="price" value="<?=$rq['price']?>"placeholder="Precio del Producto">
    </div>

        <label >Imagen del producto</label>
    <div class="form-group">
    <input class="form-control" type="file" name="imagen" title="Imagen del Producto" placeholder="Imagen del producto">
    </div>

        <div class="form-group">
            <select class="form-control" name="categoria" required>
            <option value="">Seleccione una categoria</option>
                <?php
                    $q=$mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
                    while($r=mysqli_fetch_array($q)){
                        ?>
                            <option <?php if($rq=['id_categoria']==$r['categoria']){echo "selected";} ?> value="<?=$r['id']?>"><?=$r['categoria']?></option>
                        <?php
                    }
                ?>
            </select>
        </div>

    <div class="form-group">
    <button class="btn btn_succes" type="submit" name="enviar"><i class="fa fa-check"></i>Agregar Producto</button>
    </div>


        <input type="hidden"name="idpro" value="<?=$id?>">
</form>