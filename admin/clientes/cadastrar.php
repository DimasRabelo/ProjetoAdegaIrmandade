<?php
if (isset($_POST['nomeUsuario'])) {

    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    $fotoUsuario = $_POST['nomeUsuario'];

    $arquivo = $_FILES['fotoUsuario'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }
    if (move_uploaded_file($arquivo['tmp_name'], '../src/imagens/usuarios/' . $arquivo['name'])) {
        $fotoFuncionario = 'usuarios/' . $arquivo['name'];
    }



    require_once('class/cliente.php');

    $usuario = new ClienteClass();

    $usuario->nomeUsuario = $nomeUsuario;
    $usuario->emailUsuario = $emailUsuario;
    $usuario->senhaUsuario = $senhaUsuario;
    $usuario->fotoUsuario = $fotoUsuario;

    $usuario->Cadastrar();
}


?>

<h1>Cadastrar Usuario</h1>
<form action="index.php?p=clientes&c=cadastrar" method="POST" enctype="multipart/form-data">

    <div class="fotoForm">
        <div>
            <img src="img/sem-foto.jpg" alt="..." id="imgfoto">
        </div>
        <input type="file" id="fotoUsuario" name="fotoUsuario" required style="display: none;">

    </div>

    <div>
        <label for="nomeUsuario"> Nome do Funcionario</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" required placeholder="Informe o Nome do Cliente">

    </div>

    <div>
        <label for="emailUsuario"> Email</label>
        <input type="email" name="emailUsuario" id="emailUsuario" required placeholder="name@example.com">
    </div>

    <div>
        <label for="senhaUsuario">Digite Sua Senha</label>
        <div>
            <input type="password" id="inputPassword" required placeholder="digite sua senha">

        </div>
    </div>


    <div>
        <button type="submit">Cadastrar Cliente</button>
    </div>


</form>

<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoUsuario').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoUsuario').addEventListener('change', function(a) {
        let imgfoto = document.getElementById('imgfoto');
        let arquivo = a.target.files[0]; // Get the selected file

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(a) {
                imgfoto.src = a.target.result;
                //console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }
    });
</script>