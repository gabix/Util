<?php

require_once 'config.php';
require_once 'messages.php';
//preparame una sesión nueva si no hay ninguna. 
if (session_id() === '') {
    session_start();
}

$messages = Messages::get((float) 0xFACEFEED, $_GET['after']); //acá lee los mensajes con date > lo que sea que te mandan en get

/**
 * Produce una cadena al azar de texto del largo que vos quieras
 * @param type $length
 * @return type 
 */
function random_string($length = 100) {
    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ .';
    if (strlen($chars) < $length)
        $chars = str_repeat($chars, ceil(strlen($chars)));
    $chars = str_split($chars);
    $buf = '';
    shuffle($chars);
    for ($i = 0; $i < $length; $i++) {
        $buf.= $chars[$i];
    }
    return $buf;
}

echo json_encode(array(
    'error' => false,
    'message' => $messages
));