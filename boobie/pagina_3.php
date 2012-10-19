<?php
require_once 'lib/bootstrap.php';

$old_nonce = Session::get('last_nonce');
if(!isset($_GET['nonza']) || $_GET['nonza'] != $old_nonce){
    die("WTF?!? ");
}
else{
    Session::set('last_nonce', mt_rand(0,10240));
}?>

<a href="index.php?nonza=<?=Session::get('last_nonce')?>">Vamos a la 1?</a>
