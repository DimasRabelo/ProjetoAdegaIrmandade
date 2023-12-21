<?php

require_once('conexao.php');

class VendasClass
{
    public $idVenda;
    public $dataVenda;
    public $horaVenda;
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






}


