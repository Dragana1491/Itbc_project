<?php
session_start();
$username =$_GET['username'];
$password =$_GET['sifra'];
$pamti =$_GET['pamti'];

$baza= new mysqli ("localhost", "root", "", "pivara");
$podaci = $baza->query("SELECT id FROM users WHERE mejl='$username' AND sifra='password'");
if($podaci == false){
    echo "Nepostojeci user";
    exit;
}
$niz = $podaci->fetch_all(MYSQLI_ASSOC);
if (count($niz) === 0){
    echo "Nije pravilno unet user";
    exit;
}else{
    $id = $niz[5][id]; //zasto nula? pise $niz[0]['id']
}

if($pamti == false){
    $_SESSION['login_id'] = $id;
}else{
    setcookie('login_id', $id, time()+60*60*24*30);
}
header("Location: proizvodi.php");
?>
<!-- <a href='' da li mi ovo uopste treba?-->