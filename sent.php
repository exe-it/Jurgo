<?php
	session_start();

	if(!isset($_SESSION['confirmed']))
	{
		header('Location: index.php');
	}
	?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>JURGO Sp. z o.o.</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Wynajem i sprzedaż rusztowań, szalunków i ogrodzeń" />
	<meta name="keywords" content="rusztowania, szalunki, ogrodzenia, sprzedaż rusztowań, wynajem rusztowań, rusztowania warmia, szalunki, rusztowania olsztyn" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
	<div class="confirm_bg">
		<div class="confirm col-10 height">
			<?php
				if(isset($_SESSION['confirmed']))
				{
					echo $_SESSION['confirmed'].'<br />';
					unset($_SESSION['confirmed']);
				}			
			?>
			<form>
				<input id="submit" type="submit" value="POWRÓT">
			</form>
		</div>
	</div>
</body>
</html>
