<?php
check_user("productos");

if(isset($agregar) && isset($cant)){
    $idp=clear($agregar);
    $cant=clear($cant);
    $id_cliente=clear($_SESSION['id_cliente']);

    $q=$mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant)
    VALUES ($id_cliente,$idp,$cant)");
    alert("Se ha agregado al carrito de compras");
    redir("?p=productos");
}


$q= $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
while($r=mysqli_fetch_array($q)){
    ?>
        <div class="producto">
           <div class="neme_producto"> <?=$r['names']?></div>
            <div> <img class="img_producto" src="productos/<?=$r['imagen']?>"></div>
            <br><span class="precio"><?=$r['price']?><?=$soles?></span>
            <button class=" btn btn-warning pull-right" onclick="agregar_carro('<?=$r['id']?>')"><i class="fa fa-shopping-cart" ></i></button>
        </div>
    <?php
}

?>
<script type="text/javascript">
function agregar_carro(idp){
    var cant=prompt("¿Cuantas catidades desea comparar?",1);
    window.location="?p=productos&agregar="+idp+"&cant="+cant;
}

</script>
