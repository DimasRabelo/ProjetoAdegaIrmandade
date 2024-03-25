<?php
require_once('class/contato.php');
$contato = new ContatoClass();

// Inicializa a lista completa de funcionários ativos, desativados e respondidos
$listaAtivos = $contato->ListarAtivos();
$listaDesativados = $contato->ListarDesativados();
$listaRespondidos = $contato->ListarRespondidos();

// Inicializa a variável $statusFiltrar
$statusFiltrar = 'ATIVO'; // Definindo como ativo por padrão

// Verifica se o filtro de status foi aplicado
if (isset($_POST['statusContato'])) {
    $statusFiltrar = $_POST['statusContato'];
}

// Verifica se foi enviada uma pesquisa por nome de contato
$pesquisaContato = isset($_POST['searchInput']) ? $_POST['searchInput'] : '';

// Filtra a lista com base no status selecionado
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

// Filtra a lista com base no nome do contato pesquisado
if (!empty($pesquisaContato)) {
    $listaFiltrada = array_filter($listaFiltrada, function($linha) use ($pesquisaContato) {
        return stripos($linha['nomeContato'], $pesquisaContato) !== false;
    });
}
?>

<!-- Formulário de pesquisa -->
<div>
    <form class="CampoPes" action="" method="POST">
        <input type="text" id="searchInput" name="searchInput" placeholder="Digite o Nome do Contato">
        <button type="submit">Pesquisar</button>
    </form>
</div>

<!-- Formulário de filtro por status -->
<form class="formStatus" action="" method="POST">
    <!-- Conteúdo do formulário de filtro (mantido o mesmo) -->
</form>

<!-- Tabela de resultados -->
<div class="table-container" id="arrastarMouse">
    <table>
        <!-- Cabeçalho da tabela (mantido o mesmo) -->
        <thead>
            <!-- Conteúdo do cabeçalho da tabela (mantido o mesmo) -->
        </thead>
        <tbody>
            <?php
            if (!empty($listaFiltrada)) {
                foreach ($listaFiltrada as $linha) : ?>
                    <tr>
                        <!-- Conteúdo das células da tabela (mantido o mesmo) -->
                    </tr>
            <?php endforeach;
            } else {
                echo "<tr><td colspan='8'>Nenhum dado disponível</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
