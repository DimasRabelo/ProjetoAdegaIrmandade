<?php

require_once ('conexao.php');

class ClienteClass
{

    public $idUsuario;
    public $nomeUsuario;
    public $emailUsuario;

    public $senhaUsuario;

   public function ListarCliente()
   {
    $sql =  "SELECT * FROM tblusuarios ORDER BY idUsuario ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($sql);
    $lista = $resultado->fetchAll();
    return $lista;



   }







}