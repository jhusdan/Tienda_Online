<?php
$q= $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
while($r=mysqli_fetch_array($q)){
    ?>
        <div class="producto">
           <div class="neme_producto"> <?=$r['names']?></div>
            <div> <img class="img_producto" src="productos/<?=$r['imagen']?>"></div>
            <span class="precio"><?=$r['price']?><?=$soles?></span>
            <button class="boton_agregar"><i class="fa fa-shopping-cart"></i></button>
        </div>
    <?php
}

?>