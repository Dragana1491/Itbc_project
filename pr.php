<?php
class Proizvod{
    public $barkod, $naziv,$tip, $slika, $cena ;

    function __construct($red){
        //['id'=>100, 'ime'=>'Cokolada100g', 'naslov'=>"Cokolada 100 grama ima sa lesnicima", 'cena'=>100, 'slika'=>'coko.jpg', 'opis'=>'1  Ovo je neki bas duzi opis .']
        $this->barkod = $red['barkod'];
        $this->ime = $red['naziv'];
        $this->slika = $red['slika'];
        $this->cena = $red['cena'];
        $this->grupa = $red['tip'];
    }
    function prikazi_proizvod(){
        echo "<div class='proiz'>";
        
        echo "<img  src='$this->slika' alt='slika'/>";
        echo "<h1 >".$this->ime." -". $this->grupa."</h1>";
       // echo "<a href='detaljnije.php?id=$this->id'>Detaljnije</a>";
        echo "</div>";
    }
}
   // $pr = new Proizvod($red);
?>