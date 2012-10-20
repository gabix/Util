<?php
/******************
 * User: gabix    *
 * Date: 20/10/12 *
 * Time: 02:26    *
 ******************/

require_once 'miLib'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'init.php';

$pagTitle = "templatePaUtil";
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?= "<title>$pagTitle</title>\n" ?>
    <link rel="stylesheet" type="text/css" href="othersLib/bootstrap.css" />
    <style>
        #barraLateral {
            text-align: center;
        }

        #contenido {
            text-align: left;
        }

        .textCenter {
            text-align: center;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">

        <div id="barraLateral" class="span2 well well-small">
            <h3>Hola!</h3>
            <p>soy una barra...</p>
            <p>...supuestamente</p>
        </div>

        <div id="contenido" class="span10 well">
            <h1 class="textCenter"><?= $pagTitle ?></h1>
            <hr />

        </div>
    </div>
</div>

<?= ((DEBUGUEANDO)? Debuguie::PrintMsgs() : null); ?>

<script type="text/javascript" src="othersLib/jquery.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>