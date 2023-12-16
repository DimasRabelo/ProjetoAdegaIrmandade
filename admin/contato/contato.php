<?php
require_once('class/contato.php');
$contato = new ContatoClass();
$lista = $contato->ListarContato();
?>


<div class="table-container" id="arrastarMouse">
    <table>
        <caption>Lista de Email</caption>
        <thead>
            <tr>
                <th>ID Contato</th>
                <th>Nome Contato</th>
                <th>E-mail Contato</th>
                <th>Telefone Contato</th>
                <th>Mensagem</th>
                <th>Data da Mensagem</th>
                <th>Status da Mensagem</th>
                <th>Hora da Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($lista) && !empty($lista)) {
                foreach ($lista as $linha) : ?>
                    <tr>
                        <td><?php echo $linha['idContato']; ?></td>
                        <td><?php echo $linha['nomeContato']; ?></td>
                        <td><?php echo $linha['emailContato']; ?></td>
                        <td><?php echo $linha['telefoneContato']; ?></td>
                        <td><?php echo $linha['mensagemContato'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($linha['dataContato'])) ?></td>
                        <td><?php echo $linha['statusContato'] ?></td>
                        <td><?php echo $linha['horaContato'] ?></td>
                    </tr>
            <?php endforeach;
            } else {
                echo "<tr><td colspan='8'>Nenhum dado disponível</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>