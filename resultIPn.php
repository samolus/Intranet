<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Résultat</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<h1>Connaître l'adresse IP grâce à son nom netBIOS</h1>
			<h2>
				<?php
					echo "Voici l'adresse IP de ";
					echo $_POST['NetversIP'];
				?></br>
				<textarea name="truc"><?php echo (gethostbyname($_POST['NetversIP'])); ?></textarea></br>
				Si vous voyez le nom netBIOS affiché alors il est erroné.
			</h2>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
		<a href="NomVersIp.php"><input class="btn" type="submit" value="Changer de nom NetBIOS"/></a>
		<a href="menu.php">&nbsp;<input class="btn" type="submit" value="Menu"/></a>
		<a href="formulaire.php">&nbsp;<input class="btn" type="submit" value="Déconnexion"/></a>
	</body>
</html>