<?php
require_once('class/contato.php');
$contato = new ContatoClass();

// Inicializa a lista completa de funcionários ativos, desativados e respondidos
$listaAtivos = $contato->ListarAtivos();
$listaDesativados = $contato->ListarDesativados();
$listaRespondidos = $contato->ListarRespondidos();

// Inicializa a variável $statusFiltrar
$statusFiltrar = '';

// Verifica se o filtro de status foi aplicado
if (isset($_POST['statusContato'])) {
    $statusFiltrar = $_POST['statusContato'];

    // Aplica o filtro com base no status selecionado
    switch ($statusFiltrar) {
        case 'ATIVO':
            $listaFiltrada = $listaAtivos;
            break;
        case 'DESATIVADO':
            $listaFiltrada = $listaDesativados;
            break;
        case 'RESPONDIDO':
            $listaFiltrada = $listaRespondidos;
            break;
        default:
            // Nenhum filtro aplicado, mantém a lista geral
            $listaFiltrada = array_merge($listaAtivos, $listaDesativados, $listaRespondidos);
            break;
    }
}

// Verifica se a pesquisa por nome foi submetida
if (isset($_POST['searchInput'])) {
    $searchTerm = strtolower($_POST['searchInput']);

    // Filtra a lista com base no nome do funcionário
    $listaFiltrada = array_filter($listaFiltrada, function ($linha) use ($searchTerm) {
        return stripos(strtolower($linha['nomeContato']), $searchTerm) !== false;
    });
}

$totalCadastrados = count($listaFiltrada);

// Lógica para contar os funcionários ativos
$totalAtivos = count($listaAtivos);

// Lógica para contar os funcionários desativados
$totalDesativados = count($listaDesativados);

?>

<div>
    <form class="CampoPes" action="" method="POST">
        <input type="text" id="searchInput" name="searchInput" placeholder="Digite o Nome do Contato">
        <button type="submit">Pesquisar</button>
    </form>
</div>

<form class="formStatus" action="" method="POST">
    <div>

        <select class="seleAtual" aria-label="Default select example" name="statusContato">
            <option value="" selected disabled>Selecione um Status da Lista</option>
            <option value="ATIVO" <?php echo ($statusFiltrar === 'ATIVO') ? 'selected' : ''; ?>>ATIVOS</option>
            <option value="DESATIVADO" <?php echo ($statusFiltrar === 'DESATIVADO') ? 'selected' : ''; ?>>DESATIVADOS</option>
            <option value="RESPONDIDO" <?php echo ($statusFiltrar === 'RESPONDIDO') ? 'selected' : ''; ?>>RESPONDIDOS</option>
        </select>


        <button type="submit">Filtrar</button>
    </div>
    <div>
        <?php if ($statusFiltrar === 'ATIVO') : ?>
            <p class="total">Total de ativos: <?php echo $totalAtivos; ?></p>
        <?php elseif ($statusFiltrar === 'DESATIVADO') : ?>
            <p class="total">Total de desativados: <?php echo $totalDesativados; ?></p>
        <?php else : ?>
            <p class="total">Lista Geral de Cadastro: <?php echo $totalCadastrados; ?></p>
        <?php endif; ?>
    </div>
</form>

<div class="table-container" id="arrastarMouse">
    <table>
        <caption>Lista de Email</caption>
        <thead>
            <tr>
                <th>Status</th>
                <th>Nome Contato</th>
                <th>E-mail Contato</th>
                <th>Telefone Contato</th>
                <th>Mensagem</th>
                <th>Data da Mensagem</th>
                <th>Hora da Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($listaFiltrada)) {
                foreach ($listaFiltrada as $linha) : ?>
                    <tr>
                        
                        <td><?php echo $linha['statusContato'] ?></td>
                        <td><?php echo $linha['nomeContato']; ?></td>
                        <td><?php echo $linha['emailContato']; ?></td>
                        <td><?php echo $linha['telefoneContato']; ?></td>
                        <td><?php echo $linha['mensagemContato'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($linha['dataContato'])) ?></td>
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