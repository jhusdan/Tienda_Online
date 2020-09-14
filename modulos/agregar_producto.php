<?php
chick_admin();

if(isset($enviar)){
    $name=clear($name);
    $price=clear($price);

    $imagen= "";

    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
        $imagen= $name.rand(0,1000).".png";
        move_uploaded_file($_FILES['imagen']['tmp_name'],"productos/".$imagen);

    }
    $mysqli->query("INSERT INTO productos (names,price,imagen)VALUES ('$name','$price','$imagen')");
    alert("Producto agregado");
    redir("?p=agregar_producto");
}

?>

<form method="post"action="" enctype="multipart/form-data">
    <div class="form-group">
    <input class="form-control" type="text" name="name" placeholder="Nombre del Producto">
    </div>

    <div class="form-group">
    <input class="form-control" type="text" name="price" placeholder="Precio del Producto">
    </div>

        <label >Imagen del producto</label>
    <div class="form-group">
    <input class="form-control" type="file" name="imagen" title="Imagen del Producto" placeholder="Imagen del producto">
    </div>


    <div class="form-group">
    <button class="btn btn_succes" type="submit" name="enviar"><i class="fa fa-check"></i>Agregar Producto</button>
    </div>

</form>