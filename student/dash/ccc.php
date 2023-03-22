<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php

    require 'include/dbconnect.php';
    require 'include/navbar.php';
    $phone = $_SESSION['username'];
    include 'include/fetchdata.php';

    ?>

    <div class="container">

        <div class="card my-4" style="width: 100%;">

            <div class="card-body">
                <h5 class="card-title">Hello <?php echo $sname ?></h5>
                <p class="card-text">Many of our Teacher are ready to teach you</p>
                <a href="teacher.php" class="btn btn-primary">Find Teachers</a>
            </div>
        </div>



        <div class="row">

            <div class="card my-3" style="width:97%"></div>
            <div class="container my-4">
            <h1>Teachers in your city</h1>
            <figcaption class="figure-caption text-left">* For Class 11th and 12th A,S & C stands for Arts Science and Commerce.(ex. 11S is 11th Science)</figcaption>

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">T. Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class and Board</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `teacher`";
                        $teach = mysqli_query($conn, $sql);
                        $sno = 0;
                        while ($row = mysqli_fetch_assoc($teach)) {
                            $sno = $sno + 1;
                            echo "<tr>
        <th scope='row'>" . $row['userid'] . "</th>
        <td>Mrs. " . $row['fname'] ." ". $row['lname'] . "</td>
        <td>" . $row['class'] ." ". $row['board']  . "</td> 
        <td> <a href='profile/teacher/?tr=".$row['id']."'> <button class='edit btn btn-sm btn-primary' id=" . $row['id'] . ">Profile</button></a> <button class='delete btn btn-sm  m-2 btn-success disabled' id=d" . $row['board'] . ">Didact</button>  </td>
      </tr>";
                        }
                        ?>


                    </tbody>
                </table>
            </div>
            <hr>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>