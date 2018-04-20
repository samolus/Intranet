<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	   <meta HTTP-EQUIV="Refresh" CONTENT="1; URL=name.php"> 
        <title>session</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
	<h1>
		<?php
    // On affiche les codes
			echo "Veuillez patienter";
			if(empty($_POST['adIp1']))
			{ 
				$_SESSION['Ip1']='0';
			}
			else
			{
				$_SESSION['Ip1']=$_POST['adIp1'] ;
			}
			if(empty($_POST['adIp2']))
			{ 
				$_SESSION['Ip2']='0';
			}
			else
			{
				$_SESSION['Ip2']=$_POST['adIp2'] ;
			}
			if(empty($_POST['adIp3']))
			{ 
				$_SESSION['Ip3']='0';
			}
			else
			{
			$_SESSION['Ip3']=$_POST['adIp3'] ;
			}
			if(empty($_POST['adIp4']))
			{ 
				$_SESSION['Ip4']='0';
			}
			else
			{
			$_SESSION['Ip4']=$_POST['adIp4'] ;
			}
			if(empty($_POST['adIp5']))
			{ 
				$_SESSION['Ip5']='0';
			}
			else
			{
			$_SESSION['Ip6']=$_POST['adIp6'] ;
			}
			if(empty($_POST['adIp6']))
			{ 
				$_SESSION['Ip6']='0';
			}
			else
			{
			$_SESSION['Ip6']=$_POST['adIp6'] ;
			}
			if(empty($_POST['adIp7']))
			{ 
				$_SESSION['Ip7']='0';
			}
			else
			{
			$_SESSION['Ip7']=$_POST['adIp7'] ;
			}
			if(empty($_POST['adIp8']))
			{ 
				$_SESSION['Ip8']='0';
			}
			else
			{
			$_SESSION['Ip8']=$_POST['adIp8'] ;
			}
			if(empty($_POST['adIp9']))
			{ 
				$_SESSION['Ip9']='0';
			}
			else
			{
			$_SESSION['Ip9']=$_POST['adIp9'] ;
			}
			if(empty($_POST['adIp10']))
			{ 
				$_SESSION['Ip10']='0';
			}
			else
			{
			$_SESSION['Ip10']=$_POST['adIp10'] ;
			}
			if(empty($_POST['adIp11']))
			{ 
				$_SESSION['Ip11']='0';
			}
			else
			{
			$_SESSION['Ip11']=$_POST['adIp11'] ;
			}
			if(empty($_POST['adIp12']))
			{ 
				$_SESSION['Ip12']='0';
			}
			else
			{
			$_SESSION['Ip12']=$_POST['adIp12'] ;
			}
			if(empty($_POST['adIp13']))
			{ 
				$_SESSION['Ip13']='0';
			}
			else
			{
			$_SESSION['Ip13']=$_POST['adIp13'] ;
			}
			if(empty($_POST['adIp14']))
			{ 
				$_SESSION['Ip14']='0';
			}
			else
			{
			$_SESSION['Ip14']=$_POST['adIp14'] ;
			}
			if(empty($_POST['adIp15']))
			{ 
				$_SESSION['Ip15']='0';
			}
			else
			{
			$_SESSION['Ip15']=$_POST['adIp15'] ;
			}
			if(empty($_POST['adIp16']))
			{ 
				$_SESSION['Ip16']='0';
			}
			else
			{
			$_SESSION['Ip16']=$_POST['adIp16'] ;
			}
			if(empty($_POST['adIp17']))
			{ 
				$_SESSION['Ip17']='0';
			}
			else
			{
			$_SESSION['Ip17']=$_POST['adIp17'] ;
			}
			if(empty($_POST['adIp18']))
			{ 
				$_SESSION['Ip18']='0';
			}
			else
			{
			$_SESSION['Ip18']=$_POST['adIp18'] ;
			}
			if(empty($_POST['adIp19']))
			{ 
				$_SESSION['Ip19']='0';
			}
			else
			{
			$_SESSION['Ip19']=$_POST['adIp19'] ;
			}
			if(empty($_POST['adIp20']))
			{ 
				$_SESSION['Ip20']='0';
			}
			else
			{
			$_SESSION['Ip20']=$_POST['adIp20'] ;
			}
			?>
		</h1>
		</body>
</html>