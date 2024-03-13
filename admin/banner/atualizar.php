<?php

$id = $_GET["id"];
//echo $id;
require_once("class/banner.php");
$banner = new BannerClass($id);







if (isset($_POST['nomeBanner'])) {

    $nomeBanner = $_POST['nomeBanner'];
    $statusBanner = $_POST['statusBanner'];
    

    //foto


    if (!empty($_FILES['fotoBanner']['name'])) {


        // Foto
        $arquivo   = $_FILES['fotoBanner'];

        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
        if (move_uploaded_file($arquivo['tmp_name'], '../src/imagens/banner/' . $arquivo['name'])) {
            $fotoBanner = 'banner/' . $arquivo['name'];
        } else {
            throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
        }
    } else {
        $fotoBanner = $banner->fotoBanner;
    }
    // fim da empty

    $banner->nomeBanner = $nomeBanner;
    $banner->statusBanner = $statusBanner;
    $banner->fotoBanner = $fotoBanner;

    $banner->Atualizar();
}





?>

<h1 class="h1Atual">Alterar Foto</h1>
<form action="index.php?p=banner&b=atualizar&id=<?php echo $banner->idBanner; ?> " method="POST" enctype="multipart/form-data">


    <div class="fotoForm">

        <div>
            <?php if (!empty($banner->fotoBanner)) : ?>
                <img src="../src/imagens/<?php echo $banner->fotoBanner; ?>" alt="Banner Photo" id="imgfoto">
            <?php else : ?>
                <img src="img/sem-foto.jpg" alt="Sem Foto" id="imgfoto">
            <?php endif; ?>
        </div>
        <input type="file" id="fotoBanner" name="fotoBanner" style="display: none;">

    </div>
    <p class="informa">clique em cima da foto se deseja alterar</p>
    <div>
        <label for="nomeBanner">Nome do Banner</label>
        <input type="text" name="nomeBanner" id="nomeBanner" placeholder="Informe o Nome do Banner" value="<?php echo $banner->nomeBanner; ?>">

    </div>

   
    <div>
        <button type="submit">Alterar Banner</button>
    </div>

</form>

<script>
    // Evento de Clique
    document.getElementById('imgfoto').addEventListener('click', function() {
        document.getElementById('fotoBanner').click();
    });

    // Evento de Alteração Mudar
    document.getElementById('fotoBanner').addEventListener('change', function(e) {
        let imgfoto = document.getElementById('imgfoto');
        let arquivo = e.target.files[0];
        if (arquivo) {
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imgfoto.src = e.target.result;
                // console.log(imgfoto.src);
            }

            carregar.readAsDataURL(arquivo);
        }
    });
</script>