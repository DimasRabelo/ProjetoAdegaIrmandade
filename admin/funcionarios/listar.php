<?php
require_once('class/funcionario.php');
$funcionario = new FuncionarioClass();

// Lógica para contar os funcionários
$totalCadastrados = count($funcionario->listarFuncionario());
$totalAtivos = count($funcionario->listarAtivos());

if (isset($_POST['statusFuncionario'])) {
    $statusFiltrar = $_POST['statusFuncionario'];

    if ($statusFiltrar === 'TODOS') {
        $listaFiltrada = $funcionario->listarFuncionario();
        $totalAtivos = count($listaFiltrada);
    } elseif ($statusFiltrar === 'DESATIVADO') {
        $listaFiltrada = $funcionario->listarFuncionariosDesativados();
    } else {
        $listaFiltrada = $funcionario->listarFuncionario();
    }
} else {
    $statusFiltrar = '';
    $listaFiltrada = $funcionario->listarFuncionario();
    $totalAtivos = count($listaFiltrada);
}
?>


<style>
    .total {
        color: #ffffff;
        font-size: 1.0em;
        margin-bottom: 0;

    }

    .formStatus {
        display: flex;
        flex-direction: column-reverse;
        justify-content: space-around;
        padding: 10px;
    }
</style>



<!-- Mostra o status atual e total de cadastrados -->





<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&f=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Funcionario
    </a>
</div>

<!-- Formulário de filtro -->
<form class="formStatus" action="" method="POST">
    <div>
        <select class="seleAtual" aria-label="Default select example" name="statusFuncionario">
            <option value="" <?php echo ($statusFiltrar === '') ? 'selected' : ''; ?>>TODOS</option>
            <option value="ATIVO" <?php echo ($statusFiltrar === 'ATIVO') ? 'selected' : ''; ?>>ATIVOS</option>
            <option value="DESATIVADO" <?php echo ($statusFiltrar === 'DESATIVADO') ? 'selected' : ''; ?>>DESATIVADOS</option>
        </select>
        <button type="submit">Filtrar</button>
    </div>
    <div>
        <?php if ($statusFiltrar !== 'ATIVO' && $statusFiltrar !== 'DESATIVADO') : ?>
            <p class="total">Total de cadastrados: <?php echo $totalCadastrados; ?></p>
        <?php endif; ?>
        <?php if ($statusFiltrar === 'ATIVO') : ?>
            <p class="total">Total de ativos: <?php echo $totalAtivos; ?></p>
        <?php elseif ($statusFiltrar === 'DESATIVADO') : ?>
            <p class="total">Total de desativados: <?php echo count($listaFiltrada); ?></p>
        <?php endif; ?>
    </div>

</form>


<div class="table-container" id="arrastarMouse">
    <div>
        <table>
            <caption>Lista de Funcionários</caption>
            <thead>
                <tr>
                    <?php if ($statusFiltrar === 'DESATIVADO') : ?>
                        <th>Ativar</th>
                    <?php endif; ?>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Nivel de Acesso</th>
                    <th>Data de Admissão</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Cep</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listaFiltrada as $linha) : ?>
                    <?php if (empty($statusFiltrar) || $linha['statusFuncionario'] === $statusFiltrar) : ?>

                        <tr>
                            <?php if ($statusFiltrar === 'DESATIVADO') : ?>
                                <td>
                                    <a class="btn btn-success" href="index.php?p=funcionarios&f=ativar&id=<?php echo $linha['idFuncionario']; ?>">
                                        Ativar
                                    </a>
                                </td>
                            <?php endif; ?>
                            <td class="func">
                                <a href="../src/imagens/<?php echo $linha['fotoFuncionario'] ?>" data-lightbox="<?php echo $linha['nomeFuncionario'] ?>" data-title="<?php echo $linha['nomeFuncionario'] ?>">
                                    <img src="../src/imagens/<?php echo $linha['fotoFuncionario'] ?>" data-alt="<?php echo $linha['nomeFuncionario'] ?>">
                                </a>


                            </td>
                            <td><?php echo $linha['nomeFuncionario'] ?></td>
                            <td><?php echo $linha['cargoFuncionario'] ?></td>
                            <td><?php echo date('d/m/Y', strtotime($linha['dataNascFuncionario'])) ?></td>
                            <td><?php echo $linha['emailFuncionario'] ?></td>
                            <td><?php echo $linha['nivelFuncionario'] ?></td>
                            <td><?php echo date('d/m/Y', strtotime($linha['dataAdmissaoFuncionario'])) ?></td>
                            <td><?php echo $linha['enderecoFuncionario'] ?></td>
                            <td><?php echo $linha['telFuncionario'] ?></td>
                            <td><?php echo $linha['cepFuncionario'] ?></td>







                            <td>
                                <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&f=atualizar&id=<?php echo $linha['idFuncionario'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                        <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                    </svg>
                                    Atualizar
                                </a>
                            </td>
                            <td>
                                <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&f=desativar&id= <?php echo $linha['idFuncionario'] ?>" onclick="return confirmarDesativacao()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                        <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                    </svg>
                                    Desativar
                                </a>
                            </td>

                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>




            </tbody>


        </table>
    </div>
</div>