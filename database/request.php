<?php 

header('Content-Type: application/json');

function send($data) {
    echo json_encode($data);
}

?>