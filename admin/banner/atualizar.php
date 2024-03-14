<?php
$id = $_GET["id"];
require_once("class/banner.php");
$banner = new BannerClass($id);

// Obtém a lista de banners apenas se houver algum
$lista = $banner->ListarBanner();
$primeiroBanner = false;
$segundoBanner = false;
$terceiroBanner = false;

if (!empty($lista)) {
    // Verifica se o ID do banner é o primeiro da lista
    $primeiroBanner = ($id == $lista[0]['idBanner']);
    $segundoBanner = ($id == $lista[1]['idBanner']);
    $terceiroBanner = ($id == $lista[2]['idBanner']);
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
    <?php if ($primeiroBanner) : ?>
        <p class="">Alterar a foto com dimensões de 500 de Largura e 700 de Altura</p>
    <?php endif; ?>
    <?php if ($segundoBanner) : ?>
        <p class="">Alterar a foto com dimensões de 1920 de Largura e 600 de Altura</p>
    <?php endif; ?>
    <?php if ($terceiroBanner) : ?>
        <p class="">Alterar a foto com dimensões de 1920 de Largura e 400 de Altura</p>
    <?php endif; ?>
    <div>
        <label for="nomeBanner">Nome do Banner</label>
        <input type="text" name="nomeBanner" id="nomeBanner" placeholder="Informe o Nome do Banner" value="<?php echo $banner->nomeBanner; ?>">
    </div>
    <div>
        <select class="seleAtual" aria-label="Default select example" name="paginaDestino">
            <option value="" selected>Seleciona a Página de Destino do Banner</option>
            <option value="PÁGINA-BEBIDAS/CERVEJAS">PÁGINA-BEBIDAS/CERVEJAS</option>
            <option value="PÁGINA-BEBIDAS/DESTILADOS">PÁGINA-BEBIDAS/DESTILADOS</option>
            <option value="PÁGINA-TABACARIA">PÁGINA-TABACARIA</option>
        </select>
    </div>
    <div>
        <button type="submit">Alterar Banner</button>
    </div>
</form>
