
<?php
require_once('class/produto.php');
$produto = new ProdutoClass();
$lista = $produto->ListarProduto();



?>









<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=produtos&pr=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Produto
    </a>


</div>

<div class="table-container" id="arrastarMouse">
    <div>
        <table>
            <caption>Lista de Produtos</caption>
            <thead>
                <tr>
                    <th>ID Produto</th>
                    <th>Nome do Produto</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th>Preço de Compra dos Produtos</th>
                    <th>Preço de Venda dos Produtos</th>
                    <th>Fornecedor</th>
                    <th>Data de Recebimento</th>
                    <th>Hora do Recebimento</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
    
                </tr>
            </thead>
            <?php foreach ($lista as $linha) : ?>

                <tbody>
                    <tr>
                         <td class="Prod"><?php echo $linha['idProduto'] ?></td>
                        <td><?php echo $linha['nomeProduto'] ?></td>
                        <td><?php echo $linha['descricaoProduto'] ?></td>
                        <td><?php echo $linha['categoriaProduto'] ?></td>
                        <td><?php echo $linha['statusProduto'] ?></td>
                        <td><?php echo $linha['precoCompraProduto'] ?></td>
                        <td><?php echo $linha['precoVendaProduto'] ?></td>
                        <td><?php echo $linha['fornecedorProduto'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($linha['dataReceProduto'])) ?></td>
                        <td><?php echo $linha['horaProduto'] ?></td>

                        

                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=produtos&pr=atualizar&id=<?php echo $linha['idProduto'] ?>" onclick="return confirmarDesativacao()" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                                Atualizar
                            </a>
                        </td>
                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=produtos&pr=desativar&id=<?php echo $linha['idProduto'] ?>" onclick="return confirmarDesativacao()">
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