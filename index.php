<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Principal</title>

    <style>
        body{
            background-color: #dcceff;
            text-align: center;
            font-size: 20px;
        }

        .form-group{
            margin-top: 100px;
            margin-left: 400px;
            margin-right: 400px;
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            -webkit-box-shadow: 6px 12px 34px 8px rgba(0,0,0,0.39); 
            box-shadow: 6px 12px 34px 8px rgba(0,0,0,0.39);
        }
        body h1{
            text-align: center;
            margin-top: 50px;
            font-size: 55px;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <h1>Bem-Vindo!</h1>
        <div class="form-group">
            <h2>Seus dados:</h2>
            <?php

                session_start();

                echo "Nome: " . $_SESSION["nome"] . "<br>";
                echo "Usuário: " . $_SESSION["usuario"]. "<br>";
                echo "E-mail: " . $_SESSION["email"]. "<br>";

            ?>
        </div>
    </div>

</body>
</html>



