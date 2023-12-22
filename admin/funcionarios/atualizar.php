<?php

$id = $_GET["id"];
echo $id;

require_once("class/funcionario.php");
$funcionario = new FuncionarioClass($id);

echo $funcionario->nomeFuncionario;


if (isset($_POST['nomeFuncionario'])) {

    $nomeFuncionario = $_POST['nomeFuncionario'];
    $cargoFuncionario = $_POST['cargoFuncionario'];
    $dataNascFuncionario = $_POST['dataNascFuncionario'];
    $emailFuncionario = $_POST['emailFuncionario'];
    $senhaFuncionario = $_POST['senhaFuncionario'];
    $nivelFuncionario = $_POST['nivelFuncionario'];
    $dataAdmissaoFuncionario = $_POST['dataAdmissaoFuncionario'];
    $enderecoFuncionario = $_POST['enderecoFuncionario'];
    $telFuncionario = $_POST['telFuncionario'];
    $cepFuncionario = $_POST['cepFuncionario'];
    $statusFuncionario = $_POST['statusFuncionario'];
    $fotoFuncionario = $_POST['fotoFuncionario'];

    //foto


    if (!empty($_FILES['fotoFuncionario']['name'])) {


        // Foto
        $arquivo   = $_FILES['fotoFuncionario'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if (move_uploaded_file($arquivo['tmp_name'], '../src/imagens/funcionario/' . $arquivo['name'])) {
            $fotoFuncionario = 'funcionario/' . $arquivo['name'];
        } else {
            throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
        }
    } else {
        $fotoFuncionario = $funcionario->fotoFuncionario;
    }

    // fim da empty



    

    $funcionario->nomeFuncionario = $nomeFuncionario;
    $funcionario->cargoFuncionario = $cargoFuncionario;
    $funcionario->dataNascFuncionario = $dataNascFuncionario;
    $funcionario->emailFuncionario = $emailFuncionario;
    $funcionario->senhaFuncionario = $senhaFuncionario;
    $funcionario->nivelFuncionario = $nivelFuncionario;
    $funcionario->dataAdmissaoFuncionario = $dataAdmissaoFuncionario;
    $funcionario->enderecoFuncionario = $enderecoFuncionario;
    $funcionario->telFuncionario = $telFuncionario;
    $funcionario->cepFuncionario = $cepFuncionario;
    $funcionario->statusFuncionario = $statusFuncionario;
    $funcionario->fotoFuncionario = $fotoFuncionario;

    $funcionario->Atualizar();
}





?>



<h1>Atualizar Funcionário</h1>
<form action="index.php?p=funcionarios&f=atualizar&id=<?php echo $funcionario->idFuncionario ?> " method="POST" enctype="multipart/form-data">


    <div class="fotoForm">
        <div>
            <img src="img/sem-foto.jpg" alt="..." id="imgfoto">
        </div>
        <input type="file" id="fotoFuncionario" name="fotoFuncionario" style="display: none;">

    </div>




    <div>
        <label for="nomeFuncionario"> Nome do Funcionario</label>
        <input type="text" name="nomeFuncionario" id="nomeFuncionario" placeholder="Informe o Nome do Funcionario" value="<?php echo $funcionario->nomeFuncionario; ?>">

    </div>

    <div>
        <label for="cargoFuncionario">Cargo</label>
        <input type="text" name="cargoFuncionario" id="cargoFuncionario" placeholder="Informe o Cargo" value="<?php echo $funcionario->cargoFuncionario; ?>">
    </div>

    <div>
        <label for="dataNascFuncionario">Data de Nascimento</label>
        <input class="Dateatual" type="date" name="dataNascFuncionario" id="dataNascFuncionario" value="<?php echo $funcionario->dataNascFuncionario; ?>">
    </div>

    <div>
        <label for="emailFuncionario"> Email</label>
        <input type="email" name="emailFuncionario" id="emailFuncionario" placeholder="name@example.com" value="<?php echo $funcionario->emailFuncionario;  ?>">
    </div>


    <div>
        <label for="inputPassword">Digite Sua Senha</label>
        <input type="password" id="inputPassword" placeholder="digite sua senha" value="<?php echo $funcionario->senhaFuncionario; ?>">

    </div>
    <div>
        <label for="nivelFuncionario">Nivel de Acesso</label>
        <input type="text" name="nivelFuncionario" id="nivelFuncionario" placeholder="Informe o Nivel de Acesso" value="<?php echo $funcionario->nivelFuncionario; ?>">
    </div>

    <div>
        <label for="dataAdmissaoFuncionario">Data de Admissão</label>
        <input class="Dateatual" type="date" name="dataAdmissaoFuncionario" id="dataAdmissaoFuncionario" value="<?php echo $funcionario->dataAdmissaoFuncionario; ?>">
    </div>

    <div>
        <label for="enderecoFuncionario"> Endereço</label>
        <input type="text" name="enderecoFuncionario" id="enderecoFuncionario" placeholder="Informe o Endereço" value="<?php echo $funcionario->enderecoFuncionario; ?>">
    </div>

    <div>
        <label for="telFuncionario">Telefone:</label>
        <input type="tel" class="form-control" name="telFuncionario" id="telFuncionario" placeholder="(11)99999-9999" value="<?php echo $funcionario->telFuncionario; ?>">
    </div>


    <div>
        <label for="cepFuncionario"> Cep</label>
        <input type="text" id="cepFuncionario" name="cepFuncionario" maxlength="9" placeholder="00000-000" value="<?php echo $funcionario->cepFuncionario; ?>">

    </div>


    <div>
        <select class="seleAtual" aria-label="Default select example" name="statusFuncionario">
            <option selected="">Seleciona o Status do Funcionario</option>
            <option value="ATIVO">ATIVO</option>
            <option value="DESATIVADO">DESATIVADO</option>
            <option value="INATIVO">INATIVO</option>
        </select>
    </div>



    <div>
        <button type="submit">Atualizar Funcionário</button>
    </div>

</form>

<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoFuncionario').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoFuncionario').addEventListener('change', function(a) {
        let imgfoto = document.getElementById('imgfoto');
        let arquivo = a.target.files[0]; // Get the selected file

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imgfoto.src = e.target.result;
                console.log(imgFoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }
    });
</script>