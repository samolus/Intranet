<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Résaux</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
       <h1 >
			<?php 
				$aff="196.17.100.0";
				$AdresseExplo=explode(".",$aff);
				$Conv3=intval($AdresseExplo[3]);
				$Conv2=intval($AdresseExplo[2]);
				$Conv1=intval($AdresseExplo[1]);
				$Conv0=intval($AdresseExplo[0]);
				for($i=1;$i<=255;$i++)
				{
					$Conv3++;
					$AdresseRecompo[$i]=$Conv0.".".$Conv1.".".$Conv2.".".$Conv3;
					echo (gethostbyname($AdresseRecompo[$i]));?></br><?php
				} ?>
		</h1>
	</body>
</html>