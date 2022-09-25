<?php
// logica
// recuperare parametro get
// filtrare la lista in base al paramentro

// formattare la risposta
$res = [
    'success' => true,
    'response' => $cards
];


// settiamo il content type
header('content-type: application/json');

// stampiamo in formato JSON
echo json_encode($res);