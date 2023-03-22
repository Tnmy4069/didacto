<?php

// Connecting to the Database
$servername = "sql300.epizy.com";
$username = "epiz_28562269";
$password = "IO11s3frJF9Ij6S";
$database = "epiz_28562269_didact";

// Create connection
$db = new mysqli($servername, $username, $password, $database);



if($db){

    echo "";

}else{

    echo "database madhe maati khalali";

}



$showAlert = false;

$showError = false;

?>