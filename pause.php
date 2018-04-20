<!DOCTYPE html>
<html>
    <head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <title>session</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
		<?php
		$sAdressetest[]=" -a 172.217.20.36";
			foreach($sAdressetest as $sAdressetest){
			$aResulttest = Array();
			exec("arp".$sAdressetest, $aResulttest);
			echo "<pre>".print_r($aResulttest, true)."</pre>";
			}
		?>
	</body>
</html>