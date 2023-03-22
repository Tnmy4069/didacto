<?php

$servername = "sql300.epizy.com";
$username = "epiz_28562269";
$password = "IO11s3frJF9Ij6S";
$dbname = "epiz_28562269_didact";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Database connected <br>";
}

$sql = "SELECT * FROM students";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Name</th>";
                echo "<th>Phone</th>";
                echo "<th>Email</th>";
                echo "<th>State</th>";
                echo "<th>City</th>";
                echo "<th>Area</th>";
                echo "<th>Pincode</th>";
                echo "<th>Class</th>";
                echo "<th>Board</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>DIDACTS10" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['area'] . "</td>";
                echo "<td>" . $row['pincode'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";
                echo "<td>" . $row['board'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


