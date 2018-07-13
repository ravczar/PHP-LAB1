<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
	<br>
<h1>Program rozgryzający informacje zawarte w numerze PESEL</h1>
	<br>
	<br>
<FORM action="peselek.php" method="POST">

<fieldset>
  <legend><h2>Podaj swój numer PESEL</h2></legend></br>
  <label>PESEL: </label><input type="number" name="pole1" class="btn"></br>
  <input name= "submit" type="submit" value="Prześlij" class="btn">
  <input name= "reset"  type="reset"  value="Czyść" class="btn"> </br>
  <br>
  <br>
</fieldset>

</FORM>


<p>
<?php
$pesel = $_POST['pole1'];
function pesel($pesel){
	$rok = substr($pesel,0,2);
	$miesiac = substr($pesel,2,2);
		switch ($miesiac){
		case "01"; $miesiac1 = "Stycznia"; 		break;
		case "02"; $miesiac1 = "Lutego"; 		break;
		case "03"; $miesiac1 = "Marca"; 		break;
		case "04"; $miesiac1 = "Kwietnia"; 		break;
		case "05"; $miesiac1 = "Maja"; 			break;
		case "06"; $miesiac1 = "Czerwca"; 		break;
		case "07"; $miesiac1 = "Lipca"; 		break;
		case "08"; $miesiac1 = "Sierpnia"; 		break;
		case "09"; $miesiac1 = "Września"; 		break;
		case "10"; $miesiac1 = "Października"; 	break;
		case "11"; $miesiac1 = "Listopada"; 	break;
		case "12"; $miesiac1 = "Grudnia"; 		break;}
	$dzien = substr($pesel,4,2);
	if ($pesel[9]%2 == 0){
	$plec = "kobietą";}
	else{
	$plec = "meżczyzną";}
	
	echo "Urodziłeś się $dzien $miesiac1 19$rok roku i jesteś $plec";		
}
function pesel2000($pesel){
	$rok = substr($pesel,0,2);
	$miesiac = substr($pesel,2,2);
		switch ($miesiac){
		case "21"; $miesiac1 = "Stycznia";     break;
		case "22"; $miesiac1 = "Lutego";       break;
		case "23"; $miesiac1 = "Marca";        break;
		case "24"; $miesiac1 = "Kwietnia";     break;
		case "25"; $miesiac1 = "Maja";         break;
		case "26"; $miesiac1 = "Czerwca";  	   break;
		case "27"; $miesiac1 = "Lipca";        break;
		case "28"; $miesiac1 = "Sierpnia";     break;
		case "29"; $miesiac1 = "Września";     break;
		case "30"; $miesiac1 = "Października"; break;
		case "31"; $miesiac1 = "Listopada";    break;
		case "32"; $miesiac1 = "Grudnia";      break;}
	
$dzien = substr($pesel,4,2);
if ($pesel[9]%2 == 0){
$plec = "kobietą";}
else{
$plec = "meżczyzną";}
	
echo "Urodziłeś się $dzien $miesiac1 20$rok roku i jesteś $plec";		
}
if (isset($_POST['submit'])){
		switch($pesel[2]){
		case "0"; echo pesel($pesel); 			   break;
		case "2";
		case "3"; echo pesel2000($pesel); 		   break;
		default; echo "Podales zły PESEL gamoniu"; break;}
}
?>
</p>
</body>
</html>
