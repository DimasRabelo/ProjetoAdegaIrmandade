<?php

$id = $_GET["id"];
//echo $id;
require_once('class/vendas.php');
$venda = new VendasClass($id);

//echo $venda->idVenda;





if (isset($_POST['statusVenda'])) {


   
    $statusVenda = $_POST['statusVenda'];
    $valorTotalVenda = $_POST['valorTotalVenda'];
    $idFuncionario = $_POST['idFuncionario'];
    $idProduto = $_POST['idProduto'];

    $venda->statusVenda = $statusVenda;
    $venda->valorTotalVenda = $valorTotalVenda;
    $venda->idFuncionario = $idFuncionario;
    $venda->idProduto = $idProduto;

    $venda->Atualizar();
}

?>

<h1 class="h1Atual">Atualizar Venda</h1>
<form class="formVendas" action="index.php?p=vendas&v=atualizar&id=<?php echo $venda->idVenda ?>" method="POST" enctype="multipart/form-data">

    <div>
        <select class="seleVendas" aria-label="Default select example" name="statusVenda">
            <option selected disabled>Selecione o Status da Venda</option>
            <option value="ATIVO">ATIVO</option>
            <option value="DESATIVADO">DESATIVADO</option>
            <option value="INATIVO">INATIVO</option>
        </select>
    </div>

    <div>
        <label for="valorTotalVenda"> Valor Total</label>
        <input type="text" name="valorTotalVenda" id="valorTotalVenda" placeholder="digite o valor" value="<?php echo $venda->valorTotalVenda; ?>">
    </div>

    <div>
        <label for="idFuncionario"> Nome do Funcionário</label>
        <input type="text" name="idFuncionario" id="idFuncionario" placeholder="nome do Funcionario" value="<?php echo $venda->idFuncionario; ?>">

    </div>

    <div>
        <label for="idProduto"> Nome do Produto</label>
        <input type="text" name="idProduto" id="idProduto" placeholder="nome do produto" value="<?php echo $venda->idProduto; ?>">
    </div>

    <div>
        <button type="submit">Atualizar Venda</button>
    </div>

</form>