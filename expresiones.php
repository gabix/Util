<?php
require_once 'miLib'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'init.php';

$pagTitle = "evaluador de RegularExp";
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?= "<title>$pagTitle</title>\n" ?>
    <link rel="stylesheet" type="text/css" href="othersLib/bootstrap.css" />
    <style>
        #contenido {text-align: left;}
        .textCenter {text-align: center;}
        .v {color: darkseagreen;}
        .r {color: coral;}
        .m {color: blue;}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div id="contenido" class="span12">
            <h1 class="textCenter"><?= $pagTitle ?></h1>
            <hr />

            <form method="post">
                <input type="text" name="caca" value="<?= (isset($_POST['caca'])? $_POST['caca'] : "lalalalalal") ?>" />
                <input type="submit" />
            </form>


            <?php
            if (isset($_POST['caca'])) {
                $p = $_POST['caca'];
                $exp = '/(<([^>]+)>)/'; //strip tags from html
                //$exp = '#^([0-9a-zA-Z\-_]{1,})$#'; //letras + - o _
                //$exp = '#^([0-9\(\)\/\+ \-\*]{1,})$#'; //teléfono
                ?>
                <hr />
                <span class="m">tipeaste =</span> <?= $p ?><br />
                <span class="m">La exp es=</span> <?= $exp ?><br />
                <?php $rta = preg_match($exp, $p); ?>
                <span class="m">rta a pregmatch=</span><?= $rta ?><br />
                <span class="m">if ($rta != 0) {</span> <?php if ($rta != 0) { ?><br />
                    <span class="m">    echo pas&oacute;=</span> <?= '<span class="v">pas&oacute;</span>' ?><br />
                    <?php } else { ?>
                    <span class="m">    echo no pas&oacute;=</span> <?= '<span class="r">no pas&oacute;</span>' ?><br />
                    <span class="m">}</span> <?php } ?>
                <?php
            } else { ?>
                <span class="m">no issete&oacute; nah!</span>
                <?php
            }
            ?>
                
            <p>expr de php para mail: <?= FILTER_VALIDATE_EMAIL ?></p>
        </div>
    </div>
</div>

<?= ((DEBUGUEANDO)? Debuguie::PrintMsgs() : null); ?>

<script type="text/javascript" src="othersLib/jquery.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>