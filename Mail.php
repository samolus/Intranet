<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Mail</title>
		<link href="bootstrap.Css" rel="stylesheet" type="text/css" media="all"/>
    </head>
    <body>
       <h1 >
			
					<?php
						$message="C'est la fête";
						if( mail('assoulinesamuel@gmail.com', 'Mon Sujet', $message))
						{
							echo "OUI";
						}
						else
						{
							echo "non";
						}
						?>
			
		</h1>
	</body>
</html>