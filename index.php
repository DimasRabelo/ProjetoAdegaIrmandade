
<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['idUsuario'])) {
    header("location: http://localhost/ProjetoAdegaIrmandade/");
    exit;
}

// Define as variáveis $id e $tipoUsuario com base na sessão do usuário
if (isset($_SESSION['idUsuario'])) {
    $id = $_SESSION['idUsuario'];
    $tipoUsuario = 'cliente';
} 

// Carrega a classe do usuário
require_once('admin/class/cliente.php');


// Inicializa as variáveis de nome e foto
$nomeUsuario = '';
$fotoUsuario = '';

// Obtém o nome e a foto do usuário com base no tipo
if ($tipoUsuario === 'cliente') {
    $usuario = new ClienteClass($id);
    $nomeUsuario = $usuario->getNome();
    $fotoUsuario = $usuario->getFoto();
} 
?>





<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Secular+One&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="./src/css/reset.css" />

    <link rel="stylesheet" href="/src/css/slick.css">
    <link rel="stylesheet" href="/src/css/slick-theme.css">
    <link rel="stylesheet" href="/src/css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./src/css/estilos.css" />
	<link rel="stylesheet" href="./src/css/responsivo.css">



</head>

<body>

    
    <?php require_once("src/Conteudo/Menus/menuindex.php") ?>
		

	<!-- Corpo -->


	<main class="imgadega">
		<?php require_once("src/Conteudo/Corpo/corpoindex.php") ?>

       





	</main>

	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="/src/js/slick.min.js"></script>
    <script src="/src/js/lity.min.js"></script>
    <script src="/src/js/wow.min.js"></script>

    <script src="/src/js/animacoes.js"></script>




</body>

</html>