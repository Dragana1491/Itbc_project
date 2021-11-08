<?php
    session_start();

    if(!isset($_SESSION['stavke_korpe']))
        $_SESSION['stavke_korpe'] = [];
    
    class Korpa{
        public $stavke_korpe;

        function __construct(){
            $this->stavke_korpe = $_SESSION['stavke_korpe'];
        }
        function dodaj_proizvod($id, $naziv, $cena, $kolicina){
            $nasao = false;
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    $this->promeni_kolicinu($id, $kolicina);
                    $nasao = true;
                    break;
                }
            }
            if($nasao == false){
                $nova_stavka = ['id'=>$id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kolicina];
                array_push($this->stavke_korpe, $nova_stavka);
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }
        function promeni_kolicinu($id, $kol){
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    $this->stavke_korpe[$i]['kolicina'] += $kol;
                    if($this->stavke_korpe[$i]['kolicina'] <= 0)
                        $this->obrisi_proizvod($id);
                    break;
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }
        function obrisi_proizvod($id){
            for($i=0; $i<count($this->stavke_korpe); $i++){
                if($this->stavke_korpe[$i]['id'] == $id){
                    array_splice($this->stavke_korpe, $i, 1);
                    break;
                }
            }
            $_SESSION['stavke_korpe'] = $this->stavke_korpe;
        }
        function ukupno(){
            $s = 0;
            for($i=0; $i<count($this->stavke_korpe); $i++){
                $u = $this->stavke_korpe[$i]['cena'] * $this->stavke_korpe[$i]['kolicina'];
                $s += $u;
            }
            return $s;
        }
        function prikazi(){
            echo "<table  border='1'>";
            $z = 0;
            for($i=0; $i<count($this->stavke_korpe); $i++){
                $u = $this->stavke_korpe[$i]['cena'] * $this->stavke_korpe[$i]['kolicina'];
                $z += $u;
                echo "<tr>";
                echo "<td>".$this->stavke_korpe[$i]['naziv']."</td>";
                echo "<td>".$this->stavke_korpe[$i]['cena']."</td>";
                echo "<td><a href='promena_korpe.php?akcija=dodaj&id_proizvoda=".$this->stavke_korpe[$i]['id']."'><button style='font: size 2em'>+</button></a></td>";
                echo "<td>".$this->stavke_korpe[$i]['kolicina']."</td>";
                echo "<td><a href='promena_korpe.php?akcija=smanji&id_proizvoda=".$this->stavke_korpe[$i]['id']."'><button style='font: size 2em'>-</button></a></td>";
                echo "<td>".$u."</td>";
                echo "<td><a href='promena_korpe.php?akcija=obrisi&id_proizvoda="
                    .$this->stavke_korpe[$i]['id']."'><button style='font: size 2em'>Obrisi stavku</button></a></td>";
                echo "</tr>";
            }
            echo "<tr><td colspan='5' style='text-align:center'>UKUPNO:</td><td>$z</td></tr>";
            echo "</table>";

        }
   
    }   
    $k = new Korpa();

