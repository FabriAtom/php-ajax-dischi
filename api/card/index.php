<?php
include __DIR__ . '/../db/api.php';

$res = [
    'success' => true,
    'response' => $cards
];
header('content-type: application/json');
echo json_encode($res);
?>

    