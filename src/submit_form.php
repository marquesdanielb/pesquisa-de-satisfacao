<?php
// db_connection.php usando PDO
define('BD_DSN', 'mysql:dbname=avaliacao-atendimento;host=db');
define('BD_USERNAME', 'root');
define('BD_PASSWORD', 'root');

try {
    $conn = new PDO(BD_DSN, BD_USERNAME, BD_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Falha na conexão: ' . $e->getMessage());
}

if (array_key_exists('name', $_POST)) {
    $nome = $_POST['name'];
}

if (array_key_exists('primeira-vez-sim', $_POST)) {
    if (!$_POST['primeira-vez-sim']) {
        $primeira_vez_sim = 'nao';
    } else {
        $primeira_vez_sim = 'sim';
    }
}

if (array_key_exists('houve-processo', $_POST)) {
    if (!$_POST['houve-processo']) {
        $houve_processo = 'nao';
    } else {
        $houve_processo = 'sim';
    }
}

// Inserção dos dados usando PDO
$sql = "INSERT INTO respostas (nome, documento, primeira_vez, servicos_realizados, simpatia, clareza, tempo_espera, resolucao, descricao_resolucao, houve_processo, descricao_processo, resolucao_processo, sugestao, atendente) VALUES (:nome, :documento, :primeira_vez, :servicos_realizados, :simpatia, :clareza, :tempo_espera, :resolucao, :descricao_resolucao, :houve_processo, :descricao_processo, :resolucao_processo, :sugestao, :atendente)";
// var_dump($_POST);
// die();
$stmt = $conn->prepare($sql);
$stmt->execute([
    ':nome' => $_POST['name'],
    ':documento' => $_POST['documento'],
    // ':primeira_vez' => $primeira_vez_sim,
    ':primeira_vez' => $_POST['primeira-vez-sim'],
    ':servicos_realizados' => $_POST['servicos-realizados'],
    ':simpatia' => $_POST['simpatia-e-cordialidade'],
    ':clareza' => $_POST['clareza-nas-informacoes'],
    ':tempo_espera' => $_POST['tempo-de-espera'],
    ':resolucao' => $_POST['resolucao-da-solicitacao'],
    ':descricao_resolucao' => $_POST['descricao-resolucao'],
    ':houve_processo' => $_POST['houve-processo'],
    ':descricao_processo' => $_POST['resolucao-processo'],
    ':resolucao_processo' => $_POST['resolucao-processo'],
    ':sugestao' => $_POST['sugestao-duvida-ou-critica'],
    ':atendente' => 'Marilia'
]);
