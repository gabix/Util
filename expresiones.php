<?php

function echoConP($s) {
    echo "<p>$s</p>";
}
?>
<style>
    .v {color: darkseagreen;}
    .r {color: coral;}
    .m {color: blue;}
</style>
<form method="post">
    <input type="text" name="caca" value="<?= (isset($_POST['caca'])? $_POST['caca'] : "lalalalalal") ?>" />
    <input type="submit" />
</form>
<?php
if (isset($_POST['caca'])) {
    $p = $_POST['caca'];
    $exp = '/(<([^>]+)>)/ig'; //strip tags from html
    //$exp = '#^([0-9a-zA-Z\-_]{1,})$#'; //letras + - o _
    //$exp = '#^([0-9\(\)\/\+ \-\*]{1,})$#'; //teléfono
    ?>
    <hr />
    <span class="m">tipeaste =</span> <?= $p ?><br />
    <span class="m">La exp es=</span> <?= $exp ?><br />
    <?php $rta = preg_match($exp, $p); ?>
    <span class="m">rta a pregmatch=</span><?= $rta ?><br />
    <span class="m">if ($rta != 0) {</span> <?php if ($rta != 0) { ?><br />
    <span class="m">    echo paso=</span> <?= '<span class="v">paso</span>' ?><br />
    <?php } else { ?>
    <span class="m">    echo no paso=</span> <?= '<span class="r">no paso</span>' ?><br />
    <span class="m">}</span> <?php } ?>
    <?php
} else { ?>
    <span class="m">no isseteo nah!</span>
<?php
}
?>