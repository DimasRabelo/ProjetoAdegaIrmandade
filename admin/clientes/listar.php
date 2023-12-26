
<?php
require_once('class/cliente.php');
$cliente = new ClienteClass();
$lista = $cliente->ListarCliente();



?>




<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=clientes&c=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Cliente
    </a>


</div>


<div class="table-container" id="arrastarMouse">
    <div>
        <table>
            <caption>Lista de Usuarios</caption>
            <thead>
                <tr>
                    <th>ID Usuario</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
    
                </tr>
            </thead>
            <?php foreach ($lista as $linha) : ?>

                <tbody>
                    <tr>
                         <td class="usua"><?php echo $linha['idUsuario'] ?></td>
                        <td><?php echo $linha['nomeUsuario'] ?></td>
                        <td><?php echo $linha['emailUsuario'] ?></td>
                        <td><?php echo $linha['senhaUsuario'] ?></td>
                        <td class="fotoUser"  >
                            <a href="../src/imagens/<?php echo $linha['fotoUsuario'] ?>" data-lightbox="<?php echo $linha['nomeUsuario'] ?>" data-title="<?php echo $linha['nomeUsuario'] ?>">
                                <img src="../src/imagens/<?php echo $linha['fotoUsuario'] ?>" data-alt="<?php echo $linha['nomeUsuario'] ?>">
                            </a>
                        </td>
                        <td><?php echo $linha['statusUsuario'] ?></td>
                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=clientes&c=atualizar&id=<?php echo $linha['idUsuario'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                                Atualizar
                            </a>
                        </td>
                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=clientes&c=desativar&id=<?php echo $linha['idUsuario'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                                Desativar
                            </a>
                        </td>

                    </tr>
                <?php endforeach ?>
              




                </tbody>


        </table>
    </div>
</div>