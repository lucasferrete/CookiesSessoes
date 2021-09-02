<?php
session_start();
    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        if(isset($_COOKIE["dados"])){
            if($_COOKIE["dados"][2] == htmlspecialchars($_POST['usuario'])){
                if($_COOKIE["dados"][3] == htmlspecialchars($_POST['senha'])){
                    $_SESSION['usuario'] = $_COOKIE["dados"][2];
                    $_SESSION['nome'] = $_COOKIE["dados"][0];
                    $_SESSION['email'] = $_COOKIE["dados"][1];  
                    header("location: index.php");
                }
                else{
                    echo "Usuário ou senha incorretos";
                }
            }
            else{
                echo "Usuário ou senha incorretos";
            }
        }
        else{
            echo "Usuário e senha inválidos. Se não possui uma conta, por favor cadastre-se";
        }
    }
?>