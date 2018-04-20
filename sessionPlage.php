<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	   <meta HTTP-EQUIV="Refresh" CONTENT="0.1; URL=explose.php"> 
        <title>session</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<h1 >
		<?php
			echo "Veuillez patienter";
			$_SESSION['Deb']=$_POST['Deb'];
			$_SESSION['Fin']=$_POST['Fin'];
			?>
			</h1>
		</body>
</html>