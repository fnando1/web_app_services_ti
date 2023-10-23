<?php

    include_once("templates/header.php");
    
?>

    <body>
        
        <div class="borda">
        
            <div class="container-cadastro-cliente">
                <h1>Cadastro - Formulário de Cliente</h1>
                    <form action="processa.php" method="POST">
                        <div>
                            <input type="text" placeholder="Digite seu nome" class="inputs" name="nome">
                            <span class="span-required">Nome der ter no minimo 5 caracteres.</span>
                        </div>

                        <div>
                            <input type="text" placeholder="E-mail" class="inputs" name="email">
                            <span class="span-required">Digite um e-mail válido.</span>
                        </div>

                        <div>
                            <input type="text" placeholder="telefone" class="inputs" name="telefone">
                            <span class="span-required"></span>
                        </div>

                        <div>
                            <input type="password" placeholder="Senha" class="inputs" name="senha">
                            <span class="span-required">Digite uma senha com no mínimo 8 caracteres.</span>
                        </div>

                        <div>
                            <input type="password" placeholder="Repita sua Senha" class="inputs">
                            <span class="span-required">Senhas deve ser compatíveis.</span>
                        </div>

                        <button type="submit">Enviar</button>
                        
                    </form>
            </div>
        </div>
    



<?php

include_once("templates/footer.php");

?>
