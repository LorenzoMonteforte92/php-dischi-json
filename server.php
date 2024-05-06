<?php
$records_json = file_get_contents('dischi.json');
$records = json_decode($records_json, true);

header('Content-Type: application/json');
echo json_encode($records);

?>