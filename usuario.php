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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="./src/css/estilos.css" />
	<link rel="stylesheet" href="./src/css/responsivo.css">

</head>
<style>

 

</style>

<body class="usuariopg">
		<!-- MENU -->

	<?php require_once("src/Conteudo/Menus/menuusuario.php") ?>

   


    <form class=" formuusuario">
    <div><h1><img src="src/imagens/adega1.png" alt=""></h1></div>

    <p>Faça o login caso tenha cadastro</p>
   <a href="#">Clique aqui para se Cadastrar</a>

  <div class="forminputslabel"   class="mb-3">
    <label  for="email" class="form-label">Digite seu Email</label>
    <input class="inputuser"   type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required placeholder=" digite seu email"> 
    <div class="forminputs"  id="emailHelp" class="form-text"><p class="textuser">Nunca compartilharemos seu e-mail com mais ninguém.</p></div>
  </div>
  <div class="forminputslabel"    class="mb-3">
    <label  for="exampleInputPassword1" class="form-label">Senha</label>
    <input class="inputuser"  type="password" class="form-control" id="exampleInputPassword1" placeholder=" digite sua senha">
    <p class="textuser">Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emoji.</p>
  </div>
  <a href="#">Esqueceu a Senha</a>
  <div class="inputuser"  class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required >
    <label   class="form-check-label" for="exampleCheck1">Verifique - me</label>
  </div>
  <button type="submit" class="btn btn-primary">acessar
  </button>
</form>
   

	
	
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="/src/js/slick.min.js"></script>
    <script src="/src/js/lity.min.js"></script>
    <script src="/src/js/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="/src/js/animacoes.js"></script>
	

  </body>

</html>