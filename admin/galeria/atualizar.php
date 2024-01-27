<?php

$id = $_GET["id"];
//echo $id;
require_once("class/galeria.php");
$galeria = new GaleriaClass($id);

//echo $galeria->nomegaleria;

if (isset($_POST['nomeGaleria'])) {


    $nomegaleria = $_POST['nomeGaleria'];
    $statusgaleria = $_POST['statusGaleria'];




    if (!empty($_FILES['fotoGaleria']['name'])) {


        // Foto
        $arquivo    = $_FILES['fotoGaleria'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if (move_uploaded_file($arquivo['tmp_name'], '../src/imagens/galeria/' . $arquivo['name'])) {
            $fotoGaleria = 'galeria/' . $arquivo['name'];
        } else {
            throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
        }
    } else {
        $fotoGaleria = $galeria->fotoGaleria;
    }

     $galeria->nomeGaleria = $nomeGaleria;
     $galeria->fotoGaleria = $fotoGaleria;
     $galeria->statusGaleria = $statusGaleria;
     

     $galeria->Atualizar();




}



?>






<h1 class="h1Atual">Atualizar galeria</h1>
<form action="index.php?p=galeria&g=atualizar&id=<?php echo $galeria->idGaleria; ?>" method="POST" enctype="multipart/form-data">

    <div class="fotoForm">
        <div>
            <img src="img/sem-foto.jpg" alt="..." id="imgfoto">
        </div>
        <input type="file" id="fotoGaleria" name="fotoGaleria" style="display: none;">

    </div>


    <div>
        <label for="nomeGaleria"> Nome da galeria</label>
        <input type="text" name="nomeGaleria" id="nomeGaleria" placeholder="Informe o Nome " value="<?php echo $galeria->nomeGaleria; ?>">


    </div>

    
    <div>
        <select class="seleAtual" aria-label="Default select example" name="statusGaleria" value="<?php echo $galeria->statusGaleria; ?>>
            <option value="" selected>Seleciona o Status da Galeria</option>
            <option value="ATIVO">ATIVO</option>
            <option value="DESATIVADO">DESATIVADO</option>
            <option value="INATIVO">INATIVO</option>
        </select>
    </div>


    <div>
        <button type="submit">Atualizar Galeria</button>
    </div>


</form>

<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoGaleria').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoGaleria').addEventListener('change', function(a) {
        let imgfoto = document.getElementById('imgfoto');
        let arquivo = a.target.files[0]; // Get the selected file

        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(a) {
                imgfoto.src = a.target.result;
                //console.log(imgfoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }
    });
</script>