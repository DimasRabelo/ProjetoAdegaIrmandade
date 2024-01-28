<?php

require_once('class/banner.php');
$banner = new BannerClass();
$lista = $banner->ListarBanner();

//var_dump($lista)



?>



<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=banner&b=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Banner
    </a>
</div>
<tbody>

    <div>
        <table>
            <caption> Lista de Banner</caption>

            <thead>

                <tr>

                    <th>foto</th>
                    <th>Atualizar
                        Desativar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha) : ?>

                    <tr>
                        <td class="fotoGeral">
                            <a href="../src/imagens/<?php echo $linha['fotoBanner'] ?>" data-lightbox="<?php echo $linha['nomeBanner'] ?>" data-title="<?php echo $linha['nomeBanner'] ?>">
                                <img src="../src/imagens/<?php echo $linha['fotoBanner'] ?>" data-alt="<?php echo $linha['nomeBanner'] ?>">
                            </a>
                        </td>
                        <td>
                            <a href="index.php?p=banner&b=ativar&id=<?php echo $linha['idBanner']; ?>" onclick="return confirmarAtivacao()">
                                <img src="./img/aceitar.png" alt="">
                            </a>


                            <a href="index.php?p=banner&b=desativar&id=<?php echo $linha['idBanner'] ?>" onclick="return confirmarDesativacao()">
                                <img src="./img/lixeira-de-reciclagem.png" alt="">
                            </a>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </tr>

</tbody>
</table>
</div>