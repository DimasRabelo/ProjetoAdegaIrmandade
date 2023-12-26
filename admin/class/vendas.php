<?php

require_once('conexao.php');

class VendasClass
{
    public $idVenda;
    public $statusVenda;
    public $valorTotalVenda;

    public $horaVenda;

    public $dataVenda;

    public $idFuncionario;
    public $idProduto;


    public function ListarVenda()
    {
        $sql =  "SELECT * FROM tblvendas ORDER BY idVenda ASC";
        $sql = "SELECT
                    v.idVenda,
                    v.statusVenda,
                    v.valorTotalVenda,
                    v.horaVenda,
                    v.dataVenda,
                    f.nomeFuncionario,
                    p.nomeProduto
                    
                FROM
                    tblvendas v
                INNER JOIN
                    tblfuncionarios f ON v.idFuncionario = f.idFuncionario
                INNER JOIN
                    tblprodutos p ON v.idProduto = p.idProduto";



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
    public function __construct($id = false)
    {
        if ($id) {
            $this->idVenda = $id;
            $this->Carregar();
        }
    }
    // carregar
    public function Carregar()
    {
        $query = "SELECT * FROM tblvendas WHERE idVenda = " . $this->idVenda;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
           
            $this->statusVenda = $linha['statusVenda'];
            $this->valorTotalVenda = $linha['valorTotalVenda'];
            $this->idFuncionario = $linha['idFuncionario'];
            $this->idProduto = $linha['idProduto'];
        }
    }

    public function Atualizar()
    {
        $query = "UPDATE tblvendas 
  SET  statusVenda = '" . $this->statusVenda . "',
      valorTotalVenda = '" . $this->valorTotalVenda . "',
      idFuncionario = '" . $this->idFuncionario . "',
      idProduto = '" . $this->idProduto . "'
      WHERE tblvendas.idVenda = '" . $this->idVenda . "'";
      

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=vendas'</script>";
    
        
    }
}