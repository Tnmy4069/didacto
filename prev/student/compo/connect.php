<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','didact');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);


if($db){
    echo "";
}else{
    echo "database madhe maati khalali";
}

$showAlert = false;
$showError = false;
?>