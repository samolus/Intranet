<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Résaux</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "Samuel") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
       <h1 >Que voulez vous faire ?</h1>
			
			<h2 >
				<p><a href="adresseIP.php"><input class="btn" type="submit" value="Faire un Ping"/></a> </p>
				<p><a href="plage.php"><input class="btn" type="submit" value="Ping sur une plage d'adresse"/></a></p>
				<p><a href="ipVersNom.php"><input class="btn" type="submit" value="Connaître le nom netBIOS grâce à son adresse IP"/> </a></p>
				<p><a href="nomVersIp.php"><input class="btn" type="submit" value="Connaître l'adresse IP grâce à son nom netBIOS"/> </a></p>
				<p><a href="formulaire.php"><input class="btn" type="submit" value="Déconnexion"/> </a></p>
			</h2>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<h1 class="titrePage"> <p>Mot de passe incorrect</p> </h1>';?>
		<p><a href="formulaire.php"><input class="btn" type="submit" value="Retour"/> </a></p><?php
    }
    ?>
    </body>
</html>