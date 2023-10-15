<?php
session_start();



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login - Services TI</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login</h1>
            <h1>Começe a dar suporte agora!</h1>
        </div>

       

        <form action="processa.php" method="POST">
            <div class="rith-login">
                <div class="card-login">
                    <h1>login</h1>
                    <div class="textfild">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário"></input>
                    </div>
                    <div class="textfild">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" placeholder="E-mail"></input>
                    </div>
                    <div class="textfild">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha"></input>
                    </div>
                    <div class="link-cadastro">
                        <a href="cadastro_cliente.php">Criar conta.</a>
                    </div>
                    <div class="confirm_cadastro">
                    <?php
                    if(isset($_SESSION['msg']))
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    ?>
                    </div>
                    <button class="btn-login">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>