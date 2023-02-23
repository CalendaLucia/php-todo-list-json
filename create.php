<?php

$todosString = file_get_contents('data.json');
$todos = json_decode($todosString, true);

$newTodo = [
    'id' => count($todos) + 1,
    'text' => $_POST['newTodoText'],
    'completed' => false,
];

$todos[] = $newTodo;

$todosEncoded = json_encode($todos);

if (file_put_contents('data.json', $todosEncoded) !== false) {
    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200
    ];
} else {
    $response = [
        'success' => false,
        'message' => 'Error writing to file',
        'code' => 500
    ];
}

header('Content-Type: application/json');

echo json_encode($response);
