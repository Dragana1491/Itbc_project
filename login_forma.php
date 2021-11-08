<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
include "header.php";

$g->header();

    if(!isset($_SESSION['login_id']) and !isset($_COOKIE['login_id'])){
        echo "<form action='logovanje_provera.php'>";
        echo "Vas mejl: <br>";
        echo "<input type='text' name='mejl'><br>";
        echo "Vas username: <br>";
        echo "<input type='text' name='username'><br>";
        echo "Vasa sifra: <br>";
        echo "<input type='password' name='sifra'><br>";
        echo "<input type='submit' value='Pokreni'><br>";
        echo "<input type='checkbox' name='pamti'>Otkaci ako zelis da budes zapamcen";
        echo "</form>";
    }else{
        echo "Uspesno";
        echo "<a href='logout.php'> LOG OUT </a>";
        echo "<a href='index.php'> Pocetna strana </a>";
    }
$g->footer();


?>
</body>
</html>