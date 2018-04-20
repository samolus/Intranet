<!DOCTYPE html>
<?php
	session_start();
?>
<?php
ini_set("display_errors",0);error_reporting(0);
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <meta HTTP-EQUIV="Refresh" CONTENT="1; URL=ping.php"> 
        <title>host</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<h1>
		<?php
		echo "Veuillez patienter";
		if (gethostbyaddr($_SESSION['Ip1'])==$_SESSION['Ip1'])
		{
			$_SESSION['host1']="Résultat IP1";
		}
		else
		{
			$_SESSION['host1'] = gethostbyaddr($_SESSION['Ip1']);
		}
		if (gethostbyaddr($_SESSION['Ip2'])==$_SESSION['Ip2'])
		{
			$_SESSION['host2'] = "Résultat IP2";
		}
		else
		{
			$_SESSION['host2'] = gethostbyaddr($_SESSION['Ip2']);
		}
		if (gethostbyaddr($_SESSION['Ip3'])==$_SESSION['Ip3'])
		{
			$_SESSION['host3'] = "Résultat IP3";
		}
		else
		{
			$_SESSION['host3'] = gethostbyaddr($_SESSION['Ip3']);
		}
		if (gethostbyaddr($_SESSION['Ip4'])==$_SESSION['Ip4'])
		{
			$_SESSION['host4'] = "Résultat IP4";
		}
		else
		{
			$_SESSION['host4'] = gethostbyaddr($_SESSION['Ip4']);
		}
		if (gethostbyaddr($_SESSION['Ip5'])==$_SESSION['Ip5'])
		{
			$_SESSION['host5'] = "Résultat IP5";
		}
		else
		{
			$_SESSION['host5'] = gethostbyaddr($_SESSION['Ip5']);
		}
		if (gethostbyaddr($_SESSION['Ip6'])==$_SESSION['Ip6'])
		{
			$_SESSION['host6'] = "Résultat IP6";
		}
		else
		{
			$_SESSION['host6'] = gethostbyaddr($_SESSION['Ip6']);
		}
		if (gethostbyaddr($_SESSION['Ip7'])==$_SESSION['Ip7'])
		{
			$_SESSION['host7'] = "Résultat IP7";
		}
		else
		{
			$_SESSION['host7'] = gethostbyaddr($_SESSION['Ip7']);
		}
		if (gethostbyaddr($_SESSION['Ip8'])==$_SESSION['Ip8'])
		{
			$_SESSION['host8'] = "Résultat IP8";
		}
		else
		{
			$_SESSION['host8'] = gethostbyaddr($_SESSION['Ip8']);
		}
		if (gethostbyaddr($_SESSION['Ip9'])==$_SESSION['Ip9'])
		{
			$_SESSION['host9'] = "Résultat IP9";
		}
		else
		{
			$_SESSION['host9'] = gethostbyaddr($_SESSION['Ip9']);
		}
		if (gethostbyaddr($_SESSION['Ip10'])==$_SESSION['Ip10'])
		{
			$_SESSION['host10'] = "Résultat IP10";
		}
		else
		{
			$_SESSION['host10'] = gethostbyaddr($_SESSION['Ip10']);
		}
		if (gethostbyaddr($_SESSION['Ip11'])==$_SESSION['Ip11'])
		{
			$_SESSION['host11'] = "Résultat IP11";
		}
		else
		{
			$_SESSION['host11'] = gethostbyaddr($_SESSION['Ip11']);
		}
		if (gethostbyaddr($_SESSION['Ip12'])==$_SESSION['Ip12'])
		{
			$_SESSION['host12'] = "Résultat IP12";
		}
		else
		{
			$_SESSION['host12'] = gethostbyaddr($_SESSION['Ip12']);
		}
		if (gethostbyaddr($_SESSION['Ip13'])==$_SESSION['Ip13'])
		{
			$_SESSION['host13'] = "Résultat IP13";
		}
		else
		{
			$_SESSION['host13'] = gethostbyaddr($_SESSION['Ip13']);
		}
		if (gethostbyaddr($_SESSION['Ip14'])==$_SESSION['Ip14'])
		{
			$_SESSION['host14'] = "Résultat IP14";
		}
		else
		{
			$_SESSION['host14'] = gethostbyaddr($_SESSION['Ip14']);
		}
		if (gethostbyaddr($_SESSION['Ip15'])==$_SESSION['Ip15'])
		{
			$_SESSION['host15'] = "Résultat IP15";
		}
		else
		{
			$_SESSION['host15'] = gethostbyaddr($_SESSION['Ip15']);
		}
		if (gethostbyaddr($_SESSION['Ip16'])==$_SESSION['Ip16'])
		{
			$_SESSION['host16'] = "Résultat IP16";
		}
		else
		{
			$_SESSION['host16'] = gethostbyaddr($_SESSION['Ip16']);
		}
		if (gethostbyaddr($_SESSION['Ip17'])==$_SESSION['Ip17'])
		{
			$_SESSION['host17'] = "Résultat IP17";
		}
		else
		{
			$_SESSION['host17'] = gethostbyaddr($_SESSION['Ip17']);
		}
		if (gethostbyaddr($_SESSION['Ip18'])==$_SESSION['Ip18'])
		{
			$_SESSION['host18'] = "Résultat IP18";
		}
		else
		{
			$_SESSION['host18'] = gethostbyaddr($_SESSION['Ip18']);
		}
		if (gethostbyaddr($_SESSION['Ip19'])==$_SESSION['Ip19'])
		{
			$_SESSION['host19'] = "Résultat IP19";
		}
		else
		{
			$_SESSION['host19'] = gethostbyaddr($_SESSION['Ip19']);
		}
		if (gethostbyaddr($_SESSION['Ip20'])==$_SESSION['Ip20'])
		{
			$_SESSION['host20'] = "Résultat IP20";
		}
		else
		{
			$_SESSION['host20'] = gethostbyaddr($_SESSION['Ip20']);
		}
		?>
	</h1>
	</body>
</html>