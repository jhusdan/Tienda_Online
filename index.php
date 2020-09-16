
<?php
include "configs/config.php";
include "configs/funciones.php";
if(!isset($p)){
    $p="principal";
}else{
    $p=$p;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0" >
    <title>tienda Online</title>
    <link rel="stylesheet" href="css/stylos.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <script type="text/javacript" src="bootstrap/js/bootstrao.js"></script>
    <script type="text/javacript" src="fontawesome/js/all.js"></script>

    <script type="text/javacript" src="js/jquery.js"></script>
    <script type="text/javacript" src="js/app.js"></script>

    <title>tienda online</title>
</head>
<body >
<div class="header">
Tienda Online
</div> 

<div class="menu">
<a href="?p=principal">Prencipal</a>
<a href="?p=productos">Productos</a>
<a href="?p=ofertas">Ofertas</a>
<a href="?p=carrito">Carrito</a>

<a  href="?p=admin">Administrador</a>
<a  href="?p=login">Usuario</a>

<?php
if(isset($_SESSION['id_cliente'])){
?>
<a class="pull-right subir " href="?p=salir">Salir</a>
<a class="pull-right subir" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>
<?php
}
?>
</div> 




<div class="cuerpo">  
    <?php
    if(file_exists("modulos/".$p.".php")){
        include "modulos/".$p.".php";
    }else{
        echo "<i>No se ha ecncontrado el modulo <b>".$p. "</b><a href='./ '> Regresar</a></i>";
    }
    ?>

</div>

<div class="footer">
   Tienda Online <br><br>
   for Acosta Huaman jhusdan
</div>

</body>

</html>