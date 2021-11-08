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
    
</body>
</html><?php
include "klasa_korpa.php";
include "klasa_baza.php";
include "header.php";

$g->header();
$ukupno = $k->ukupno();
$id_korpe = $b->snimi_korpu(1, $ukupno,);
//echo "ID korpe je $id_korpe";

for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
    $id_proizvoda = $_SESSION['stavke_korpe'][$i]['id'];
    $kol_proizvoda = $_SESSION['stavke_korpe'][$i]['kolicina'];
    $cena_proizvoda = $_SESSION['stavke_korpe'][$i]['cena'];
    $b->snimi_stavku_korpe($id_korpe, $id_proizvoda, $kol_proizvoda, $cena_proizvoda, 0, $kol_proizvoda * $cena_proizvoda);
}
$g->footer();

?>