<?php

require_once('conexao.php');

class BannerClass
{

    public $idBanner;
    public $nomeBanner;
    public $altBanner;

    public $fotoBanner;

    public $statusBanner;

    public function ListarBanner()
    {
        $sql = "SELECT * FROM tblbanner WHERE statusBanner = 'ATIVO' ORDER BY idBanner ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function Cadastrar()
    {
        $query = "INSERT INTO tblbanner (
            nomeBanner, 
            altBanner, 
            fotoBanner, 
            statusBanner 
           
        ) VALUES (
            '{$this-> nomeBanner}',
            '{$this-> altBanner}',
            '{$this->fotoBanner}',
            '{$this-> statusBanner }',
           
           
        )";
    
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    
        echo "<script>document.location='index.php?p=banner'</script>";
    }




    public function __construct($id = false)
    {
        if ($id) {
            $this->idBanner = $id;
            $this->Carregar();
        }
    }
    public function Carregar()
    {
        $query = "SELECT * FROM tblbanner WHERE idBanner = " . $this->idBanner;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeBanner = $linha['nomeBanner'];
            $this->altBanner = $linha['altBanner'];
            $this->fotoBanner = $linha['fotoBanner'];
            $this->statusBanner = $linha['statusBanner'];
        }
    }




    public function desativar()
    {
        $query = "UPDATE tblbanner SET statusBanner ='DESATIVADO' WHERE idBanner = " . $this->idBanner;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }

    public function ativar()
    {
        $query = "UPDATE tblbanner SET statusBanner ='ATIVO' WHERE idBanner = " . $this->idBanner;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
