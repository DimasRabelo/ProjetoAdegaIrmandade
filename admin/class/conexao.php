<?php

class Conexao{

    public static function LigarConexao() {
        try {
            $conn = new PDO('mysql:dbname=u283879542_adegairmandade;host=smpsistema.com.br', 'u283879542_adegairmandade', 'SenacAdega01');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            // Se algo der errado na conexão, será capturado aqui
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }

}

// Testando a conexão
try {
    $conexao = Conexao::LigarConexao();
    echo "Conexão bem-sucedida!";
    // Aqui você pode realizar operações no banco de dados, se necessário
} catch(Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>