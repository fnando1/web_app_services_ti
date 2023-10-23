<?php

    include_once("helpers/url.php");
    include_once("templates/header.php");


?>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça login</h1>
            <h1>Começe a dar suporte agora!</h1>
        </div>
        <form action="processa.php" method="POST">
            <div class="rith-login">
                <div class="card-login">
                    <h1>login</h1>

                    <div class="elementos">
                        <div class="textfild">
                            <label for="usuario">Usuário</label>
                        </div>  
                        <div class="textfild"> 
                            <input type="text" name="usuario" placeholder="Usuário"></input>
                        </div>
    
                        <div class="textfild">
                            <label for="email">E-mail</label>
                        </div>  
                        <div class="textfild">
                            <input type="email" name="email" placeholder="E-mail"></input>
                        </div>
    
                        <div class="textfild">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="textfild">
                            <input type="password" name="senha" placeholder="Senha"></input>
                        </div>
                        
                        <div class="btn-login">
                            <button>Entrar</button>
                        </div>
                    </div>

                    <hr>

                    <div class="link-cadastro">
                        <p>
                        <label>Não tem uma conta? </label>
                        <a href="cadastro_cliente.php">Criar conta</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php

include_once("templates/footer.php");

?>