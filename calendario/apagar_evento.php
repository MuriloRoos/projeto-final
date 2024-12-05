<?php
// Incluir o arquivo com a conexão com banco de dados
include_once 'conexao.php';

// Receber o id enviado pelo JavaScript
$dados = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Acessa o if quando existe o id do evento
if (!empty($dados)) {
    // Criar a Query excluir evento no banco de dados
    $query_excluir_event = "DELETE FROM events WHERE id = ?";

    // Prepara a query
    $apagar_evento = $conn->prepare($query_excluir_event);

    // Substitui o link pelo valor
    $apagar_evento->bind_param("i", $dados); // 'i' indica que o parâmetro é um inteiro

    // Verificar se consegui apagar corretamente
    if ($apagar_evento->execute()) {
        $retorna = ['status' => true, 'msg' => 'Evento excluído com sucesso!'];
    } else {
        $retorna = ['status' => false, 'msg' => 'Erro: Evento não excluído!'];
    }
} else { // Acessa o ELSE quando o id está vazio
    $retorna = ['status' => false, 'msg' => 'Erro: Necessário enviar o id do evento!'];
}

header('Content-Type: application/json');
echo json_encode($retorna);
?>