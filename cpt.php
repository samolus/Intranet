<?php
if( !isset($_GET['refresh']) || !is_numeric($_GET['refresh'])) {
	// si on accède depuis une autre page : remise a zéro
	$refresh = 1;
} else {
	$refresh = intval($_GET['refresh'])+1;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>compteur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript">
	window.setTimeout("window.location.href='cpt.php?refresh=<?php echo $refresh; ?>'",60000); // delai en millisecondes
</script>
</head>
<body>
<h1>
	<?php 
		if ($refresh==5)
			$refresh=0;
			if
	?>
<h1>
</body>
</html>