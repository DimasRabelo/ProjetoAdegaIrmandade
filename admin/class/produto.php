
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

    public function __construct($id = false)
    {
        if($id){
            $this->idProduto = $id;
            $this->Carregar();
        }


// carregar
    }

    public function Carregar()
    {
        $query = "SELECT * FROM tblprodutos WHERE idProduto = " . $this->idProduto;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
        $this->nomeProduto = $linha['nomeProduto'];
        $this->descricaoProduto = $linha['descricaoProduto'];
        $this->categoriaProduto = $linha['categoriaProduto'];
        $this->statusProduto = $linha['statusProduto'];
        $this->precoCompraProduto = $linha['precoCompraProduto'];
        $this->precoVendaProduto = $linha['precoVendaProduto'];
        $this->fornecedorProduto = $linha['fornecedorProduto'];  

        }


    }

    public function Atualizar()
    {
        $query = "UPDATE tblprodutos 
        SET  nomeProduto = '" . $this->nomeProduto . "',
            descricaoProduto = '" . $this->descricaoProduto . "',
            categoriaProduto = '" . $this->categoriaProduto . "',
            statusProduto = '" . $this->statusProduto . "',
            precoCompraProduto = '" . $this->precoCompraProduto . "',
            precoVendaProduto = '" . $this->precoVendaProduto . "',
            fornecedorProduto = '" . $this->fornecedorProduto . "'
            WHERE tblprodutos.idProduto = '" . $this->idProduto . "'";

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=produtos'</script>";
    }
}
