<?php

    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            // provera
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
        }

        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return ['uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return ['uspesno'=>true, 'niz'=>$niz];
            }
        }
        function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);
            if($odg === false) {
                die('Nije izvrsen upit: '."<br/>" . $this->conn->error."<br/>". $upit);
            } else {
             echo "Uspesno";
            }
                
        }
        function daj_proizvode(){
            $r = $this->izvrsi_select("select * from proizvodi");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
        function daj_proizvod($id){
            $r = $this->izvrsi_select("select * from proizvodi WHERE barkod=$id");
            if($r['uspesno'] == true){
                return $r['niz'][0];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

        function snimi_korpu($id_usera, $ukupna_cena){
            $this->izvrsi_upit("INSERT INTO `korpa`(`id_usera`, `ukupna_cena`) VALUES ($id_usera, $ukupna_cena)");
            return $this->conn->insert_id;
        }
        function snimi_stavku_korpe($id_korpe, $barkod, $kolicina, $cena, $popust, $ukupno){
            $this->izvrsi_upit("INSERT INTO `stavke_korpe`(`id`, `id_korpe`, `barkod`, `kolicina`, `cena`, `popust`, `ukupno`) VALUES (NULL, $id_korpe, '$barkod', $kolicina, $cena, $popust, $ukupno)");
        }
    }
    $b = new Baza("pivara");
 