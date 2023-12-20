<?php

$pagina = @$_GET['p'];



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../src/css/reset.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/estilo.css">


</head>

<body>



    <main>
        <section class="topoEsquerda">
            <h1>
                <img src="img/logoadega.png" alt=" imagem da logo">
            </h1>
            <?php
            if ($pagina == '') {
                $texto = 'DASHBOARD';
            } else {
                $texto = '' . $pagina;
            }

            // Exibindo cada letra em uma linha
            echo '<h2 class="vertical-text">';
            for ($i = 0; $i < strlen($texto); $i++) {
                echo '<span>' . $texto[$i] . '</span>';
            }
            echo '</h2>';
            ?>

            <div class="divlogin">
                <img class="btnlogin" src="img/btnuser.png" alt="imagem btn Usuario">
                <h2 class="name">Nome:</h2>
            </div>


        </section>



        <div class="box">
            <!-- Conteúdo das Páginas -->
            <?php
            switch ($pagina) {

                case 'dashboard':

                    break;

                case 'funcionarios';

                    require_once('funcionarios/funcionarios.php');

                    break;

                case 'produtos';

                    require_once('produtos/produto.php');

                    break;
                case 'estoque';

                    require_once('estoque/estoque.php');

                    break;

                case 'vendas';

                    require_once('vendas/vendas.php');

                    break;

                case 'clientes';

                    require_once('clientes/cliente.php');

                    break;

                case 'contato';

                    require_once('contato/contato.php');

                    break;


                case 'relatorios';

                    break;

                case 'ajuda e suporte';
            }
            ?>

        </div>

        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php?p=dashboard" class="<?= ($pagina == 'dashboard' || $pagina == '') ? 'menuAtivo' : ''; ?>">DashBoard</a></li>
                    <li><a href="index.php?p=funcionarios" class="<?= ($pagina == 'funcionarios') ? 'menuAtivo' : ''; ?>">Funcionários</a></li>
                    <li><a href="index.php?p=produtos" class="<?= ($pagina == 'produtos') ? 'menuAtivo' : ''; ?>">Produtos</a></li>
                    <li><a href="index.php?p=estoque" class="<?= ($pagina == 'estoque') ? 'menuAtivo' : ''; ?>">Estoque</a></li>
                    <li><a href="index.php?p=vendas" class="<?= ($pagina == 'vendas') ? 'menuAtivo' : ''; ?>">Vendas</a></li>
                    <li><a href="index.php?p=clientes" class="<?= ($pagina == 'clientes') ? 'menuAtivo' : ''; ?>">Clientes</a></li>
                    <li><a href="index.php?p=contato" class="<?= ($pagina == 'contato') ? 'menuAtivo' : ''; ?>">E-mails</a></li>
                    <li><a href="index.php?p=relatorios" class="<?= ($pagina == 'relatorios') ? 'menuAtivo' : ''; ?>">Relatórios</a></li>
                    <li><a href="index.php?p=ajuda e suporte" class="<?= ($pagina == 'ajuda e suporte') ? 'menuAtivo' : ''; ?>">Ajuda e Suporte</a></li>
                </ul>
            </nav>
        </div>



    </main>




    <footer class="rodape">
        <h2>Direitos Reservados Sandini Informática</h2>
        <h2 class="h2d">Desenvolvido Por Dimas Aparecido Rabelo de Souza</h2>
    </footer>



    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="./js/scrips.js"></script>
</body>