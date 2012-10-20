<?php

define('APP_ROOT', dirname(dirname(dirname(__FILE__))));
define('DS', DIRECTORY_SEPARATOR);

require_once(APP_ROOT.DS."miLib".DS."Loader.php");

Loader::register();
Loader::addExtension('class', 'php');
Loader::addExtension('class', 'class.php');
Loader::addExtension('resources', 'php');
Loader::addLookupDirectory(APP_ROOT.DS.'miLib');
Loader::addLookupDirectory(APP_ROOT.DS.'othersLib');

// pa Escribite
Loader::addLookupDirectory(APP_ROOT.DS.'Escribite'.DS.'cls');
// <editor-fold desc="CONSTANTES">

require_once 'localhost.php';

// pa debuguear
define('DEBUGUEANDO', true);
define('ONTHEFLY', true);
define('GENERARLOG', true);
define('LOG_FOLDER', APP_ROOT.DS.'Logs');

// pa TEA
/** @noinspection SpellCheckingInspection */
define('ENCKEY', "tralalila");
// </editor-fold>

