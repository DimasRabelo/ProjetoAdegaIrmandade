<?php
require_once('class/vendas.php');
$venda = new VendasClass();
$lista = $venda->ListarVenda();



?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=vendas&v=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Nova Venda
    </a>


</div>

<div class="table-container" id="arrastarMouse">
    <div>
        <table>
            <caption>Lista de Vendas</caption>
            <thead>
                <tr>
                    <th>ID Venda</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Valor Total da Venda</th>
                    <th>Status</th>
                    <th>Nome do Funcionário</th>
                    <th>Nome do Produto</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>

                </tr>
            </thead>
            <?php foreach ($lista as $linha) : ?>

                <tbody>
                    <tr>
                        <td class="vendas"><?php echo $linha['idVenda'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($linha['dataVenda'])) ?></td>
                        <td><?php echo $linha['horaVenda'] ?></td>
                        <td><?php echo $linha['valorTotalVenda'] ?></td>
                        <td><?php echo $linha['statusVenda'] ?></td>
                        <td><?php echo $linha['nomeFuncionario'] ?></td>
                        <td><?php echo $linha['nomeProduto'] ?></td>

                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=vendas&v=atualizar&id=<?php echo $linha['idVenda'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                                Atualizar
                            </a>
                        </td>
                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=vendas&v=desativar&id=<?php echo $linha['idVenda'] ?>">
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