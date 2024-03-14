<?php
$id = $_GET["id"];
require_once("class/funcionario.php");
$funcionario = new FuncionarioClass($id);
?>

<style>
    .formVisualizacao {
        background: #000000;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza horizontalmente */
        justify-content: center; /* Centraliza verticalmente */
        padding: 20px;
        width: 80%; /* Defina um tamanho fixo para o box */
        margin: auto; /* Centraliza o box na página */
    }
    .fotoVisual {
        margin-bottom: 20px;
    }

    .fotoVisual img {
        max-width: 200px;
        max-height: 120px;
    }

    .formVisualizacao div {
        margin-bottom: 20px;
    }

    label {
        color: #ffffff;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: none; /* Removendo a borda */
        outline: none; /* Removendo a borda ao focar */
    }

    /* Adicionando estilo para posicionar os labels e inputs lado a lado */
    .formVisualizacao div {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .formVisualizacao div input {
        flex: 1;
    }

    .formVisualizacao div label {
        flex: 1;
        margin-right: 10px;
    }
    .Icones img{
        width: 300px;
    }
    h1{
        color:#ffffff;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza horizontalmente */
        justify-content: center; /* Centraliza verticalmente */
       
        width: 80%; /* Defina um tamanho fixo para o box */
        margin: auto; /* Centraliza o box na página */
    }
    
</style>

<h1>LISTA COM TODOS OS CAMPOS</h1>
<form class="formVisualizacao" action="index.php?p=funcionarios&f=listatodos&id=<?php echo $funcionario->idFuncionario; ?>" method="POST" enctype="multipart/form-data">

    <div class="fotoVisual">
        <?php if (!empty($funcionario->fotoFuncionario)) : ?>
            <img src="../admin/img/<?php echo $funcionario->fotoFuncionario; ?>" alt="Funcionário Photo" id="imgfoto">
        <?php else : ?>
            <img src="img/sem-foto.jpg" alt="Sem Foto" id="imgfoto">
        <?php endif; ?>
        <input type="file" id="fotoFuncionario" name="fotoFuncionario" style="display: none;">
    </div>
   
    <div>
        <label for="nomeFuncionario">Nome do Funcionario:</label>
        <input type="text" name="nomeFuncionario" id="nomeFuncionario" placeholder="Informe o Nome do Funcionario" value="<?php echo $funcionario->nomeFuncionario; ?>" style="border: none;" readonly >
    </div>

    <div>
        <label for="cargoFuncionario">Cargo:</label>
        <input type="text" name="cargoFuncionario" id="cargoFuncionario" placeholder="Informe o Cargo" value="<?php echo $funcionario->cargoFuncionario; ?>" style="border: none;" readonly>
    </div>

    <div>
        <label for="dataNascFuncionario">Data de Nascimento:</label>
        <input type="date" name="dataNascFuncionario" id="dataNascFuncionario" value="<?php echo $funcionario->dataNascFuncionario; ?>" style="border: none;" readonly >
    </div>

    <div>
        <label for="emailFuncionario"> Email:</label>
        <input type="email" name="emailFuncionario" id="emailFuncionario" placeholder="name@example.com" value="<?php echo $funcionario->emailFuncionario; ?>" style="border: none;" readonly>
    </div>

    <div>
        <label for="nivelFuncionario">Nivel de Acesso:</label>
        <input type="text" name="nivelFuncionario" id="nivelFuncionario" placeholder="Informe o Nivel de Acesso" value="<?php echo $funcionario->nivelFuncionario; ?>" style="border: none;" readonly>
    </div>

    <div>
        <label for="dataAdmissaoFuncionario">Data de Admissão:</label>
        <input  type="date" name="dataAdmissaoFuncionario" id="dataAdmissaoFuncionario" value="<?php echo $funcionario->dataAdmissaoFuncionario; ?>" style="border: none;"  readonly>
    </div>

    <div>
        <label for="enderecoFuncionario"> Endereço:</label>
        <input type="text" name="enderecoFuncionario" id="enderecoFuncionario" placeholder="Informe o Endereço" value="<?php echo $funcionario->enderecoFuncionario; ?>" style="border: none;" readonly>
    </div>

    <div>
        <label for="telFuncionario">Telefone:</label>
        <input type="tel" name="telFuncionario" id="telFuncionario" placeholder="(11)99999-9999" value="<?php echo $funcionario->telFuncionario; ?>" style="border: none;" readonly>
    </div>

    <div>
        <label for="cepFuncionario"> Cep:</label>
        <input type="text" id="cepFuncionario" name="cepFuncionario" maxlength="9" placeholder="00000-000" value="<?php echo $funcionario->cepFuncionario; ?>" style="border: none;"  readonly>
    </div>

    <div>
        <label for="statusFuncionario"> Status:</label>
        <input type="text" name="statusFuncionario" id="statusFuncionario" value="<?php echo $funcionario->statusFuncionario; ?>" style="border: none;" readonly>
    </div>


</form>
