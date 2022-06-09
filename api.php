<?php 

include __DIR__ . '/../php-ajax-dischi/db.php';

header('Content-Type: application/json');

echo json_encode($db);
?>