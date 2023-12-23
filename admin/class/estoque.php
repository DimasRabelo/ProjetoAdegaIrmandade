<?php

require_once('conexao.php');

class EstoqueClass
{

    public $idEstoque;
    public $nomeEstoque;

    public $quantidadeEstoque;

    public $statusEstoque;

    public $idProduto;

    public function ListarEstoque()
    {
        $sql =  "SELECT * FROM tblestoque ORDER BY idEstoque ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    public function Cadastrar()
    {
        $query = "INSERT INTO tblestoque (
             nomeEstoque,
            quantidadeEstoque, 
            statusEstoque, 
            idProduto
          
           
        ) VALUES (
            '{$this->nomeEstoque}',
            '{$this->quantidadeEstoque}',
            '{$this->statusEstoque}',
            '{$this->idProduto}'
           
        )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=estoque'</script>";
    }
    public function __construct($id = false)
    {
        if ($id) {
            $this->idEstoque = $id;
            $this->Carregar();
        }
    }
    // carregar
    public function Carregar()
    {
        $query = "SELECT * FROM tblestoque WHERE idEstoque = " . $this->idEstoque;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeEstoque = $linha['nomeEstoque'];
            $this->quantidadeEstoque = $linha['quantidadeEstoque'];
            $this->statusEstoque = $linha['statusEstoque'];
            $this->idProduto = $linha['idProduto'];
        }
    }

    public function Atualizar()
    {
        $query = "UPDATE tblestoque 
     SET  nomeEstoque = '" . $this->nomeEstoque . "',
         quantidadeEstoque = '" . $this->quantidadeEstoque . "',
         statusEstoque = '" . $this->statusEstoque . "',
         idProduto = '" . $this->idProduto . "'
         WHERE tblestoque.idEstoque = '" . $this->idEstoque . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=estoque'</script>";
    }
}
