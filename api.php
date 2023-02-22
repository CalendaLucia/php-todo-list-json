<?php
// Imposta l'header della risposta come JSON
header('Content-Type: application/json');

// Leggi i dati dal file JSON
$todos = json_decode(file_get_contents('data.json'), true);

// Restituisci la lista di attività come JSON
echo json_encode($todos);
?>
