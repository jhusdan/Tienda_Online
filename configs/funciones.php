<?php
$mysqli=mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);



    function clear($var){
    htmlspecialchars($var);
    return $var;
}


function chick_admin(){
    if(!isset($_SESSION['id'])){
        redir("./");
    }
}

function redir($var){
    ?>
    <script>
    window.location=="<?=$var?>";
    </script>
    <?php
    die();
}

function alert($var){
    ?>
    <script trype="text/javascript">
    alert("<?=$var?>") ;
    </script>
    <?php

}
?>