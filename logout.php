<?php
session_start();
unset($_SESSION['login_id']);
setcookie('login_id', 0, time()-60*60*24, "/");
echo "Uspesno ste se izlogovali";
echo "<a href='login.php> Mozete se ponovo ulogovati</a>"; //treba videti gde ce da vodi ovo dugme


?>