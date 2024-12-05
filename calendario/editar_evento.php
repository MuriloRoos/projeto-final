<?php

// Adicione estas linhas no início do seu arquivo PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir o arquivo com a conexão com banco de dados
include_once 'conexao.php';

// Receber os dados enviados pelo JavaScript
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Criar a QUERY editar evento no banco de dados
$query_edit_event = "UPDATE events SET title=?, color=?, start=?, end=? WHERE id=?";

// Prepara a QUERY
$edit_event = $conn->prepare($query_edit_event);

if ($edit_event === false) {
    die("Erro na preparação da query: " . $conn->error);
}

// Associar os valores usando bind_param
$edit_event->bind_param("ssssi", 
        $dados['edit_title'], 
        $dados['edit_color'], 
        $dados['edit_start'], 
        $dados['edit_end'], 
        $dados['edit_id']);

// Verifica se conseguiu editar corretamente
if ($edit_event->execute()) {
    $retorna = [
        'status' => true,
        'msg' => 'Evento editado com sucesso!',
        'id' => $dados['edit_id'],
        'title' => $dados['edit_title'],
        'color' => $dados['edit_color'],
        'start' => $dados['edit_start'],
        'end' => $dados['edit_end']
    ];
} else {
    $retorna = ['status' => false, 'msg' => 'Erro: Evento não editado! ' . $edit_event->error];
}

// Retornar os dados como JSON
header('Content-Type: application/json');
echo json_encode($retorna);
?>