<?php
session_start();

include 'keys.php';

if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	// $frame=$_POST['frame'];
	// $modul=$_POST['modul'];
	// $fance=$_POST['fance'];
	// $other=$_POST['other'];
	// $msg=htmlspecialchars($msg);
	$all_ok=true;
	// $name_val=true;
	$headers="From: ".$mail;
	
	// if((strlen($name)<3)||(strlen($name)>20))
	// {
		// $all_ok=false;
		// $_SESSION['e_name']="Nazwa powinna zawierać od 3 do 20 znaków";
	// }	
	
	
	if((strlen($name)<3)||(strlen($name)>20))
	{
		$all_ok=false;
		// $name_val=false;
		// echo '<script>$(".name_error").html("Nazwa powinna zawierać od 3 do 20 znaków");</script>';
		$_SESSION['e_name']="Nazwa powinna zawierać od 3 do 20 znaków";
	}
	
	if(!preg_match("/^[a-zA-Z0-9 ]*$/",$name))
	{
		$all_ok=false;
		$_SESSION['e_name']="Nazwa musi zawierać tylko alfanumeryczne znaki";
		// echo '<script>$(".name_error").html("Nazwa musi zawierać tylko alfanumeryczne znaki");</script>';
	}
	
	if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
	{
		$all_ok=false;
		$_SESSION['e_mail']="Nieprawidłowy adres E-Mail";
		// echo '<script>$(".mail_error").html("Nieprawidłowy adres E-Mail");</script>';
	}
	
	if(!preg_match("/^(\+[\d]{2})*([\d]{9})/",$phone))
	{
		$all_ok=false;
		$_SESSION['e_phone']="Numer telefonu powinien zawierać 9 cyfr bez odstępów np. 123456789";
		// echo '<script>$(".phone_error").html("Numer telefonu powinien zawierać 9 cyfr bez odstępów np. 123456789");</script>';
	}
	
	// if(empty($frame)&&empty($fance)&&empty($modul)&&empty($other))
	// if(!isset($frame)&&!isset($fance)&&!isset($modul)&&!isset($other))
	// if(!empty($frame))
	// {
		// $all_ok=false;
		// echo "Zaznacz odpowiedni typ";
		// $_SESSION['e_check']="Zaznacz odpowiedni typ";
		// echo '<script>$(".type_error").html("Zaznacz odpowiedni typ");</script>';
	// }
	
	// $check=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.SECRET_KEY.'&response='.$_POST['g-recaptcha-response']);
	// $answer=json_decode($check);
	
	// if (!($answer->success)&&$answer->score<0.5)
	// {
		// $all_ok=false;
		// $_SESSION['e_bot']="Coś poszło nie tak! Wygląda na to, że jesteś robotem! Spróbuj jeszcze raz!";
	// }
	
	if($all_ok==true)
	{
		// echo "ok";
		$_SESSION['confirmed']='WIADOMOŚĆ WYSŁANA POPRAWNIE.  DZIĘKUJEMY !!!';
		$to='biuro@rusztowania-jurgo.pl';
		$subject='Kontakt ze strony www - Zapytanie od '.$name;
		$message=$name." Pisze: \n".$msg."\n\n"."Kontakt do ".$name.":"."\n"."E-mail: ".$mail."\n"."Telefon: ".$phone."\n";
		if (mail($to, $subject, $message, $headers))
		{
			header('Location: sent.php');
		}
		else
		{
			echo "formularz nie wyslany - blad formularza";
		}
	}
	else
	{
		echo "formularz nie wyslany - blad serwera";
	}
}
?>