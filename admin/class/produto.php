
<?php 

require_once('conexao.php');

class ProdutoClass
{

    public $idProduto;
    public $nomeProduto;
    public $descricaoProduto;
    public $categoriaProduto;
    public $precoCompraProduto;
    public $precoVendaProduto;
    public $fornecedorProduto;
    public $dataReceProduto;


    public function listarProduto()
    {
        $sql =  "SELECT * FROM tblprodutos ORDER BY idProduto ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;





    }






}



















