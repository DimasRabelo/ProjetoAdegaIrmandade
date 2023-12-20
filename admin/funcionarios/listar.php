<?php
require_once('class/funcionario.php');
$funcionario = new FuncionarioClass();
$lista = $funcionario->ListarFuncionario();



?>




<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&f=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Funcionario
    </a>


</div>


<div class="table-container" id="arrastarMouse">
    <div>
        <table>
            <caption>Lista de Funcionários</caption>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>ID Funcionario</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>senha</th>
                    <th>Nivel de Acesso</th>
                    <th>Data de Admissão</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Cep</th>
                    <th>Status</th>
                    <th>Atualizar</th>
                    <th>Desativar</th>
                </tr>
            </thead>
            <?php foreach ($lista as $linha) : ?>

                <tbody>
                    <tr>
                        <td class="func">
                            <a href="../src/imagens/<?php echo $linha['fotoFuncionario'] ?>" data-lightbox="<?php echo $linha['nomeFuncionario'] ?>" data-title="<?php echo $linha['nomeFuncionario'] ?>">
                                <img src="../src/imagens/<?php echo $linha['fotoFuncionario'] ?>" data-alt="<?php echo $linha['nomeFuncionario'] ?>">
                            </a>


                        </td>
                        <td class="idfunc"><?php echo $linha['idFuncionario'] ?></td>
                        <td><?php echo $linha['nomeFuncionario'] ?></td>
                        <td><?php echo $linha['cargoFuncionario'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($linha['dataNascFuncionario'])) ?></td>
                        <td><?php echo $linha['emailFuncionario'] ?></td>
                        <td><?php echo $linha['senhaFuncionario'] ?></td>
                        <td><?php echo $linha['nivelFuncionario'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($linha['dataAdmissaoFuncionario'])) ?></td>
                        <td><?php echo $linha['enderecoFuncionario'] ?></td>
                        <td><?php echo $linha['telFuncionario'] ?></td>
                        <td><?php echo $linha['cepFuncionario'] ?></td>
                        <td><?php echo $linha['statusFuncionario'] ?></td>




                        </a>

                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&f=atualizar" <?php echo $linha['idFuncionario'] ?>>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                                Atualizar
                            </a>
                        </td>
                        <td>
                            <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=funcionarios&f=desativar" <?php echo $linha['idFuncionario'] ?>>
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