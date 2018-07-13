
<html>
<head>
<title>Kalkulator</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<style type="text/css">
body {font-family: Verdana, Arial; font-size: 14px; font-weight: bold;}
h1   {font-family: Verdana, Arial; font-size: 24px;}
h2   {font-family: Verdana, Arial; font-size: 18px;}
h3   {font-family: Verdana, Arial; font-size: 14px;}
</style>
<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<h1>Kalkulator ĄĘĆŹŻÓŁ</h1>
<hr>
<h2>Prosty</h2>
<FORM action="">
	<input name="pole1">
	<input name="pole2">
	<select name="lista"> 
		<option value="dod">Dodawanie</option>
		<option value="ode">Odejmowanie</option>
		<option value="mno">Mnożenie</option>
		<option value="dzi">Dzielenie</option>
	</select>
<br>
<br>
	<input type="submit" value="oblicz" name="oblicz">
<h3> Wynik:</h3>
</FORM>

<?php
$a = $_GET['pole1'];
$b = $_GET['pole2'];
$c = $_GET['lista']; 

switch($c){
	case "dod"; echo $a+$b;	break;
	case "ode"; echo $a-$b; break;
	case "mno"; echo $a*$b; break;
	case "dzi"; echo $a/$b; break;
}

?>
<hr>
<h2>Zaawansowany<h2/>
<FORM action="">
	<input name="pole3">
	
	<select name="lista2">
		<option value="cos">cosinus</option>
		<option value="sin">sinus</option>
		<option value="tg">tangens</option>
		<option value="bin1">Bin na 10-tne</option>
		<option value="bin2">10-tne na Bin</option>
		<option value="hex1">10-tne na 16-tkowe</option>
		<option value="hex2">16-tkowe na 10-tne</option>
		<option value="rad1">Stopnie na radiany</option>
		<option value="rad2">Radiany na stopnie</option>
	</select>
<br>
<br>
	<input type="submit" value="oblicz" name="oblicz">
		<h3> Wynik:</h3>
</FORM>
<?php
$d = $_GET['pole3'];
$e = $_GET['lista2'];

switch($e){
		case "cos";  echo cos($d);		break;
		case "sin";  echo sin($d); 		break;
		case "tg";   echo tan($d); 		break;
		case "bin1"; echo bindec($d); 	break;
		case "bin2"; echo decbin($d); 	break;
		case "hex1"; echo dechex($d); 	break;
		case "hex2"; echo hexdec($d); 	break;
		case "rad1"; echo deg2rad($d); 	break;
		case "rad2"; echo rad2deg($d); 	break;
		// Rafał Czarnecki
}

?>
</body>
</html>
