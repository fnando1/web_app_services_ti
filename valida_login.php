<?php

function valida($path){


    if(!$_SESSION['id']){
        header('Location: login.php'.$path);
        exit;
    } 
}


?>