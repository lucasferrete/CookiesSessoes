<?php

    $nome = '';
    $email = '';
    $usuario = '';
    $senha = '';


    isset($_POST['nome'])?$nome = $_POST['nome']:'';

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['usuario'])){
        $usuario = $_POST['usuario'];
    }
    if(isset($_POST['senha'])){
        $senha = $_POST['senha'];
    }


    if(isset($_COOKIE['dados'])){
        header("location: login.html");
    }
    else{
        setcookie('dados[0]', $nome, time()+3600);
        setcookie('dados[1]', $email, time()+3600);
        setcookie('dados[2]', $usuario, time()+3600);
        setcookie('dados[3]', $senha, time()+3600);
        header("location: login.html");
    }

?>