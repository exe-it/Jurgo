<?php
session_start();

if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$tel=$_POST['tel'];
	$msg=$_POST['msg'];
	$msg=htmlspecialchars($msg);
	$all_ok=true;
	$headers="From: ".$mail;
	
	if((strlen($name)<3)||(strlen($name)>20))
	{
		$all_ok=false;
		$_SESSION['e_name']="Nazwa powinna zawierać od 3 do 20 znaków";
	}
	
	if(!preg_match("/^[a-zA-Z0-9 ]*$/",$name))
	{
		$all_ok=false;
		$_SESSION['e_name']="Nazwa musi zawierać tylko alfanumeryczne znaki";
	}
	
	if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
	{
		$all_ok=false;
		$_SESSION['e_mail']="Nieprawidłowy adres E-Mail";
	}
	
	if(!preg_match("/^(\+[\d]{2})*([\d]{9})/",$tel))
	{
		$all_ok=false;
		$_SESSION['e_tel']="Numer telefonu powinien zawierać 9 cyfr bez odstępów np. 123456789";
	}
	
	if($all_ok==true)
	{
		$_SESSION['confirmed']='WIADOMOŚĆ WYSŁANA POPRAWNIE.  DZIĘKUJEMY !!!';
		$to='biuro@rusztowania-jurgo.pl';
		$subject='Kontakt ze strony www - Zapytanie od '.$name;
		$message=$name." Pisze: \n".$msg."\n\n"."Kontakt do ".$name.":"."\n"."E-mail: ".$mail."\n"."Telefon: ".$tel;
		if (mail($to, $subject, $message, $headers))
		{
			header('Location: sent.php');
		}
		else
		{
			echo "NG";exit();
		}
	}
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>JURGO Sp. z o.o. wynajem i sprzedaż rusztowań</title>
	
	<meta charset="utf-8" />
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Wynajem i sprzedaż rusztowań, szalunków oraz ogrodzeń" />
	<meta name="keywords" content="rusztowania,szalunki,ogrodzenia,sprzedaż rusztowań,sprzedaz rusztowan,wynajem rusztowan,wynajem rusztowań,wynajem rusztowan warmia i mazury,wynajem ogorodzeń,rusztowania olsztyn,rusztowania elblag,rusztowania malbork,wynajem ogrodzen,rusztowania warmia,szalunki,rusztowania olsztyn" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	<link href="/img/favicon.png" rel="shortcut icon" type="image/png" />
	
	<script src="jquery-3.3.1.min.js"></script>
	<script src="extras.js"></script>
	
</head>
<body>
	<div id="home" class="cont col-12">
		<div class="open_menu ver_flex col-12">		
			<div class="spec_offert main_tile_res col-12">
				<div class="title_res clear_up">OFERTA SPECJALNA</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>
			<div class="rent main_tile_res col-12">
				<div class="quick_desc clear_down">
					<p><h4>RUSZTOWANIA</p>
					<p>OGRODZENIA</p>
					<p>SZALUNKI</p>
					<p>KONTENERY</p>
					<p>ZSYPY</h4></p>
					<p>ZAPEWNIAMY OBSŁUGĘ W ZAKRESIE:</p>
					<p>doradztwa technicznego,<br />
					projektowania,<br />
					montażu i demontażu rusztowań,<br />
					uziemienia rusztowania</p>
				</div>
				<div class="title_res clear_up">WYNAJEM</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>
			<div class="sell main_tile_res col-12">
				<div class="quick_desc clear_down">
					<p><h4>RUSZTOWANIA</p>
					<p>OGRODZENIA</h4></p>
					<p>Doradzimy i przygotujemy<br />
					zestaw dostosowany<br />
					do Twoich potrzeb.</p>
					<p>Posiadamy w ofercie sprzęt<br />
					nowy oraz używany.</p>
				</div>
				<div class="title_res clear_up">SPRZEDAŻ</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>
			<div class="we main_tile_res col-12">
				<div class="title_res clear_up">KONTAKT</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>
			<div class="navbar">
				<div class="quickcontact col-12 quick_res">
					<div class="l_topbar col-10">
						<i class="icon-phone"></i> 513 551 801 | <a href="mailto:biuro@rusztowania.olsztyn.pl"><i class="icon-mail-alt"></i>  biuro@rusztowania.olsztyn.pl</a>
					</div>
					<div class="r_topbar col-2">
						<div class="clear_down"><a href="https://www.facebook.com/jurgo.rusztowanie/" target="_blank">Znajdź Nas na <i class="icon-facebook"></i>Facebook</a></div>
						<div class="clear_up"><a href="https://www.facebook.com/jurgo.rusztowanie/" target="_blank"><i class="icon-facebook"></i>Facebook</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="back-button">
			<div class="back-button-border"></div>
			<div class="arrow-wrap">
					<div class="arrow arrow-up"></div>
					<div class="arrow arrow-down"></div>
			</div>
		</div>
		<div class="flashbox">
			<div class="flash_desc"></div>
			<div class="flash_gall">
				<div class="flash_pic"></div>
				<div class="flash_pic"></div>
				<div class="flash_pic"></div>
				<div class="flash_pic"></div>
			</div>
		</div>
	</div>	
	<div class="open_cont clear_down">
		<div class="menu_cont">
			<h3>OFERTA SPECJALNA</h3>
		</div>
		<div class="menu_cont">
			<h3>WYNAJEM</h3>
		</div>
		<div class="menu_cont">
			<h3>SPRZEDAŻ</h3>
		</div>
		<div class="menu_cont">
			<h3>KONTAKT</h3>
		</div>
	</div>
	<div class="spec_offert_desc col-12">
		<div class="spec_offert_tile col-12">
			<div class="pic_spec_offert_tile pic_spec_offert_tile_res"></div>
			<div class="desc_spec_offert_tile desc_spec_offert_tile_res">
				<h3>WYNAJEM RUSZTOWAŃ - ELBLĄG</h3>
				Mega promocja na wynajem rusztowań w Elblągu - <b>już od 0,20 zł netto za m2 (roboczy)</b>.<br />
				Promocja obejmuje wynajmy powyżej 120 m2 (roboczych).<br />
				Zadzwoń <b>501 288 265</b> lub <b>513 551 805</b> i sprawdź szczegóły.
			</div>
		</div>
		<div class="spec_offert_tile col-12">
			<div class="pic_spec_offert_tile pic_spec_offert_tile_res"></div>
			<div class="desc_spec_offert_tile desc_spec_offert_tile_res">
				<h3>RUSZTOWANIE ALUMINIOWE - JEZDNE</h3>
				Rusztowanie aluminiowe jezdne ze schodnią - 7,4m.<br />
				<b><u>CENA PROMOCYJNA: 7 400,00 zł netto.</u></b><br />
				Zadzwoń <b>510 396 538</b> i sprawdź szczegóły.
			</div>
		</div>
		<div class="spec_offert_tile col-12">
			<div class="pic_spec_offert_tile pic_spec_offert_tile_res"></div>
			<div class="desc_spec_offert_tile desc_spec_offert_tile_res">
				<h3>KONTENERY SOCJALNE</h3>
				Kontenery socjalne o wymiarach - ... x ... m.<br />
				<b><u>CENA PROMOCYJNA: ......,.. zł netto.</u></b><br />
				Zadzwoń <b>510 396 538</b> i sprawdź szczegóły.<br />
			</div>
		</div>
	</div>
	<div class="rent_desc col-12">
		<div class="rent_tile ver_flex">
			<div class="desc_rent_tile font_two_five_res">
				W ofercie posiadamy:
				<ul>
					<li><b>Rusztowania</b><br />
						<ul>
							<li>Ramowe</li>
							<li>Modułowe</li>
							<li>Przejezdne (praca do 14 m)</li>
							<li>Warszawskie</li>
							<li>Podwieszane</li>
						</ul>
					</li>
					<li><b>Ogrodzenia budowlane oraz eventowe</b></li>
					<li><b>Szalunki stropowe</b></li>
					<li><b>Kontenery socjalne</b></li>
					<li><b>Zsypy do gruzu</b></li>
				</ul>
				Oferowane przez naszą firmę narzędzia posiadają wymagane certyfikaty i wykonane są zgodnie z europejskimi normami.
				Wykwalifikowana kadra gwarantuje wysoką jakość prowadzonych robót, a elastyczność i indywidualne podejście do klienta są głównymi atutami świadczonych przez nas usług.
			</div>
			<div id="offert" class="desc_rent_tile font_two_five_res">
				<h2>ZŁÓŻ ZAPYTANIE</h2>
				<form class="col-12 font_two_five_res" method="post">
					<input class="font_two_five_res" type="text" name="name" placeholder="Imię/Nazwa Firmy" onfocus="this.placeholder=''" onblur="this.placeholder='Imię/Nazwa Firmy'" required />
					<?php
						if(isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
					<input class="font_two_five_res" type="text" name="mail" placeholder="Twój E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Twój E-mail'" required />
					<?php
						if(isset($_SESSION['e_mail']))
						{
							echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
							unset($_SESSION['e_mail']);
						}
					?>
					<input class="font_two_five_res" type="text" name="tel" placeholder="Twój Nr Telefonu" onfocus="this.placeholder=''" onblur="this.placeholder='Twój Nr Telefonu'" required />
					<?php
						if(isset($_SESSION['e_tel']))
						{
							echo '<div class="error">'.$_SESSION['e_tel'].'</div>';
							unset($_SESSION['e_tel']);
						}
					?>
					<textarea class="mess font_two_five_res" name="msg" placeholder="Wiadomość" onfocus="this.placeholder=''" onblur="this.placeholder='Wiadomość'" required></textarea>
					<?php
						if(isset($_SESSION['e_bot']))
						{
							echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
							unset($_SESSION['e_bot']);
						}
					?>
					<input class="font_two_five_res" type="submit" name="submit" value="WYŚLIJ">
				</form>
			</div>
		</div>
	</div>
	<div class="sell_desc col-12">
		<div class="rent_tile ver_flex">
			<div class="desc_rent_tile font_two_five_res">
				Wyposażymy Twoją budowę w rusztowania, szalunki, pomosty, kontenery budowlane, ogrodzenia i wiele innych elementów organizujących plac budowy. Możesz je u nas wynająć lub kupić.</p>
				<p>Doświadczenie, które zdobyliśmy setkami montaży w kraju i zagranicą oraz szeroki asortyment pozwala sprostać potrzebom najbardziej wymagających klientów. Umożliwia zindywidualizowanie konfiguracji rusztowań i szalunków do każdego obiektu i zakresu robót.</p></p>
				<p>Skontaktuj się z Nami lub odwiedź Naszą siedzibę, a przygotujemy precyzyjnie dostosowaną pod Twoje potrzeby ofertę.</p>
				<p style="text-align:right"><b>Zapraszamy do współpracy.<br />
				Zespół JURGO.</b></p>
			</div>
			<div id="offert" class="desc_rent_tile font_two_five_res">
				<h2>NAPISZ DO NAS</h2>
				<form class="col-12 font_two_five_res" method="post">
					<input class="font_two_five_res" type="text" name="name" placeholder="Imię/Nazwa Firmy" onfocus="this.placeholder=''" onblur="this.placeholder='Imię/Nazwa Firmy'" required />
					<?php
						if(isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
					<input class="font_two_five_res" type="text" name="mail" placeholder="Twój E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Twój E-mail'" required />
					<?php
						if(isset($_SESSION['e_mail']))
						{
							echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
							unset($_SESSION['e_mail']);
						}
					?>
					<input class="font_two_five_res" type="text" name="tel" placeholder="Twój Nr Telefonu" onfocus="this.placeholder=''" onblur="this.placeholder='Twój Nr Telefonu'" required />
					<?php
						if(isset($_SESSION['e_tel']))
						{
							echo '<div class="error">'.$_SESSION['e_tel'].'</div>';
							unset($_SESSION['e_tel']);
						}
					?>
					<textarea class="mess font_two_five_res" name="msg" placeholder="Wiadomość" onfocus="this.placeholder=''" onblur="this.placeholder='Wiadomość'" required></textarea>
					<?php
						if(isset($_SESSION['e_bot']))
						{
							echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
							unset($_SESSION['e_bot']);
						}
					?>
					<input class="font_two_five_res" type="submit" name="submit" value="WYŚLIJ">
				</form>
			</div>
		</div>
	</div>
	<div class="we_desc">
		<div class="we_tile ver_flex">
			<div class="desc_we_tile clear_down">
				<div class="text font_two_five_res">
					<p style="margin-top:0">Dzięki wieloletniej praktyce oraz setek wykonanych montaży w kraju i zagranicą zdobyliśmy doświadczenie, które pozwala nam na profesjonalną realizację najbardziej wymagających zamówień. Nasze rozwiązania technologiczne spełniają wymagania związane z rozmieszczeniem rusztowania na powierzchni lub przestrzeni.</p>
				</div>
				<div class="person_title">Nasz zespół:</div>
				<div class="person">
					<div class="person_tile font_two_five_res">
							<p style="margin-bottom:0"><b>WYNAJEM MONTAŻ DEMONTAŻ</p>
							Robert Jurkiewicz<br />
							<i class="icon-phone"></i> 501 288 265</b><br />
							<i class="icon-mail-alt"></i> robert.jurkiewicz@rusztowania-jurgo.pl
					</div>
					<div class="person_tile font_two_five_res">
							<p style="margin-bottom:0"><b>KSIĘGOWOŚĆ</p>
							Aleksandra Brudzyńska<br />
							<i class="icon-phone"></i> 537 992 526</b><br />
							<i class="icon-mail-alt"></i> aleksandra.brudzynska@rusztowania-jurgo.pl
					</div>
					<div class="person_tile font_two_five_res">
							<p style="margin-bottom:0"><b>MAGAZYN</p>
							Michał Romańczuk<br />
							<i class="icon-phone"></i> 444 444 444</b><br />
							<i class="icon-mail-alt"></i> michał.romanczuk@rusztowania-jurgo.pl
					</div>
				</div>
			</div>
			<div class="desc_we_tile">
				<div class="contact">
					<div class="contact_info font_two_five_res">
						<b>JURGO Sp. z o.o.</b><br />
						ul. Wojska Polskiego 69A/14<br />
						10-290 Olsztyn<br />
						<i class="icon-phone"></i> 513 551 801<br />
						<i class="icon-phone"></i> 501 288 265<br />
						<a href="mailto:biuro@jurgo.olsztyn.pl"><i class="icon-mail-alt"></i> biuro@rusztowania-jurgo.pl</a><br />
					</div>
					<div class="company_info font_two_five_res">
						<p>NIP: 739 386 88 73<br />
						REGON: 281614193<br />
						KRS: 0000520303</p>
					</div>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.1964258882304!2d20.4824272268492!3d53.78599144463306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e27ecebe6b0881%3A0x35b103430c241d69!2sAleja+Wojska+Polskiego+69A%2C+11-041+Olsztyn!5e0!3m2!1spl!2spl!4v1564682822050!5m2!1spl!2spl" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--<footer>
		<div id="footer">
			Wszystkie prawa zastrzeżone &copy; 2016-2018 | JURGO
		</div>
	</footer>!-->
</body>
</html>