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
			<div class="asse main_tile_res col-12">
				<div class="title_res clear_up">MONTAŻ DEMONTAŻ</div>
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
						<i class="icon-phone"></i> 513 551 805 | <a href="mailto:biuro@rusztowania-jurgo.pl"><i class="icon-mail-alt"></i>  biuro@rusztowania-jurgo.pl</a>
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
			<h3>WYNAJEM</h3>
		</div>
		<div class="menu_cont">
			<h3>MONTAŻ - DEMONTAŻ</h3>
		</div>
		<div class="menu_cont">
			<h3>SPRZEDAŻ</h3>
		</div>
		<div class="menu_cont">
			<h3>KONTAKT</h3>
		</div>
	</div>
	<div class="rent_desc col-12">
		<div class="rent_tile ver_flex">
			<div class="desc_rent_tile font_two_five_res">
				W ofercie posiadamy:
				<ul style="margin:0">
					<li><b>Rusztowania:</b><br />
						<ul>
							<li>Ramowe</li>
							<li>Modułowe</li>
							<li>Aluminiowe przejezdne</li>
							<li>Warszawskie</li>
							<li>Podwieszane</li>
						</ul>
					</li>
					<li><b>Ogrodzenia:</b><br />
						<ul>
							<li>Pełne</li>
							<li>Ażurowe</li>
							<li>Eventowe</li>
						</ul>
					</li>
					<li><b>Szalunki stropowe</b></li>
					<li><b>Kontenery:</b>
						<ul>
							<li>Magazynowe</li>
							<li>Socjalne</li>
						</ul>
					</li>
				</ul>
				Oferowane materiały posiadają wymagane certyfikaty i atesty. Wykonujemy projekty rusztowań oraz ich uziemienia. Pomagamy wiedzą techniczną i doradztwem. Dowozimy towar na miejsce budowy.<br /><div style="text-align:right;margin-top:1%"> Zapraszamy do kontaktu i współpracy.<br /><b>Jurgo sp. z o.o.</b></div>
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
	<div class="asse_desc col-12">
		<div class="asse_tile ver_flex">
			<div class="desc_asse_tile font_two_five_res">
				Wyposażymy Twoją budowę w rusztowania, szalunki, pomosty, kontenery budowlane, ogrodzenia i wiele innych elementów organizujących plac budowy. Możesz je u nas wynająć lub kupić.</p>
				<p>Doświadczenie, które zdobyliśmy setkami montaży w kraju i zagranicą oraz szeroki asortyment pozwala sprostać potrzebom najbardziej wymagających klientów. Umożliwia zindywidualizowanie konfiguracji rusztowań i szalunków do każdego obiektu i zakresu robót.</p></p>
				<p>Skontaktuj się z Nami lub odwiedź Naszą siedzibę, a przygotujemy precyzyjnie dostosowaną pod Twoje potrzeby ofertę.</p>
				<p style="text-align:right"><b>Zapraszamy do współpracy.<br />
				Zespół JURGO.</b></p>
			</div>
			<div class="desc_asse_tile font_two_five_res">
				<h3>INWESTYCJE</h3>
				<div class="desc_asse_tile_inv">
					<div class="pic_asse_tile"></div>				
					<div class="pic_asse_tile"></div>				
					<div class="pic_asse_tile"></div>				
					<div class="pic_asse_tile"></div>				
				</div>
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
					<p style="margin-top:0">Setki wykonanych montaży w kraju i zagranicą, pozwoliło zdobyć ogromne doświadczenie w branży rusztowaniowej. Wiedza i praktyczne doświadczenie pozwalają nam na profesjonalną realizację najbardziej wymagających zamówień. Wykonujemy projekty techniczne oraz uziemienia rusztowań. Wystawiamy protokoły odbioru rusztowań. Wykonujemy przeglądy okresowe rusztowań oraz opinie techniczne. Nasze rusztowania posiadają wymagane certyfikaty i atesty.</p>
				</div>
				<div class="person_title">Zapraszamy do kontaktu i współpracy</div>
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
						<i class="icon-phone"></i> 513 551 805<br />
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.1968357568526!2d20.4806523160173!3d53.785984149390075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e2796157b96ab7%3A0x602962de7b58224b!2sJURGO%20Sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1586967747461!5m2!1spl!2spl" allowfullscreen></iframe>
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