<?php 
 require_once('conexao.php');

 class FuncionarioClass
 {
        public $idFuncionario;
        public $nomeFuncionario;
        public $cargoFuncionario;
        public $dataNascFuncionario;

        public $emailFuncionario;

        public $senhaFuncionario;

        public $nivelFuncionario;

        public $dataAdmissaoFuncionario;

        public $enderecoFuncionario;

        public $telFuncionario;

        public $cepFuncionario;

        public $statusFuncionario;

        public $fotoFuncionario;


        public function listarFuncionario()
        {
            $sql =  "SELECT * FROM tblfuncionarios ORDER BY idFuncionario ASC";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }





















 }