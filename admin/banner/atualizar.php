<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require_once("class/banner.php");
    $banner = new BannerClass($id);


   



    if (isset($_POST['idBanner'])) {


   
        $banner = $_POST['idBanner'];

        if (!empty($_FILES['fotoBanner']['name'])) {


            // Foto
            $arquivo   = $_FILES['fotoBanner'];
    
            if ($arquivo['error']) {
                throw new Exception('Error' . $arquivo['error']);
            }
            if (move_uploaded_file($arquivo['tmp_name'], '../src/imagens/banner/' . $arquivo['name'])) {
                $fotoFuncionario = 'banner/' . $arquivo['name'];
            } else {
                throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
            }
        } else {
            $fotoBanner = $banner->fotoBanner;
        }
        
        $banner->idBanner = $idBanner;
        $banner->fotoBanner = $fotoBanner;
        
        $banner->Atualizar();
    }


}
