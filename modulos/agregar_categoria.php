<?php

chick_admin();

if(isset($enviar)){
    $categoria=clear($categoria);

    $s=$mysqli->query("SELECT * FROM categorias WHERE categoria='$categoria'");

    if(mysqli_fetch_array($s)>0){
        alert("Esta categoria esta agregado a BD");
        redir("?p=agregar_categoria");
    }else{
        $mysqli->query("INSERT INTO categorias(categoria)VALUES('$categoria')");
        alert("Categoria Agregada");
        redir("?p=agregar_categoria");
    }

}
    if(isset($eliminar)){
        $eliminar=clear($eliminar);
        $mysqli->query("DELETE FROM categorias WHERE id='$eliminar'");
        alert("Categoria eliminada");
        redir("?p=agregar_categoria");
    }

?>

  <h1>Agregar categoria</h1>

<form method="post" action="">
    <div class="form-group">
        <input class="form-control" type="text" name="categoria" placeholder="Categoria" required/>
    </div>

    <div class="form-group">
        <input class="btb btn-primary" type="submit" name="enviar" value="Agrgar categuria">
    </div>

</form><br><br>
    <table class="table table-striped">
        <tr>id </tr>
        <tr> Categoria </tr>
        <tr> Acciones </tr>

            <?php
                $q=$mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
                while($r=mysqli_fetch_array($q)){
                    ?>
                    <tr>
                        <td><?=$r['id']?></td>
                        <td><?=$r['categoria']?></td>

                        <td>
                            <a href="?p=agregar_categoria&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
    </table>