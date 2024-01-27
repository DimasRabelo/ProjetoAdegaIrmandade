
<?php


require_once('conexao.php');

class GaleriaClass
{


    public $idGaleria;
    public $nomeGaleria;

    public $fotoGaleria;

    public $statusGaleria;
    

public function listarGaleria()
    {
        // $sql =  "SELECT * FROM tblgaleria ORDER BY idgaleria ASC" //;
        $sql = "SELECT * FROM tblgaleria WHERE statusGaleria = 'ATIVO' ORDER by idgaleria  ASC ";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }



public function Cadastrar()
{
    $query = "INSERT INTO tblgaleria (
        nomeGaleria, 
        fotoGaleria, 
        statusGaleria 
       
    ) VALUES (
        '{$this->nomeGaleria}',
        '{$this->fotoGaleria}'
        
    )";

    $conn = Conexao::LigarConexao();
    $conn->exec($query);

    echo "<script>document.location='index.php?p=dashboard'</script>";
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
            $this->nomeGaleria = $linha['nomeGaleria'];
            $this->fotoGaleria = $linha['fotoGaleria'];
            $this->statusGaleria = $linha['statusGaleria'];
           
        }
        }
        public function Atualizar()
    {
        $query = "UPDATE tblgaleria 
     SET  nomeGaleria = '" . $this->nomeGaleria . "',
         statusGaleria = '" . $this->statusGaleria . "',
        fotoGaleria = '". $this->fotoGaleria ."'
         WHERE tblgaleria.idgaleria = '" . $this->idGaleria . "'";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=galeria'</script>";

}





}