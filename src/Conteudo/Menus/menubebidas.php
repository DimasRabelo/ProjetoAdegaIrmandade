<header>
    <div class="site">
        <div class="Menuabrirmobile">
            <button class="abrir-menu"></button>
            <h2>MENU</h2>
        </div>
        <nav class="menu  wow animate__animated animate__fadeInUp">

            <button class="fechar-menu"></button>
            <ul>
                <li>
                    <a href="index.php"><img class="btnresponsivobebida" class="btnpadding" src="src/imagens/botaoadega.png" alt="tela de inicio"></a></a>
                </li>
                <li>
                    <a href="bebidas.php"><img class="btnbebida" src="src/imagens/botaocerveja.png" alt="tela de produtos bebidas"></a>
                </li>
                <li>
                    <a href="tabacaria.php"><img class="btnresponsivobebida" class="btnpadding" src="src/imagens/botaonarguile.png" alt=" tela de produtos tabacaria"></a>
                </li>
                <li>
                    <a href="galeria.php"><img class="btnresponsivobebida" class="btnpadding" src="src/imagens/botao galeria.png" alt=" tela Galeria de fotos e videos"></a>
                </li>
                <li>
                    <a href="contato.php"><img class="btnresponsivobebida" class="btnpadding" src="src/imagens/botaocontato.png" alt=" tela de Contatos"></a>
                </li>
                <li>
                    <a href="usuariologin.php"><img class="btnresponsivobebida" class="btnpadding" src="src/imagens/botaouser.png" alt="tela de usuario"></a>
                    
                </li>
                <h2><?php echo $usuario->nomeUsuario; ?></h2>




            </ul>

        </nav>
    </div>
</header>