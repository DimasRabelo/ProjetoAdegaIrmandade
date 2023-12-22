<?php

require_once ('conexao.php');

class ClienteClass
{

    public $idUsuario;
    public $nomeUsuario;
    public $emailUsuario;

    public $senhaUsuario;

    public $fotoUsuario;

   public function ListarCliente()
   {
    $sql =  "SELECT * FROM tblusuarios ORDER BY idUsuario ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;

  }

  public function Cadastrar()
{
    $query = "INSERT INTO tblusuarios (
        nomeUsuario, 
        emailUsuario, 
        senhaUsuario, 
        fotoUsuario 
       
    ) VALUES (
        '{$this->nomeUsuario}',
        '{$this->emailUsuario}',
        '{$this->senhaUsuario}',
        '{$this->fotoUsuario}'
       
    )";

    $conn = Conexao::LigarConexao();
    $conn->exec($query);

    echo "<script>document.location='index.php?p=clientes'</script>";
}





}