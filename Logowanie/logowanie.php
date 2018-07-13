<?php
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<title>Przetwarzanie formularzy</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="title">

    <h1>Warsztaty programistyczne!</h1>
    <h3>...Przetwarzanie formularzy</h3>
</div>

<div id="content">

    <p>Lorem ipsum ...<br /><br /></p>

    <div class="sub">
    
        <div class="contentForm">

            <form method="POST" action="">
            
                <fieldset>
                    
                    <legend>Zaloguj się</legend><br />
                    
                    <label>Login: </label><input type="text" name="username" value="" /><br />
                    <label>Hasło: </label><input type="password" name="password" value="" /><br />
                    <input type="submit" value="Prześlij" class="btn" />
                
                </fieldset>
            
            <input type="hidden" name="checker" value="1" />
            </form>

<?php
if(isset($_POST['checker'])) {
    
    unset($_POST['checker']);
    
   
    if(($_POST['username']!="pjwstk")&&($_POST['password']!="pjwstk")){echo "<p style=\"color:red\">Wystąpił błąd.Nieprawidłowy Login Lub hasło </p>";}
        else{
            
        header("Location:zalogowany.php", true);
  
 /* echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">
location.href=\"zalogowany.php\";
</SCRIPT>";*/
   }
}    

?>
</div>
    
    </div>

</div>

<!--- BEGIN FOOTER -->

<div id="footer">
    <p class="company"><strong>PJWSTK</strong> 2017&copy;</p>
    <p class="rights">Wszelkie prawa <u>DOZWOLONE</u></p>
</div>

<!--- END FOOTER -->

</body>
</html>

<?php
ob_end_flush();
?>