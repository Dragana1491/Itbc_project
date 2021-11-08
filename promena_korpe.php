<?php
    include "klasa_korpa.php";
    include "klasa_baza.php";

    if(isset($_GET['akcija']) && $_GET['akcija'] == 'dodaj'){
        $id = $_GET['id_proizvoda'];
        $proizvod = $b->daj_proizvod($id);
        $k->dodaj_proizvod($id, $proizvod['naziv'], $proizvod['cena'], 1);        
    }
    if(isset($_GET['akcija']) && $_GET['akcija'] == 'smanji'){
        $id = $_GET['id_proizvoda'];
        $k->promeni_kolicinu($id, -1);        
    }
    if(isset($_GET['akcija']) && $_GET['akcija'] == 'obrisi'){
        $id = $_GET['id_proizvoda'];
        $k->obrisi_proizvod($id);
    }
    header("Location: korpa.php");

?>