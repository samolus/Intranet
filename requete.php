﻿<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	   <meta HTTP-EQUIV="Refresh" CONTENT="60; URL=requete.php"> 
        <title>Requête complète</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<h1 >
		Requête complète</h1>
		<h2 >
		Il faut un attendre un peu avant que toute les requêtes s'affichent</br></br>
		<?php
			$sAdresse1[] = $_SESSION['Ip1'];
			$sAdresse2[] = $_SESSION['Ip2'];
			$sAdresse3[] = $_SESSION['Ip3'];
			$sAdresse4[] = $_SESSION['Ip4'];
			$sAdresse5[] = $_SESSION['Ip5'];
			$sAdresse6[] = $_SESSION['Ip6'];
			$sAdresse7[] = $_SESSION['Ip7'];
			$sAdresse8[] = $_SESSION['Ip8'];
			$sAdresse9[] = $_SESSION['Ip9'];
			$sAdresse10[] = $_SESSION['Ip10'];
			$sAdresse11[] = $_SESSION['Ip11'];
			$sAdresse12[] = $_SESSION['Ip12'];
			$sAdresse13[] = $_SESSION['Ip13'];
			$sAdresse14[] = $_SESSION['Ip14'];
			$sAdresse15[] = $_SESSION['Ip15'];
			$sAdresse16[] = $_SESSION['Ip16'];
			$sAdresse17[] = $_SESSION['Ip17'];
			$sAdresse18[] = $_SESSION['Ip18'];
			$sAdresse19[] = $_SESSION['Ip19'];
			$sAdresse20[] = $_SESSION['Ip20'];
			?>
			<table>
				<tr>
				<td>
				<?php echo $_SESSION['host1'];
				echo ':';
				echo '&nbsp;';
				?>
				</td><td>
				<?php
			foreach($sAdresse1 as $sAdresse1){
				$aResult1 = Array();
				exec("ping ".$sAdresse1, $aResult1);
				echo "<pre>".print_r($aResult1, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 2 :
				</td><td>
				<?php
			foreach($sAdresse2 as $sAdresse2){
				$aResult2 = Array();
				exec("ping ".$sAdresse2, $aResult2);
				echo "<pre>".print_r($aResult2, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 3 :
				</td><td>
				<?php
			foreach($sAdresse3 as $sAdresse3){
				$aResult3 = Array();
				exec("ping ".$sAdresse3, $aResult3);
				echo "<pre>".print_r($aResult3, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 4 :
				</td><td>
				<?php
			foreach($sAdresse4 as $sAdresse4){
				$aResult4 = Array();
				exec("ping ".$sAdresse4, $aResult4);
				echo "<pre>".print_r($aResult4, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 5 :
				</td><td>
				<?php
			foreach($sAdresse5 as $sAdresse5){
				$aResult5 = Array();
				exec("ping ".$sAdresse5, $aResult5);
				echo "<pre>".print_r($aResult5, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 6 :
				</td><td>
				<?php
			foreach($sAdresse6 as $sAdresse6){
				$aResult6 = Array();
				exec("ping ".$sAdresse6, $aResult6);
				echo "<pre>".print_r($aResult6, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 7 :
				</td><td>
				<?php
			foreach($sAdresse7 as $sAdresse7){
				$aResult7 = Array();
				exec("ping ".$sAdresse7, $aResult7);
				echo "<pre>".print_r($aResult7, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 8 :
				</td><td>
				<?php
			foreach($sAdresse8 as $sAdresse8){
				$aResult8 = Array();
				exec("ping ".$sAdresse8, $aResult8);
				echo "<pre>".print_r($aResult8, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 9 :
				</td><td>
				<?php
			foreach($sAdresse9 as $sAdresse9){
				$aResult9 = Array();
				exec("ping ".$sAdresse9, $aResult9);
				echo "<pre>".print_r($aResult9, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 10 :
				</td><td>
				<?php
			foreach($sAdresse10 as $sAdresse10){
				$aResult10 = Array();
				exec("ping ".$sAdresse10, $aResult10);
				echo "<pre>".print_r($aResult10, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 11 :
				</td><td>
				<?php
			foreach($sAdresse11 as $sAdresse11){
				$aResult11 = Array();
				exec("ping ".$sAdresse11, $aResult11);
				echo "<pre>".print_r($aResult11, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 12 :
				</td><td>
				<?php
			foreach($sAdresse12 as $sAdresse12){
				$aResult12 = Array();
				exec("ping ".$sAdresse12, $aResult12);
				echo "<pre>".print_r($aResult12, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 13 :
				</td><td>
				<?php
			foreach($sAdresse13 as $sAdresse13){
				$aResult13 = Array();
				exec("ping ".$sAdresse13, $aResult13);
				echo "<pre>".print_r($aResult13, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 14 :
				</td><td>
				<?php
			foreach($sAdresse14 as $sAdresse14){
				$aResult8 = Array();
				exec("ping ".$sAdresse14, $aResult14);
				echo "<pre>".print_r($aResult14, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 15 :
				</td><td>
				<?php
			foreach($sAdresse15 as $sAdresse15){
				$aResult8 = Array();
				exec("ping ".$sAdresse15, $aResult15);
				echo "<pre>".print_r($aResult15, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 16 :
				</td><td>
				<?php
			foreach($sAdresse16 as $sAdresse16){
				$aResult16 = Array();
				exec("ping ".$sAdresse16, $aResult16);
				echo "<pre>".print_r($aResult16, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 17 :
				</td><td>
				<?php
			foreach($sAdresse17 as $sAdresse17){
				$aResult17 = Array();
				exec("ping ".$sAdresse17, $aResult17);
				echo "<pre>".print_r($aResult17, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 18 :
				</td><td>
				<?php
			foreach($sAdresse18 as $sAdresse18){
				$aResult18 = Array();
				exec("ping ".$sAdresse18, $aResult18);
				echo "<pre>".print_r($aResult18, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 19 :
				</td><td>
				<?php
			foreach($sAdresse19 as $sAdresse19){
				$aResult19 = Array();
				exec("ping ".$sAdresse19, $aResult19);
				echo "<pre>".print_r($aResult19, true)."</pre>";
				}
				?>
				</td>
				</tr>
				<tr>
				<td>
				Requête 20 :
				</td><td>
				<?php
			foreach($sAdresse20 as $sAdresse20){
				$aResult20 = Array();
				exec("ping ".$sAdresse20, $aResult20);
				echo "<pre>".print_r($aResult20, true)."</pre>";
				}
				?>
				</td>
				</tr>
			</table>	
		</h2>
		<a href="menu.php"><input class="btn" type="submit" value="Menu"/></a><a href="formulaire.php">&nbsp;<input class="btn" type="submit" value="Déconnexion"/></a></br></br>
	</body>
</html>