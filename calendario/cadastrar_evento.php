<?php
// Incluir o arquivo com a conexão com banco de dados
include_once 'conexao.php';

//Receber os dados enviados pelo JavaScript
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$query_cad_event = "INSERT INTO events (title, color, start, end) VALUES (?, ?, ?, ?)";

$cad_event = $conn->prepare($query_cad_event);

if ($cad_event === false) {
    die("Erro na preparação da query: " . $conn->error);
}

// Associar os valores usando bind_param
// 'ssss' indica os tipos: string, string, string, string
$cad_event->bind_param(
    'ssss',
    $dados['cad_title'],
    $dados['cad_color'],
    $dados['cad_start'],
    $dados['cad_end']
);

// Executar e validar a execução
if ($cad_event->execute()) {
    $retorna = [
        'status' => true,
        'msg' => 'Evento cadastrado com sucesso!',
        'id' => $conn->insert_id,
        'title' => $dados['cad_title'],
        'color' => $dados['cad_color'],
        'start' => $dados['cad_start'],
        "end" => $dados['cad_end']
    ];
} else {
    $retorna = ['status' => false, 'msg' => 'Erro: Evento não cadastrado!'];
}

// Retornar os dados como JSON
echo json_encode($retorna);

?>