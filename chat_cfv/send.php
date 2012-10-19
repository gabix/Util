<?php

require_once 'config.php';
require_once 'messages.php';

if (!isset($_POST['data']) or strlen($_POST['data']) == 0) { //acá entra si hubo un error en lo que te mandan
    echo json_encode(array(
        'error' => true,
        'message' => 'Invalid answer',
        'time' => microtime(true)
    ));
} else {
    Messages::put($_POST['data'], $_POST['user'], microtime(true)); //acá guarda el mensaje
    echo json_encode(array(//y responde que está todo jamón
        'error' => false,
        'message' => 'OK - Length ' . strlen(isset($_POST['data']) ? $_POST['data'] : ''),
        'time' => $date,
    ));
}