<?php
    require_once 'lib/bootstrap.php';

    $tea = new TEA;
    $crypted = $tea->encrypt("SON TODOS PUTOS", "Yo tengo un pato");
    
    echo $crypted.'<br/>';
    echo $tea->decrypt($crypted, "Yo tengo un pato");
    
    $table = new DB_Gateway_Table('users',new DB_Gateway_DB('mysql://root:@localhost/jorge'));
    
    $user = 'ghopp';
    $pass = 'ghopp';
    $salt = mt_rand(0,10240);
    $salted_pass = md5($pass.$salt);
    $category = 1;
    
    $cfv = $table->find();
    var_dump($cfv);die;
    
//    $table->create(array(
//        'username'=>'ghopp',
//        'email'=>'ghopp@gmail.com',
//        'password'=>$salted_pass,
//        'salt'=>$salt,
//        'hash'=>md5($user.$salted_pass.$salt.$category),
//        'category'=>$category,
//    ));
//    
?>

<br>

<a href="pagina_2.php?nonza=<?=Session::get('last_nonce')?>">A la 2</a>    