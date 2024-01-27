
<?php


require_once('conexao.php');

class GaleriaClass
{

    public $nomeGaleria;
    public $idGaleria;
  
    public $fotoGaleria;

    public $statusGaleria;
    

public function listarGaleria()
    {
        //$sql = "SELECT * FROM tblgaleria WHERE statusGaleria = 'ATIVO' ORDER by idgaleria  ASC ";//
        $sql =  "SELECT * FROM tblgaleria ORDER BY idgaleria ASC" ;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }



    public function Cadastrar()
    {
        $query = "INSERT INTO tblgaleria (
            nomeGaleria,
            statusGaleria,
            fotoGaleria
        ) VALUES (
            '{$this->nomeGaleria}',
            '{$this->statusGaleria}',
            '{$this->fotoGaleria}'
        )";
    
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    
        echo "<script>document.location='index.php?p=galeria'</script>";
    }
public function __construct($id = false)
    {
        if ($id) {
            $this->idGaleria = $id;
            $this->Carregar();
        }
    }

    public function Carregar()
{
    $query = "SELECT * FROM tblgaleria WHERE idGaleria = " . $this->idGaleria;
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach ($lista as $linha) {
        $this->fotoGaleria = $linha['nomeGaleria'];
        $this->fotoGaleria = $linha['fotoGaleria'];
        $this->statusGaleria = $linha['statusGaleria'];
    }
}
public function Atualizar()
{
    $query = "UPDATE tblgaleria 
     SET 
        nomeGaleria =  '". $this->nomeGaleria ."',
        statusGaleria = '". $this->statusGaleria ."',
        fotoGaleria = '". $this->fotoGaleria ."'
     WHERE tblgaleria.idgaleria = '" . $this->idGaleria . "'";

    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=galeria'</script>";
}

public function desativar()
    {
        $query = "UPDATE tblgaleria SET statusGaleria ='DESATIVADO' WHERE idGaleria = " . $this->idGaleria;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
    

}





