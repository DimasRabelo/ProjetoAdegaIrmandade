<?php

session_start();

// Verifica se o usuário está logado
if (isset($_SESSION['nomeUsuario']) && isset($_SESSION['fotoUsuario'])) {
	$nomeUsuario = $_SESSION['nomeUsuario'];
	$fotoUsuario = $_SESSION['fotoUsuario'];
}

?>


<header>


	<nav class="menu wow animate__animated animate__fadeInUp">
		<ul>
			<li class="menuliuser">
				<a href="index.php"><img class="btnpadding" src="src/imagens/botaoadega.png" alt=""></a>
			</li>
			<li class="menuliuser">
				<a href="bebidas.php"><img class="btnpadding" src="src/imagens/botaocerveja.png" alt=""></a>
			</li>
			<li class="menuliuser">
				<a href="tabacaria.php"><img class="btnpadding" src="src/imagens/botaonarguile.png" alt=""></a>
			</li>
			<li class="menuliuser">
				<a href="galeria.php"><img class="btnpadding" src="src/imagens/botao galeria.png" alt=""></a>
			</li>
			<li class="menuliuser">
				<a href="contato.php"><img class="btncontato" src="src/imagens/botaocontato.png" alt=""></a>
			</li>
			<li>
				<a href="usuariologin.php"><img class="btnusuario" src="src/imagens/botaouser.png" alt=""></a>
			</li>
		</ul>
	</nav>

</header>


