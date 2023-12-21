<?php

require_once('conexao.php');

class EstoqueClass
{
    public $idEstoque;

    public $quantidadeEstoque;
    public $dataAtualEstoque;

    public $idProduto;

    public function ListarEstoque()
    {
        $sql =  "SELECT * FROM tblestoque ORDER BY idEstoque ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }






























}






