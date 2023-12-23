<?php

$id = $_GET["id"];
echo $id;
require_once('class/estoque.php');
$estoque = new EstoqueClass($id);

echo $estoque->nomeEstoque;

if (isset($_POST['nomeEstoque'])) {

    $nomeEstoque = $_POST['nomeEstoque'];
    $quantidadeEstoque = $_POST['quantidadeEstoque'];
    $statusEstoque = $_POST['statusEstoque'];
    $idProduto = $_POST['idProduto'];

    $estoque->nomeEstoque = $nomeEstoque;
    $estoque->quantidadeEstoque = $quantidadeEstoque;
    $estoque->statusEstoque = $statusEstoque;
    $estoque->idProduto = $idProduto;

    $estoque->Atualizar();

}



?>


<h1>Atualizar Estoque</h1>
<form class="formEstoque" action="index.php?p=estoque&e=atualizar&id=<?php echo $estoque->idEstoque ?>" method="POST" enctype="multipart/form-data">

    <div>
        <label for="nomeEstoque"> Nome do Estoque</label>
        <input type="text" name="nomeEstoque" id="nomeEstoque" required placeholder="nome estoque" value="<?php echo $estoque->nomeEstoque; ?>" >
    </div>

    <div>

    <div>
        <label for="idProduto"> Nome do Produto</label>
        <input type="text" name="idProduto" id="idProduto"  placeholder="nome do produto" value="<?php echo $estoque->idProduto; ?>" >
    </div>
    </div>

    <div>
        <label for="quantidadeEstoque"> Quantidade</label>
        <input type="text" name="quantidadeEstoque" id="quantidadeEstoque" placeholder="quantidade" value="<?php echo $estoque->quantidadeEstoque; ?>"   >
    </div>

    <div>
        <select class="seleEstoque" aria-label="Default select example" name="statusEstoque">
            <option value="" selected disabled>Seleciona o Status do Estoque</option>
            <option value="ATIVO">ATIVO</option>
            <option value="DESATIVADO">DESATIVADO</option>
            <option value="INATIVO">INATIVO</option>
        </select>
    </div>

    <div>
        <button type="submit">Atualizar Estoque</button>
    </div>

</form>