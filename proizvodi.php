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
        include "klasa_baza.php"; 
        include "klasa_korpa.php"; 
        include "header.php";
        include "pr.php";
      
        $g->header();
      
           
        $proizvodi = $b->daj_proizvode();  
        
        echo "<div class='proizvod'>";
        foreach($proizvodi as $proizvod) {
            echo "<div class='proiz'>";
            $pr = new Proizvod($proizvod);
          $pr->prikazi_proizvod();
          
                
            echo "<form action='promena_korpe.php'>";
            echo "<input type='hidden' name='akcija' value='dodaj'>";
            echo "<input type='hidden' name='id_proizvoda' value='".$proizvod['barkod']."'>";
            echo "<input type='submit'  value='UBACI U KORPU'>";
            echo "</form>";
            echo "</div>";
        }
        echo "</div>";
    ?>
    <br><button id="dugme_korpa"><a href="korpa.php">OTVORI KORPU</a></button>
    <?php
    $g->footer();

    ?>
</body>
</html>