<?php
	session_start();
?>
<?php
ini_set("display_errors",0);error_reporting(0);
?>
<?php
if( !isset($_GET['refresh']) || !is_numeric($_GET['refresh'])){
	// si on accède depuis une autre page : remise a zéro
	$refresh = 0;
}
 else 
{
	$refresh = intval($_GET['refresh'])+1;
}	

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>PING</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
		<script type="text/javascript">
			window.setTimeout("window.location.href='ping.php?refresh=<?php echo $refresh; ?>'",60000); // delai en millisecondes
		</script>
    </head>
    <body>
		<h1 >
		PING</br></br></h1>
		<h2 >
		<?php
    // On affiche les codes
			
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
			$sAdressetest[]="www.google.com";
			foreach($sAdressetest as $sAdressetest){
			$aResulttest = Array();
			exec("ping ".$sAdressetest, $aResulttest);
			//echo "<pre>".print_r($aResulttest, true)."</pre>";
			}			
			foreach($sAdresse1 as $sAdresse1){
				$aResult1 = Array();
				exec("ping ".$sAdresse1, $aResult1);
			//echo "<pre>".print_r($aResult1, true)."</pre>";
				}
			foreach($sAdresse2 as $sAdresse2){
				$aResult2 = Array();
				exec("ping ".$sAdresse2, $aResult2);
				//echo "<pre>".print_r($aResult2, true)."</pre>";
				}
			foreach($sAdresse3 as $sAdresse3){
				$aResult3 = Array();
				exec("ping ".$sAdresse3, $aResult3);
				//echo "<pre>".print_r($aResult3, true)."</pre>";
				}
			foreach($sAdresse4 as $sAdresse4){
				$aResult4 = Array();
				exec("ping ".$sAdresse4, $aResult4);
				//echo "<pre>".print_r($aResult4, true)."</pre>";
				}
			foreach($sAdresse5 as $sAdresse5){
				$aResult5 = Array();
				exec("ping ".$sAdresse5, $aResult5);
				//echo "<pre>".print_r($aResult5, true)."</pre>";
				}
			foreach($sAdresse6 as $sAdresse6){
				$aResult6 = Array();
				exec("ping ".$sAdresse6, $aResult6);
				//echo "<pre>".print_r($aResult6, true)."</pre>";
				}
			foreach($sAdresse7 as $sAdresse7){
				$aResult7 = Array();
				exec("ping ".$sAdresse7, $aResult7);
				//echo "<pre>".print_r($aResult7, true)."</pre>";
				}
			foreach($sAdresse8 as $sAdresse8){
				$aResulthuit = Array();
				exec("ping ".$sAdresse8, $aResulthuit);
				//echo "<pre>".print_r($aResulthuit, true)."</pre>";
				}
			foreach($sAdresse9 as $sAdresse9){
				$aResult9 = Array();
				exec("ping ".$sAdresse9, $aResult9);
				//echo "<pre>".print_r($aResult9, true)."</pre>";
				}
			foreach($sAdresse10 as $sAdresse10){
				$aResult10 = Array();
				exec("ping ".$sAdresse10, $aResult10);
				//echo "<pre>".print_r($aResult10, true)."</pre>";
				}
			foreach($sAdresse11 as $sAdresse11){
				$aResult11 = Array();
				exec("ping ".$sAdresse11, $aResult11);
				//echo "<pre>".print_r($aResult11, true)."</pre>";
				}
			foreach($sAdresse12 as $sAdresse12){
				$aResult12 = Array();
				exec("ping ".$sAdresse12, $aResult12);
				//echo "<pre>".print_r($aResult12, true)."</pre>";
				}
			foreach($sAdresse13 as $sAdresse13){
				$aResult13 = Array();
				exec("ping ".$sAdresse13, $aResult13);
				//echo "<pre>".print_r($aResult13, true)."</pre>";
				}
			foreach($sAdresse14 as $sAdresse14){
				$aResult8 = Array();
				exec("ping ".$sAdresse14, $aResult14);
				//echo "<pre>".print_r($aResult14, true)."</pre>";
				}
			foreach($sAdresse15 as $sAdresse15){
				$aResult8 = Array();
				exec("ping ".$sAdresse15, $aResult15);
				//echo "<pre>".print_r($aResult15, true)."</pre>";
				}
			foreach($sAdresse16 as $sAdresse16){
				$aResult16 = Array();
				exec("ping ".$sAdresse16, $aResult16);
				//echo "<pre>".print_r($aResult16, true)."</pre>";
				}
			foreach($sAdresse17 as $sAdresse17){
				$aResult17 = Array();
				exec("ping ".$sAdresse17, $aResult17);
				//echo "<pre>".print_r($aResult17, true)."</pre>";
				}
			foreach($sAdresse18 as $sAdresse18){
				$aResult18 = Array();
				exec("ping ".$sAdresse18, $aResult18);
				//echo "<pre>".print_r($aResult18, true)."</pre>";
				}
			foreach($sAdresse19 as $sAdresse19){
				$aResult19 = Array();
				exec("ping ".$sAdresse19, $aResult19);
				//echo "<pre>".print_r($aResult19, true)."</pre>";
				}
			foreach($sAdresse20 as $sAdresse20){
				$aResult20 = Array();
				exec("ping ".$sAdresse20, $aResult20);
				//echo "<pre>".print_r($aResult20, true)."</pre>";
				}
			$aResulttest[8]  = iconv("CP850","UTF-8",$aResulttest[8]);
			$aResult1[8] =iconv("CP850","UTF-8",$aResult1[8]);
			$aResult2[8] =iconv("CP850","UTF-8",$aResult2[8]);
			$aResult3[8] =iconv("CP850","UTF-8",$aResult3[8]);
			$aResult4[8] =iconv("CP850","UTF-8",$aResult4[8]);
			$aResult5[8] =iconv("CP850","UTF-8",$aResult5[8]);
			$aResult6[8] =iconv("CP850","UTF-8",$aResult6[8]);
			$aResult7[8] =iconv("CP850","UTF-8",$aResult7[8]);
			$aResulthuit[8] =iconv("CP850","UTF-8",$aResulthuit[8]);
			$aResult9[8] =iconv("CP850","UTF-8",$aResult9[8]);
			$aResult10[8] =iconv("CP850","UTF-8",$aResult10[8]);
			$aResult11[8] =iconv("CP850","UTF-8",$aResult11[8]);
			$aResult12[8] =iconv("CP850","UTF-8",$aResult12[8]);
			$aResult13[8] =iconv("CP850","UTF-8",$aResult13[8]);
			$aResult14[8] =iconv("CP850","UTF-8",$aResult14[8]);
			$aResult15[8] =iconv("CP850","UTF-8",$aResult15[8]);
			$aResult16[8] =iconv("CP850","UTF-8",$aResult16[8]);
			$aResult17[8] =iconv("CP850","UTF-8",$aResult17[8]);
			$aResult18[8] =iconv("CP850","UTF-8",$aResult18[8]);
			$aResult19[8] =iconv("CP850","UTF-8",$aResult19[8]);
			$aResult20[8] =iconv("CP850","UTF-8",$aResult20[8]);
			// echo $aResult1[8]."</br>";
			// echo $aResult2[8]."</br>";
			// echo $aResult3[8]."</br>";
			// echo $aResult4[8]."</br>";
			// echo $aResult5[8]."</br>";
			// echo $aResult6[8]."</br>";
			// echo $aResult7[8]."</br>"; 
			// echo $aResulthuit[8]."</br>";
			// echo $aResult9[8]."</br>";
			// echo $aResult10[8]."</br>";
			// echo $aResult11[8]."</br>";
			// echo $aResult12[8]."</br>";
			// echo $aResult13[8]."</br>";
			// echo $aResult14[8]."</br>";
			// echo $aResult15[8]."</br>";
			// echo $aResult16[8]."</br>";
			// echo $aResult17[8]."</br>";
			// echo $aResult18[8]."</br>";
			// echo $aResult19[8]."</br>";
			// echo $aResult20[8]."</br>";
			//echo $aResulttest[8]."</br>";
			$a4paquets="Paquets : envoyés = 4, reçus = 0, perdus = 4 (perte 100%),";
			$a3paquets="Paquets : envoyés = 4, reçus = 1, perdus = 3 (perte 75%),";
			$a2paquets="Paquets : envoyés = 4, reçus = 2, perdus = 2 (perte 50%),";
			$a1paquets="Paquets : envoyés = 4, reçus = 3, perdus = 1 (perte 25%),";
			$a0paquets="Paquets : envoyés = 4, reçus = 4, perdus = 0 (perte 0%),";
			$nbResult1=strlen($aResult1[8]);
			$nbResult2=strlen($aResult2[8]);
			$nbResult3=strlen($aResult3[8]);
			$nbResult4=strlen($aResult4[8]);
			$nbResult5=strlen($aResult5[8]);
			$nbResult6=strlen($aResult6[8]);
			$nbResult7=strlen($aResult7[8]);
			$nbResult8=strlen($aResulthuit[8]);
			$nbResult9=strlen($aResult9[8]);
			$nbResult10=strlen($aResult10[8]);
			$nbResult11=strlen($aResult11[8]);
			$nbResult12=strlen($aResult12[8]);
			$nbResult13=strlen($aResult13[8]);
			$nbResult14=strlen($aResult14[8]);
			$nbResult15=strlen($aResult15[8]);
			$nbResult16=strlen($aResult16[8]);
			$nbResult17=strlen($aResult17[8]);
			$nbResult18=strlen($aResult18[8]);
			$nbResult19=strlen($aResult19[8]);
			$nbResult20=strlen($aResult20[8]);
			$nb4=strlen($a4paquets);
			$nb3=strlen($a3paquets);
			$nb2=strlen($a2paquets);
			$nb1=strlen($a1paquets);
			$nb0=strlen($a0paquets);

			?>
			<table>
				<tr>
				<td>
				<?php
				echo $_SESSION['host1'];
				echo '&nbsp;';
				if ((($nbResult1)-3)===($nb0+2))
						{
							echo  '<img src="vert.jpg" border="0" /></div> ';
						}
					elseif (($nbResult1)==$nb4+5)
						{
							echo '<img src="rouge.jpg" border="0" /></div> ';
						}
					elseif ($nbResult1==$nb3+5)
						{
							echo '<img src="orange.jpg" border="0" /></div> ';
						}
					elseif (($nbResult1-1)==$nb2+4)
						{
							echo '<img src="jaune.jpg" border="0" /></div> ';
						}
					elseif (($nbResult1-2)==$nb1+3)
						{
							echo '<img src="VertClaire.jpg" border="0" /></div> ';
						}
					else{
							echo'<img src="noir.jpg" border="0" /></div> ';
							}
					?></td><td><?php
				echo $_SESSION['host6'];
				echo '&nbsp;';
				if (($nbResult6-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult6==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult6==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult6-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult6-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host11'];
				echo '&nbsp;';
				if (($nbResult11-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult11==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult11==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult11-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult11-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host16'];
				echo '&nbsp;';
				if (($nbResult16-3)==$nb0+2)
					{
						echo '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult16==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult16==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult16-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult16-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td></tr><tr><td><?php
				echo $_SESSION['host2'];
				echo '&nbsp;';
				if (($nbResult2-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult2==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult2==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult2-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult2-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host7'];
				echo '&nbsp;';
				if (($nbResult7-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult7==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult7==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult7-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult7-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host12'];
				echo '&nbsp;';
				if (($nbResult12-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult12==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult12==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult12-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult12-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host17'];
				echo '&nbsp;';
				if (($nbResult17-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult17==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult17==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult17-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult17-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td></tr><tr><td><?php
				echo $_SESSION['host3'];
				echo '&nbsp;';
				if (($nbResult3-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult3==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult3==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult3-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult3-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host8'];
				echo '&nbsp;';
				if (($nbResult8-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult8==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult8==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult8-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult8-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host13'];
				echo '&nbsp;';
				if (($nbResult13-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult13==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult13==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult13-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult13-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host18'];
				echo '&nbsp;';
				if (($nbResult18-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult18==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult18==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult18-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult18-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td></tr><tr><td><?php
				echo $_SESSION['host4'];
				echo '&nbsp;';
				if (($nbResult4-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult4==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult4==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult4-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult4-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host9'];
				echo '&nbsp;';
				if (($nbResult9-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult9==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult9==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult9-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult9-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host14'];
				echo '&nbsp;';
				if (($nbResult14-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult14==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult14==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult14-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult14-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host19'];
				echo '&nbsp;';
				if (($nbResult19-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult19==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult19==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult19-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult19-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td></tr><tr><td><?php
				echo $_SESSION['host5'];
				echo '&nbsp;';
				if (($nbResult5-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult5==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult5==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult5-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult5-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host10'];
				echo '&nbsp;';
				if (($nbResult10-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div>&nbsp;&nbsp; ';
					}
					elseif ($nbResult10==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div>&nbsp;&nbsp; ';
					}
					elseif ($nbResult10==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div>&nbsp;&nbsp; ';
					}
					elseif (($nbResult10-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> &nbsp;&nbsp;';
					}
					elseif (($nbResult10-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div>&nbsp;&nbsp; ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> &nbsp;&nbsp;';
						}
				?></td><td><?php
				echo $_SESSION['host15'];
				echo '&nbsp;';
				if (($nbResult15-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult15==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult15==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult15-1)==$nb2+4)
					{
						echo '<img src="jaune.jpg" border="0" /></div> ';
					}
					elseif (($nbResult15-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
				?></td><td><?php
				echo $_SESSION['host20'];
				echo '&nbsp;';
				if (($nbResult20-3)==$nb0+2)
					{
						echo  '<img src="vert.jpg" border="0" /></div> ';
					}
					elseif ($nbResult20==$nb4+5)
					{
						echo '<img src="rouge.jpg" border="0" /></div> ';
					}
					elseif ($nbResult20==$nb3+5)
					{
						echo '<img src="orange.jpg" border="0" /></div> ';
					}
					elseif (($nbResult20-1)==$nb2+4)
					{
						echo ' ';
					}
					elseif (($nbResult20-2)==$nb1+3)
					{
						echo '<img src="VertClaire.jpg" border="0" /></div> ';
					}
					else
						{
						echo'<img src="noir.jpg" border="0" /></div> ';
						}
			
		 ?></td></tr>
		 </table></br></br>
		 <table>
			<tr>
				<td>
					100% reçu&nbsp;&nbsp;	
				</td><td>
					75% reçu&nbsp;&nbsp;	
				</td><td>
					50% reçu&nbsp;&nbsp;	
				</td><td>
					25% reçu&nbsp;&nbsp;	
				</td><td>
					0% reçu	&nbsp;&nbsp;
				</td><td>	
					Problème	
				</td>
			</tr>
				<td>
					<img src="vert.jpg" border="0" /></div>
				</td><td>
					<img src="VertClaire.jpg" border="0" /></div>
				</td><td>
					<img src="jaune.jpg" border="0" /></div>
				</td><td> 
					<img src="orange.jpg" border="0" /></div>
				</td><td> 
					<img src="rouge.jpg" border="0" /></div> 
				</td><td> 
					<img src="noir.jpg" border="0" /></div> 
				</td>
			</tr>
		</table></br>
			<form action="requete.php" method="post">
				<p>
				 <input type="hidden" name="var1" ></input>
				Voulez-vous voir la requête complète ?&nbsp;&nbsp;<input class="btn" type="submit" value="Valider" />
				</p>
			</form>
			<?php
			echo $refresh;
				if($refresh==5)
				{
					?> <meta HTTP-EQUIV="Refresh" CONTENT="0.1; URL=tempo.php"><?php
				}
				
			 ?>
		</h2>
		</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br><a href="menu.php"><input class="btn" type="submit" value="Menu"/></a><a href="formulaire.php">&nbsp;<input class="btn" type="submit" value="Déconnexion"/></a></br></br>
	</body>
</html>