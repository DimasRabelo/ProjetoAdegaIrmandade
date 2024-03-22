

<?php

class Conexao{

    public static function LigarConexao() {
        try {
            $conn = new PDO('mysql:dbname=u283879542_adegairmandade;host=195.179.239.0', 'u283879542_adegairmandade', 'SenacAdega01');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            // Se algo der errado na conexão, será capturado aqui
            throw new Exception("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }

}

// Testando a conexão
try {
    $conexao = Conexao::LigarConexao();
    if ($conexao) {
        echo "<span style='color: white;'>Conexão bem-sucedida!</span>";
        // Aqui você pode realizar operações no banco de dados, se necessário
    } else {
        echo "Não foi possível conectar ao banco de dados.";
    }
} catch(Exception $e) {
    echo "<span style='color: white;'>Erro: " . $e->getMessage() . "</span>";
}
?>
