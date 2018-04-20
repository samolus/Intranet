<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>test</title>
		<link href="Intra.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<?php
		$_SESSION['Ip1']=$_POST['adIp1'] ;
		$_SESSION['Ip2']=$_POST['adIp2'] ;
		$_SESSION['Ip3']=$_POST['adIp3'] ;
		$_SESSION['Ip4']=$_POST['adIp4'] ;
		$_SESSION['Ip5']=$_POST['adIp5'] ;
		$_SESSION['Ip6']=$_POST['adIp6'] ;
		$_SESSION['Ip7']=$_POST['adIp7'] ;
		$_SESSION['Ip8']=$_POST['adIp8'] ;
		$_SESSION['Ip9']=$_POST['adIp9'] ;
		$_SESSION['Ip10']=$_POST['adIp10'] ;
		$_SESSION['Ip11']=$_POST['adIp11'] ;
		$_SESSION['Ip12']=$_POST['adIp12'] ;
		$_SESSION['Ip13']=$_POST['adIp13'] ;
		$_SESSION['Ip14']=$_POST['adIp14'] ;
		$_SESSION['Ip15']=$_POST['adIp15'] ;
		$_SESSION['Ip16']=$_POST['adIp16'] ;
		$_SESSION['Ip17']=$_POST['adIp17'] ;
		$_SESSION['Ip18']=$_POST['adIp18'] ;
		$_SESSION['Ip19']=$_POST['adIp19'] ;
		$_SESSION['Ip20']=$_POST['adIp20'] ;
		foreach($_SESSION as $_SESSION){
			$aResult = Array();
			exec("ping ".$_SESSION, $aResult);
			echo "<pre>".print_r($aResult, true)."</pre>";
			}