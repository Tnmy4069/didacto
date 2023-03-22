
<?php

// Connecting to the Database
$servername = "localhost";
$username = "u312563940_apex2";
$password = "aE40idd#IN#8";
$database = "u312563940_apex2";

// Create connection
$db = new mysqli($servername, $username, $password, $database);

if($db){

    echo '';

}else{

    echo "database madhe maati khalali";

}
?>