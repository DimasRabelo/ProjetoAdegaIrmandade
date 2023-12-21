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

        public function Cadastrar()
{
    $query = "INSERT INTO tblfuncionarios (
        nomeFuncionario, 
        cargoFuncionario, 
        dataNascFuncionario, 
        emailFuncionario, 
        senhaFuncionario, 
        nivelFuncionario, 
        dataAdmissaoFuncionario, 
        enderecoFuncionario, 
        telFuncionario, 
        cepFuncionario, 
        statusFuncionario, 
        fotoFuncionario
    ) VALUES (
        '{$this->nomeFuncionario}',
        '{$this->cargoFuncionario}',
        '{$this->dataNascFuncionario}',
        '{$this->emailFuncionario}',
        '{$this->senhaFuncionario}',
        '{$this->nivelFuncionario}',
        '{$this->dataAdmissaoFuncionario}',
        '{$this->enderecoFuncionario}',
        '{$this->telFuncionario}',
        '{$this->cepFuncionario}',
        '{$this->statusFuncionario}',
        '{$this->fotoFuncionario}'
    )";

    $conn = Conexao::LigarConexao();
    $conn->exec($query);

    echo "<script>document.location='index.php?p=funcionarios'</script>";
}


 }