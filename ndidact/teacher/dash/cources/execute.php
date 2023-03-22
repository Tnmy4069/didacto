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
    <title>Course Added Successfully</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <?php

    require '../include/dbconnect.php';
    require '../include/navbar.php';
    $phone = $_SESSION['username'];

    setcookie("phone", "$phone", time() + 600000000, '/'); // expires after 60 seconds

    include '../include/fetchdata.php';

    ?>

    <div class="container mt-3 p-2 bg-warning">

        <h3 class="h3">Important Instructions</h3>
        <p class="lead">sir app ye batao <br>sir app ye batao <br>sir app ye batao <br>sir app ye batao <br></p>
        <hr>
    </div>

    </div>

    <?php
    if ($tboard == "State Board") {
        $tboard = "State";
    }

    ?>
    <hr>

    <?php

    $cid = $tuid . "C01";
    $sql = "SELECT * FROM courses WHERE cid='$cid'";
    $fcourse = $conn->query($sql);


    if ($fcourse !== false && $fcourse->num_rows > 0) {
        // output data of each row
        while ($row = $fcourse->fetch_assoc()) {

            $courceadded = true;
            $trid = $row["truid"];
            $trname = $row["trname"];
            $trboard = $row["trboard"];
            $trclass = $row["trclass"];
            $cid = $row["cid"];
            $cname = $row["cname"];
            $cname = str_replace('_', ' ', $cname);
            $csubject = $row["csubject"];
            $csubject = str_replace('_', ' ', $csubject);
            $cdesc = $row["cdesc"];
            $cdesc = str_replace('_', ' ', $cdesc);
            $cduration = $row["cduration"];
            $cduration = str_replace('_', ' ', $cduration);
            $camt = $row["camt"];
        }
    } else {
        echo "<br> <hr> 0 results";
    }

    ?>






    <div class="container" id="main">
        <?php



        if ($courceadded == true) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Success!</strong>Course added to your Profile Successfully.Plz check the Detail Mentiond Below.
</div>';
        } else {
            echo "Any Mistake";
        }

        ?>

        <div class="container" id="form">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <form method="get" action="generate.php">
                            <label for="">Teacher ID</label>
                            <input type="text" value="<?php echo "$tuid"; ?>" class="form-control" name="trid" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>

                    <div class="col">
                        <label for="">Teacher Board</label>
                        <input type="text" value="<?php echo "$tboard"; ?>" class="form-control" name="trboard" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <label for="">Teacher Name</label>
                        <input type="text" value="<?php echo "$tfname" . "$tlname"; ?>" class="form-control" name="trname" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>

                    <div class="col">
                        <label for="">Class</label>
                        <input type="text" value="<?php echo "$tclass"; ?>" class="form-control" name="trclass" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3" style="margin:auto;">
                        <label for="">Cource ID</label>
                        <input type="text" value="<?php echo "$tuid" . "C01"; ?>" class="form-control" name="cid" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>
            </div>
            </form>

            <hr>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cource ID</th>
                            <th scope="col"><?php echo $cid;?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cource Name</td>
                            <th scope="col"><?php echo $cname;?></th>                           
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Cource Subject</td>
                            <th scope="col"><?php echo $csubject;?></th>                            
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Cource Duration</td>
                            <th scope="col"><?php echo $cduration;?></th>                            
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>About Cource</td>
                            <th scope="col"><?php echo $cdesc;?></th>                            
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Course Teacher</td>
                            <th scope="col"><?php echo $trname;?></th>                            
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Techer ID</td>
                            <th scope="col"><?php echo $trid;?></th>                            
                        </tr>
                    </tbody>

                </table>
            </div>


        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>