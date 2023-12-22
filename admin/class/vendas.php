<?php

require_once('conexao.php');

class VendasClass
{
    
    public $statusVenda;
    public $valorTotalVenda;

    public $idFuncionario;
    public $idProduto;


    public function ListarVenda()
    {
        $sql =  "SELECT * FROM tblvendas ORDER BY idVenda ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Cadastrar()
    {
        $query = "INSERT INTO tblvendas (
             statusVenda,
            valorTotalVenda, 
            idFuncionario, 
            idProduto
          
           
        ) VALUES (
            '{$this->statusVenda}',
            '{$this->valorTotalVenda}',
            '{$this->idFuncionario}',
            '{$this->idProduto}'
           
        )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=vendas'</script>";
    }





}


