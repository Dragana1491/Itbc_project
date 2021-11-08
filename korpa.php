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
include "klasa_korpa.php";
include "header.php";
$g->header();
echo "<div class='korpa'>";
$k->prikazi();
echo "</div>";
?>
    <p id='korpa1'><a href="snimi_korpu.php">NARUCI PROIZVODE</a></p>
    <p id='korpa2'><a href="proizvodi.php">POVRATAK NA PROIZVODE</a></p>
<?php
 $g->footer();
 ?>
</body>
</html>