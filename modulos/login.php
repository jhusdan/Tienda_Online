<?php


if(isset($_SESSION['id_cliente'])){
    redir("./");
}
if(isset($enviar)){

   $username=clear($username);
   $passwords=clear($passwords);
  
    
    
    $q=$mysqli->query("SELECT * FROM clientes WHERE username='$username' AND passwords ='$passwords'");
    if(mysqli_num_rows($q)>0){
        $r=mysqli_fetch_array($q);
        $_SESSION['id_cliente']=$r['id'];
        if(isset($return)){
            redir("?p=".$return);
        }else{
        redir("?p=productos"); //para inicir sesion poner  redir("./)
        }
    }else{
        alert("Los datos son incorectos");
        redir("?p=login");
    }

}
    ?>    
    <center>
        <form method="post" action="">
            <div class="loginAdmin">
                <div class="form-group"><br><br><br>
                <label ><h4><i clas="fa fa-key"></i>Iniciar Ssion</h4></label><br><br>
                <input class="form-control" type="text" name="username"placeholder="Ingresa su usuario"><br>
                </div>

                <div class="form-group">
                <input class="form-control" type="password" name="passwords"placeholder="Ingresa su password"><br>
                </div>

                <div class="form-group">
                    <button class="btn btn-submit" type="submit" name="enviar"><i class="fa fasing-in"></i>Ingresar</button><br><br><br>
                </div>
            </div>
        </form>
    </center>
    <?php
?>