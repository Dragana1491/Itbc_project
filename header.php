<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Gornje{
    function __construct(){


    }
    function header(){
        echo "<section>";
        echo "<div  class='logo'>";
        echo "<span ></span>";
        echo "</div>";
        $r = $this->meni();
        echo "</section>";
    }
    function meni(){
       
        echo "<div class='centralni_meni'>";
        echo "<ul type='none'>";
        echo "<li><a href='index.php'>Pocetna</a></li>";
        echo "<li><a href='proizvodi.php'>Online shop</a></li>";
        echo "<li><a href='kontakt.php'>Kontakt</a></li>"; 
        echo "<li><a href='login_forma.php'>Login</a> </li>";          
        echo "</ul>";
        echo "</div>";

    
    }
    function footer(){
        echo "<div class='footer'>";
        echo "<a href='https://www.facebook.com/'><img src='./slike/fbk.png' class='logo_mreza'/></a>";
        echo "<a href='https://twitter.com/'><img src='./slike/tw.png'class='logo_mreza'/></a>";
        echo "<a href='https://www.instagram.com/'><img src='./slike/ins.png'class='logo_mreza'/></a>"; //nisam sigurna da ovo radi posto sam samo prekopirala sa one platforme za ikonice
        echo "</div>";
    }
    function central_div(){
        echo "<div class='centralni_div'>";
        echo"<p id='tekst'> Pivo ne postavlja suvišna pitanja.<br>Pivo razume.</p>";
        echo "</div>";

    }
    function kontakt_div(){
        echo "<div class='kontakt_div'>";
        echo "<form method='GET'>";
        echo"<h2>CONTACT US</h2><br>";
        echo"<label> NAME</label><br>";
        echo"<input type='text' /><br>";
        echo"<label> E-MAIL</label><br>";
        echo"<input   type='text' /><br>";
        echo"<textarea rows='20' cols='80' placeholder='Postavite Vase pitanje ovde'></textarea><br>";
        echo "<input id='dugme' type='submit' value='Posalji' />";
        echo"</form>";
        echo "</div>";

    }
    
}
$g = new Gornje();


?>
</body>
</html>