<?php

    if(isset($_POST['user']) && isset($_POST['password'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        if($user == 'pedro' & $password == 'pedro123'){
            header('Location: listagem.php');
        }
        else{
            header('Location: erro.php');
        }
    }
    else{
        header('Location: erro.php');
    }

?>