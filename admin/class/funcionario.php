<?php
require_once('conexao.php');

class FuncionarioClass
{
    public $idFuncionario;
    public $nomeFuncionario;
    public $cargoFuncionario;
    public $dataNascFuncionario;

    public $emailFuncionario;

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

    public function listarAtivos()
    {
        $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO' ORDER BY idFuncionario ASC";
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
        nivelFuncionario, 
        dataAdmissaoFuncionario, 
        enderecoFuncionario, 
        telFuncionario, 
        cepFuncionario, 
        statusFuncionario, 
        fotoFuncionario
    ) VALUES (
        '" . $this->nomeFuncionario . "',
        '" . $this->cargoFuncionario . "',
        '" . $this->dataNascFuncionario . "',
        '" . $this->emailFuncionario . "',
        '" . $this->nivelFuncionario . "',
        '" . $this->dataAdmissaoFuncionario . "',
        '" . $this->enderecoFuncionario . "',
        '" . $this->telFuncionario . "',
        '" . $this->cepFuncionario . "',
        '" . $this->statusFuncionario . "',
        '" . $this->fotoFuncionario . "'
    )";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }

    public function __construct($id = false)
    {

        if ($id) {
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }

    // Carregar 
    public function Carregar()
    {
        $query = "SELECT * FROM  tblfuncionarios WHERE idFuncionario = " . $this->idFuncionario;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeFuncionario = $linha['nomeFuncionario'];
            $this->cargoFuncionario = $linha['cargoFuncionario'];
            $this->dataNascFuncionario = $linha['dataNascFuncionario'];
            $this->emailFuncionario = $linha['emailFuncionario'];
            $this->nivelFuncionario = $linha['nivelFuncionario'];
            $this->dataAdmissaoFuncionario = $linha['dataAdmissaoFuncionario'];
            $this->enderecoFuncionario = $linha['enderecoFuncionario'];
            $this->telFuncionario = $linha['telFuncionario'];
            $this->cepFuncionario = $linha['cepFuncionario'];
            $this->statusFuncionario = $linha['statusFuncionario'];
            $this->fotoFuncionario = $linha['fotoFuncionario'];
        }
    }






    public function Atualizar()
    {

        $query = "UPDATE tblfuncionarios  
          SET nomeFuncionario =  '" . $this->nomeFuncionario . "', 
              cargoFuncionario =  '" . $this->cargoFuncionario . "',
              dataNascFuncionario = '" . $this->dataNascFuncionario . "', 
              emailFuncionario = '" . $this->emailFuncionario . "',
              nivelFuncionario = '" . $this->nivelFuncionario . "',
              dataAdmissaoFuncionario = '" . $this->dataAdmissaoFuncionario . "',
              enderecoFuncionario = '" . $this->enderecoFuncionario . "',
              telFuncionario = '" . $this->telFuncionario . "',
              cepFuncionario = '" . $this->cepFuncionario . "',
              statusFuncionario = '" . $this->statusFuncionario . "',
              fotoFuncionario = '" . $this->fotoFuncionario . "'
              WHERE tblfuncionarios.idFuncionario = '" . $this->idFuncionario . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=funcionarios'</script>";
    }

    public function desativar()
    {
        $query = "UPDATE tblfuncionarios SET statusFuncionario ='DESATIVADO' WHERE idFuncionario = " . $this->idFuncionario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }

    
        // ...
    
        public function listarFuncionariosDesativados()
        {
            $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'DESATIVADO' ORDER BY idFuncionario ASC";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($sql);
            $listaDesativados = $resultado->fetchAll();
            return $listaDesativados;
        }
    
        // ...
    }

