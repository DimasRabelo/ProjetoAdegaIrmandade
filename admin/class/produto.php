
<?php 

require_once('conexao.php');

class ProdutoClass
{

    public $idProduto;
    public $nomeProduto;
    public $descricaoProduto;
    public $categoriaProduto;

    public $statusProduto;
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
    public function Cadastrar()
    {
        $query = "INSERT INTO tblprodutos (
            nomeProduto, 
            descricaoProduto, 
            categoriaProduto, 
            statusProduto, 
            precoCompraProduto, 
            precoVendaProduto, 
            fornecedorProduto
           
        ) VALUES (
            '{$this->nomeProduto}',
            '{$this->descricaoProduto}',
            '{$this->categoriaProduto}',
            '{$this->statusProduto}',
            '{$this->precoCompraProduto}',
            '{$this->precoVendaProduto}',
            '{$this->fornecedorProduto}'
        )";
    
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    
        echo "<script>document.location='index.php?p=produtos'</script>";
    }
    
    
     }

























