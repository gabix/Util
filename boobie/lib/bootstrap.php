<?php
    define('APP_ROOT',dirname(dirname(__FILE__)));
    
    require_once(APP_ROOT.'/lib/Loader.php');
    
    Loader::register();
    Loader::addExtension('class', 'php');
    Loader::addExtension('class', 'class.php');
    Loader::addExtension('class', 'inc.php');
    Loader::addExtension('resources', 'php');
    Loader::addLookupDirectory(APP_ROOT.'/lib');

    if(!Session::get('last_nonce')){
        Session::set("last_nonce", mt_rand(0, 10240));
    }
    
    