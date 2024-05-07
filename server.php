<?php
$records_json = file_get_contents('dischi.json');
$records = json_decode($records_json, true);

$response = $records;

if(isset($_GET['recordIndex'])){
    $recordIndex = intval($_GET['recordIndex']);
    $response = $records[$recordIndex];
};


header('Content-Type: application/json');
echo json_encode($response);

?>