<?php
session_start();

include 'keys.php';

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>JURGO Sp. z o.o. wynajem i sprzedaż rusztowań</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Wynajem i sprzedaż rusztowań, szalunków oraz ogrodzeń" />
	<meta name="keywords" content="rusztowania,szalunki,ogrodzenia,sprzedaż rusztowań,sprzedaz rusztowan,wynajem rusztowan,wynajem rusztowań,wynajem rusztowan warmia i mazury,wynajem ogorodzeń,rusztowania olsztyn,rusztowania elblag,rusztowania malbork,wynajem ogrodzen,rusztowania warmia,szalunki,rusztowania olsztyn" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	<link href="/img/favicon.png" rel="shortcut icon" type="image/png" />
	
	<script src="jquery-3.3.1.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
	<script src="extras.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145119900-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-145119900-1');
	</script>

</head>
<body>
	<div id="home" class="cont col-12">
		<div class="open_menu ver_flex col-12">
			<div class="rent main_tile_res col-12">
				<div class="quick_desc clear_down">
					<h4>RUSZTOWAŃ</h4>
					<h4>OGRODZEŃ</h4>
					<h4>SZALUNKÓW</h4>
					<h4>KONTENERÓW</h4>
				</div>
				<div class="title_res clear_up">WYNAJEM</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>		
			<div class="asse main_tile_res col-12">
				<div class="quick_desc clear_down">
					<h4>MONTAŻ - DEMONTAŻ</h4>
					<h4>ODBIORY - PRZEGLĄDY</h4>
					<h4>UZIEMIENIE</h4>
					<h4>PROJEKTY</h4>
					<h4>SPRZEDAŻ</h4>
					<p>ZAPEWNIAMY PEŁNĄ OBSŁUGĘ</p>
				</div>
				<div class="title_res clear_up">RUSZTOWANIA</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>
			<div class="sell main_tile_res col-12">
				<div class="quick_desc clear_down">
					<h4>RUSZTOWANIA</h4>
					<h4>OGRODZENIA</h4>
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
				<div class="quick_desc clear_down">
					<div class="blog">
						<h4>ZAJRZYJ NA NASZ BLOG</h4>
						<a href="jurgo-blog.php" target="_blank"><img src="img/blog.png" alt="Jurgo Rusztowania BLOG" /></a>
						<p>Znajdziesz tu przydatne artykuły i informacje.</p>
					</div>
				</div>
				<div class="title_res clear_up">KONTAKT</div>
				<div class="see_more clear_down">ZOBACZ WIĘCEJ</div>
			</div>
			<div class="navbar">
				<div class="quickcontact col-12 quick_res">
					<div class="l_topbar col-10">
						<i class="icon-phone"></i> 513 551 805 | <a href="mailto:biuro@rusztowania-jurgo.pl"><i class="icon-mail-alt"></i>  biuro@rusztowania-jurgo.pl</a>
					</div>
					<div class="download">
						<div class="clear_down"><a href="download.php" target="_blank">Do pobrania <i class="icon-download"></i></a></div>
						<div class="clear_up"><a href="download.php"><i class="icon-download"></i></a></div>
					</div>
					<div class="r_topbar col-2">
						<div class="clear_down"><a href="https://www.facebook.com/jurgo.rusztowanie/" target="_blank">Znajdź Nas na <i class="icon-facebook"></i>Facebook</a></div>
						<div class="clear_up"><a href="https://www.facebook.com/jurgo.rusztowanie/" target="_blank"><i class="icon-facebook"></i>Facebook</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear_up">
			<div class="back-button">
				<div class="back-button-border"></div>
				<div class="arrow-wrap">
					<div class="arrow arrow-up"></div>
					<div class="arrow arrow-down"></div>
				</div>
			</div>
		</div>
	</div>
	<header>
		<div class="open_cont clear_down">
			<div class="menu_cont">
				<h3>WYNAJEM</h3>
			</div>
			<div class="menu_cont">
				<h3>RUSZTOWANIA</h3>
			</div>
			<div class="menu_cont">
				<h3>SPRZEDAŻ</h3>
			</div>
			<div class="menu_cont">
				<h3>KONTAKT</h3>
			</div>
		</div>
	</header>
	<div class="rent_desc col-12">
		<div class="rent_tile ver_flex">
			<div class="desc_rent_tile text_font_res">
				W ofercie posiadamy:
				<ul>
					<li><b>Rusztowania:</b><br />
						<ul>
							<li>Ramowe</li>
							<li>Modułowe</li>
							<li>Przejezdne</li>
						</ul>
						<ul>
							<li>Podwieszane</li>
							<li>Warszawskie</li>
						</ul>
					</li>
					<li><b>Ogrodzenia:</b>
						<ul>
							<li>Pełne</li>
							<li>Ażurowe</li>
							<li>Eventowe</li>
						</ul>
					</li>
					<li><b>Szalunki</b>
						<ul>
							<li>Stropowe</li>
						</ul>
					<li><b>Kontenery:</b>
						<ul>
							<li>Magazynowe</li>
							<li>Socjalne</li>
						</ul>
					</li>
				</ul>
				<p>Oferowane materiały posiadają wymagane certyfikaty i atesty. Wykonujemy projekty rusztowań oraz ich uziemienia. Pomagamy wiedzą techniczną i doradztwem. Dowozimy towar na miejsce budowy.</p><div style="text-align:right;margin-top:1%"> Zapraszamy do kontaktu i współpracy.<br /><b>Jurgo sp. z o.o.</b></div>
			</div>
			<div id="offert" class="desc_rent_tile desc_area_tile big_font_res">
				<h2>NAPISZ</h2>
				<h4 style="margin:0;text-align:center">lub ZADZWOŃ 513 551 805</h4>
				<form id="rent_form" class="col-12 mid_font_res" action="send_form.php" method="post">
					<input id="form-name" class="mid_font_res" type="text" name="name" placeholder="Imię/Nazwa Firmy" onfocus="this.placeholder=''" onblur="this.placeholder='Imię/Nazwa Firmy'" required />
					<div class="name_error"></div>
					<?php
						if(isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
					<input id="form-mail" class="mid_font_res" type="text" name="mail" placeholder="Twój E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Twój E-mail'" required />
					<div class="mail_error"></div>
					<?php
						if(isset($_SESSION['e_mail']))
						{
							echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
							unset($_SESSION['e_mail']);
						}
					?>
					<input id="form-phone" class="mid_font_res" type="text" name="phone" placeholder="Twój Nr Telefonu" onfocus="this.placeholder=''" onblur="this.placeholder='Twój Nr Telefonu'" required />
					<div class="phone_error"></div>
					<?php
						if(isset($_SESSION['e_tel']))
						{
							echo '<div class="error">'.$_SESSION['e_tel'].'</div>';
							unset($_SESSION['e_tel']);
						}
					?>
					<textarea id="form-msg" class="mess small_font_res" name="msg" placeholder="Podaj jak najwięcej informacji technicznych, np. wymiary ścian, wysokość ogrodzenia, itp." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj jak najwięcej informacji technicznych, np. wymiary ścian, wysokość ogrodzenia, itp.'" required></textarea>
					<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
					<script>
						grecaptcha.ready(function() {
							grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
								document.getElementById('g-recaptcha-response').value=token;
							});
						});
					</script>
					<?php
						if(isset($_SESSION['e_bot']))
						{
							echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
							unset($_SESSION['e_bot']);
						}
					?>
					<!--<input id="form-frame" type="checkbox" name="frame">
					<label for="frame">Ramowe</label>
					<input id="form-modul" type="checkbox" name="modul">
					<label for="modul">Modułowe</label>
					<input id="form-fance" type="checkbox" name="fance">
					<label for="fance">Ogrodzenia</label>
					<input id="form-other" type="checkbox" name="other">
					<label for="other">Inne</label>
					<div class="type_error"></div>!-->
					<?php 
						// if(isset($_SESSION['e_check']))
						// {
							// echo '<div class="error">'.$_SESSION['e_check'].'</div>';
							// unset($_SESSION['e_check']);
						// }
					?>
					<input id="form-submit" class="mid_font_res" type="submit" name="submit" value="WYŚLIJ">
				</form>
			</div>
		</div>
	</div>
	<div class="asse_desc col-12">
		<div class="asse_tile ver_flex">
			<div class="desc_asse_tile mid_font_res">
				Wyposażymy Twoją budowę w rusztowania, szalunki, pomosty, kontenery budowlane, ogrodzenia i wiele innych elementów organizujących plac budowy. Możesz je u nas wynająć lub kupić.</p>
				<p>Doświadczenie, które zdobyliśmy setkami montaży w kraju i zagranicą oraz szeroki asortyment pozwala sprostać potrzebom najbardziej wymagających klientów. Umożliwia zindywidualizowanie konfiguracji rusztowań i szalunków do każdego obiektu i zakresu robót.</p></p>
				<p>Skontaktuj się z Nami lub odwiedź Naszą siedzibę, a przygotujemy precyzyjnie dostosowaną pod Twoje potrzeby ofertę.</p>
				<p style="text-align:right">Zapraszamy do kontaktu i współpracy.<br />
				<b>Jurgo sp. z o.o.</b></p>
			</div>
			<div class="desc_asse_tile big_font_res">
				<h2>NAPISZ</h2>
				<h4 style="margin:0;text-align:center">lub ZADZWOŃ 513 551 805</h4>
				<form id="rent_form" class="col-12 mid_font_res" action="send_form.php" method="post">
					<input id="form-name" class="mid_font_res" type="text" name="name" placeholder="Imię/Nazwa Firmy" onfocus="this.placeholder=''" onblur="this.placeholder='Imię/Nazwa Firmy'" required />
					<div class="name_error"></div>
					<?php
						if(isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
					<input id="form-mail" class="mid_font_res" type="text" name="mail" placeholder="Twój E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Twój E-mail'" required />
					<div class="mail_error"></div>
					<?php
						if(isset($_SESSION['e_mail']))
						{
							echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
							unset($_SESSION['e_mail']);
						}
					?>
					<input id="form-phone" class="mid_font_res" type="text" name="phone" placeholder="Twój Nr Telefonu" onfocus="this.placeholder=''" onblur="this.placeholder='Twój Nr Telefonu'" required />
					<div class="phone_error"></div>
					<?php
						if(isset($_SESSION['e_tel']))
						{
							echo '<div class="error">'.$_SESSION['e_tel'].'</div>';
							unset($_SESSION['e_tel']);
						}
					?>
					<textarea id="form-msg" class="mess small_font_res" name="msg" placeholder="Podaj jak najwięcej informacji technicznych, np. wymiary ścian, wysokość ogrodzenia, itp." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj jak najwięcej informacji technicznych, np. wymiary ścian, wysokość ogrodzenia, itp.'" required></textarea>
					<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
					<script>
						grecaptcha.ready(function() {
							grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
								document.getElementById('g-recaptcha-response').value=token;
							});
						});
					</script>
					<?php
						if(isset($_SESSION['e_bot']))
						{
							echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
							unset($_SESSION['e_bot']);
						}
					?>
					<!--<input type="checkbox" name="frame">
					<label for="frame">Ramowe</label>
					<input type="checkbox" name="modul">
					<label for="modul">Modułowe</label>
					<input type="checkbox" name="fance">
					<label for="fance">Jezdne</label>
					<input type="checkbox" name="other">
					<label for="other">Warszawskie</label>!-->
					<input id="form-submit" class="mid_font_res" type="submit" name="submit" value="WYŚLIJ">
				</form>
			</div>
		</div>
	</div>
	<div class="sell_desc col-12">
		<div class="sell_tile ver_flex">
			<div class="desc_sell_tile mid_font_res">
				<p>Prowadzimy kompleksową sprzedaż rusztowań i ogrodzeń. Pomożemy Ci w doborze najodpowiedniejszego zestawu, wzglendem Twoich potrzeb.
				Posiadamy w ofercie rusztowania: ramowe, modułowe i jezdne, a także ogrodzenia: pełne, ażurowe i eventowe.</p>
				<p>Wieloletnia współpraca z licznymi producentami sprzętu budowlanego, pozwoliła nam osiągnąć atrakcyjne ceny wyjściowe.</p>
				<p>Skontaktuj się z nami, a przedstawimy Ci wszystkie niezbędne informacje techniczne oraz ceny.</p>
				<p style="text-align:right">Zapraszamy do kontaktu i współpracy.<br />
				<b>Jurgo sp. z o.o.</b></p>
			</div>
			<div id="offert" class="desc_rent_tile big_font_res">
				<h2>NAPISZ</h2>
				<h4 style="margin:0;text-align:center">lub ZADZWOŃ 513 551 805</h4>
				<form id="rent_form" class="col-12 mid_font_res" action="send_form.php" method="post">
					<input id="form-name" class="mid_font_res" type="text" name="name" placeholder="Imię/Nazwa Firmy" onfocus="this.placeholder=''" onblur="this.placeholder='Imię/Nazwa Firmy'" required />
					<div class="name_error"></div>
					<?php
						if(isset($_SESSION['e_name']))
						{
							echo '<div class="error">'.$_SESSION['e_name'].'</div>';
							unset($_SESSION['e_name']);
						}
					?>
					<input id="form-mail" class="mid_font_res" type="text" name="mail" placeholder="Twój E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='Twój E-mail'" required />
					<div class="mail_error"></div>
					<?php
						if(isset($_SESSION['e_mail']))
						{
							echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
							unset($_SESSION['e_mail']);
						}
					?>
					<input id="form-phone" class="mid_font_res" type="text" name="phone" placeholder="Twój Nr Telefonu" onfocus="this.placeholder=''" onblur="this.placeholder='Twój Nr Telefonu'" required />
					<div class="phone_error"></div>
					<?php
						if(isset($_SESSION['e_tel']))
						{
							echo '<div class="error">'.$_SESSION['e_tel'].'</div>';
							unset($_SESSION['e_tel']);
						}
					?>
					<textarea id="form-msg" class="mess small_font_res" name="msg" placeholder="Podaj jak najwięcej informacji technicznych, np. wymiary ścian, wysokość ogrodzenia, itp." onfocus="this.placeholder=''" onblur="this.placeholder='Podaj jak najwięcej informacji technicznych, np. wymiary ścian, wysokość ogrodzenia, itp.'" required></textarea>
					<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
					<script>
						grecaptcha.ready(function() {
							grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
								document.getElementById('g-recaptcha-response').value=token;
							});
						});
					</script>
					<?php
						if(isset($_SESSION['e_bot']))
						{
							echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
							unset($_SESSION['e_bot']);
						}
					?>
					<!--<input type="checkbox" name="frame">
					<label for="frame">Ramowe</label>
					<input type="checkbox" name="modul">
					<label for="modul">Modułowe</label>
					<input type="checkbox" name="fance">
					<label for="fance">Ogrodzenia</label>
					<input type="checkbox" name="other">
					<label for="other">Inne</label>!-->
					<input id="form-submit" class="mid_font_res" type="submit" name="submit" value="WYŚLIJ">
				</form>
			</div>
		</div>
	</div>
	<div class="we_desc">
		<div class="we_tile ver_flex">
			<div class="desc_we_tile">
				<div class="text clear_down">
					<p style="margin-top:0">Setki wykonanych montaży w kraju i zagranicą, pozwoliło zdobyć ogromne doświadczenie w branży rusztowaniowej. Wiedza i praktyczne doświadczenie pozwalają nam na profesjonalną realizację najbardziej wymagających zamówień. Wykonujemy projekty techniczne oraz uziemienia rusztowań. Wystawiamy protokoły odbioru rusztowań. Wykonujemy przeglądy okresowe rusztowań oraz opinie techniczne. Nasze rusztowania posiadają wymagane certyfikaty i atesty.</p>
				</div>
				<div class="person_title clear_down">Zapraszamy do kontaktu i współpracy</div>
				<div class="person_container">
					<div class="person clear_down">
						<div class="person_tile text_font_res">
								<p style="margin-bottom:0"><b>WYNAJEM, MONTAŻ, DEMONTAŻ</p>
								<i class="icon-phone"></i> 513 551 805</b><br />
								<i class="icon-mail-alt"></i> biuro@rusztowania-jurgo.pl
						</div>
						<div class="person_tile text_font_res">
								<p style="margin-bottom:0"><b>DORADZTWO TECHNICZNE, UMOWY</p>
								Robert Jurkiewicz<br />
								<i class="icon-phone"></i> 501 288 265</b><br />
								<i class="icon-mail-alt"></i> robert.jurkiewicz@rusztowania-jurgo.pl
						</div>
						<div class="person_tile text_font_res">
								<p style="margin-bottom:0"><b>SPRZEDAŻ, UMOWY</p>
								Emil Jurkiewicz<br />
								<i class="icon-phone"></i> 510 396 538</b><br />
								<i class="icon-mail-alt"></i> emil.jurkiewicz@rusztowania-jurgo.pl
						</div>
					</div>
					<div class="person clear_down">
						<div class="person_tile text_font_res">
								<p style="margin-bottom:0"><b>KSIĘGOWOŚĆ, UMOWY</p>
								Aleksandra Brudzyńska<br />
								<i class="icon-phone"></i> 537 992 526</b><br />
								<i class="icon-mail-alt"></i> aleksandra.brudzynska@rusztowania-jurgo.pl
						</div>
						<div class="person_tile text_font_res">
								<p style="margin-bottom:0"><b>MAGAZYN</p>
								Michał Romańczuk<br />
								<i class="icon-phone"></i> 514 413 315</b><br />
								<i class="icon-mail-alt"></i> michał.romanczuk@rusztowania-jurgo.pl
						</div>
					</div>
				</div>
			</div>
			<div class="desc_we_tile">
				<div class="contact">
					<div class="contact_info mid_font_res">
						<b>JURGO Sp. z o.o.</b><br />
						ul. Wojska Polskiego 69A/14<br />
						10-290 Olsztyn<br />
						<i class="icon-phone"></i> 513 551 805<br />
						<i class="icon-phone"></i> 501 288 265<br />
					</div>
					<div class="company_info mid_font_res">
						<p>NIP: 739 386 88 73<br />
						REGON: 281614193<br />
						KRS: 0000520303<br />
						<a href="mailto:biuro@jurgo.olsztyn.pl"><i class="icon-mail-alt"></i> biuro@rusztowania-jurgo.pl</a></p>
					</div>
					<div class="person clear_up">
						<div class="person_tile mid_font_res">
							<p style="margin-bottom:0"><b>WYNAJEM MONTAŻ DEMONTAŻ</p>
							Robert Jurkiewicz<br />
							<i class="icon-phone"></i> 501 288 265</b><br />
							<i class="icon-mail-alt"></i> robert.jurkiewicz@rusztowania-jurgo.pl
						</div>
						<div class="person_tile mid_font_res">
							<p style="margin-bottom:0"><b>KSIĘGOWOŚĆ</p>
							Aleksandra Brudzyńska<br />
							<i class="icon-phone"></i> 537 992 526</b><br />
							<i class="icon-mail-alt"></i> aleksandra.brudzynska@rusztowania-jurgo.pl
						</div>
						<div class="person_tile mid_font_res">
							<p style="margin-bottom:0"><b>MAGAZYN</p>
							Michał Romańczuk<br />
							<i class="icon-phone"></i> 444 444 444</b><br />
							<i class="icon-mail-alt"></i> michał.romanczuk@rusztowania-jurgo.pl
						</div>
					</div>
				</div>
				<div class="map map_res">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2357.1968357568526!2d20.4806523160173!3d53.785984149390075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e2796157b96ab7%3A0x602962de7b58224b!2sJURGO%20Sp.%20z%20o.o.!5e0!3m2!1spl!2spl!4v1586967747461!5m2!1spl!2spl" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="cookie clear_down">
		Ta strona używa ciasteczek (cookies), dzięki którym nasz serwis może działać lepiej. <a href="https://wszystkoociasteczkach.pl/" target="_blank">Dowiedz się więcej</a>
		<div class="cookie_confirm"><b>ROZUMIEM</b></div>
	</div>
</body>
</html>