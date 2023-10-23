<?php

    include_once("templates/header.php");
    
?>



    <section class="hero">
        <h1>Contrate ou Ofereça um Serviço</h1>
        <p>Nossa plataforma é focada na experiência do usuário, oferecendo um técnico mais proximo de você.</p>
    </section>

         <h2>Serviços Disponíveis</h2>

    <section class="services">
        
        <div class="service">
            <img src="img/manutencao.png" alt="Serviço 1">
            <h3>Linpeza Preventiva</h3>
            <p>Faço limpeza do pc e formatação com backup.</p><br>
            <a href="<?= $BASE_URL ?>contratar_servico.php" class="btn">Contratar</a>
        </div>

        <div class="service">
            <img src="img/redes.png" alt="Serviço 2">
            <h3>Suporte na Rede</h3>
            <p>Emplementação de firewall, dados em nuvem criptografado e suporte a equipamentos de rede.</p><br>
            <a href="#" class="btn">Contratar</a>
        </div>

        <div class="service">
            <img src="img/remoto.png" alt="Serviço 3">
            <h3>Acesso Remoto</h3>
            <p>Suporte Remoto via TeamViewer, intalações de programas e remoçoes de malware.  </p>
            <a href="#" class="btn">Contratar</a>
        </div>
    </section>


<?php

    include_once("templates/footer.php");

?>

</body>
</html>