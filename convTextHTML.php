<?php
$enCodigo = "";
$tessto = "convertime esta mama";

if((isset($_POST["tessto"])) != "") {
	$tessto = $_POST["tessto"];

	$preTesstoArr = str_split($tessto);
	$paCod = "";

	for($i = 0; $i < count($preTesstoArr); $i++) {
		$agreg = "";

		switch($preTesstoArr[$i]) {
			case "\n":
				if ($_POST["p"] != "") {
					$agreg = "&lt;" . "/p" . "&gt;" . "\n";
					$agreg .= "&lt;" . "p" . "&gt;";
				} else {
					$agreg = "&lt;" . "br /" . "&gt;" . "\n";
				}
				break;

			case "\r":
				$agreg = "";
				break;
                        
			default:
				$ent = htmlentities($preTesstoArr[$i]);
				if ($ent[0] == "&") {
					$ent[0] = ";";
					$agreg = "&amp" . $ent;
                                } elseif ($ent == '"') {
                                        $agreg = "&#34;";
                                } elseif ($ent == '’') {
                                        $agreg = '&#8217;';
                                } elseif ($ent == '‘') {
                                        $agreg = '&#8216;';
                                } elseif ($ent == '“') {
                                        $agreg = '&#8220;';
                                } elseif ($ent == '”') {
                                        $agreg = '&#8221';
				} else {
					$agreg = $ent;
				}
				break;
		}

		$paCod .= $agreg;
	}

	if ($_POST["p"] != "") {
		$enCodigo = "&lt;" . "p" . "&gt;" . $paCod . "&lt;" . "/p" . "&gt;" . "\n";
	} else {
		$enCodigo = $paCod;
	}
} else {
	$enCodigo = "caca";
}
?>
<html>
<head>
	<title>Conversor de texto win a HTML</title>
</head>
<body style="text-align: center;">

	<h1>Conversor de texto win a HTML</h1>
	<hr />

	<form method="post" action="convTextHTML.php">
		<h3>El tessto a convertir:</h3>
		<textarea name="tessto" cols="80" rows="20"><?php echo($tessto); ?></textarea>
		<br />

        <label><input type="checkbox" name="p" value="p" size="25px" />Con &lt;p&gt;</label>
		<input type="submit" value="convertime" name="convertime" style="margin: 0 0 0 50px;" />
	</form>

	<hr />
	<h3>El tessto a convertido:</h3>
	<textarea name="tesstoConv" cols="80" rows="20"><?php echo($enCodigo); ?></textarea>
	<br />

	<hr />
        <h3>El tessto a convertido probado</h3>
        <hr />
	<?php echo($enCodigo); ?>
	<br />

</body>
</html>