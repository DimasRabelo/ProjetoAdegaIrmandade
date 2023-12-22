<?php

require_once('conexao.php');

class EstoqueClass
{
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
}
