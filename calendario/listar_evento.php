<?php

// Incluir o arquivo com a conexão com banco de dados
include_once 'conexao.php';

// QUERY para recuperar os eventos
$query_events = "SELECT id, title, color, start, end FROM events";

// Prepara a query
$result_events = $conn->prepare($query_events);

// Executa a query
$result_events->execute();

// Liga as variáveis aos campos retornados
$result_events->bind_result($id, $title, $color, $start, $end);

// Cria o array que recebe os eventos
$eventos = [];

// Percorre a lista de registros retornados do banco de dados
while ($result_events->fetch()) {
    $eventos[] = [
        'id' => $id,
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end' => $end
    ];
}

// Retorna o array de eventos como JSON
echo json_encode($eventos);

?>
