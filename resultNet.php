<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Résultat</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<h1>Connaître le nom netBIOS grâce à son adresse IP</h1></br>
			<h2>
				<textarea name="machin"><?php echo (gethostbyaddr($_POST['IpLoc'])); ?></textarea></br></br>
				Si le résultat retourné est l'adresse Ip entré alors vous n'avez pas donné une adresse Ip locale.</br>
				Si le résultat est "FALSE" alors l'adresse Ip n'est pas valide.
			</h2>
	</body>
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		<a href="IpVersNom.php"><input class="btn" type="submit" value="Changer d'IP"/></a>
		<a href="menu.php">&nbsp;<input class="btn" type="submit" value="Menu"/></a>
		<a href="formulaire.php">&nbsp;<input class="btn" type="submit" value="Déconnexion"/></a>
</html>