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
    <title>Create Course</title>
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
$tclassdis = "disabled";
$tboarddis = "disabled";

if($tboard == "State Board"){
    $tboard = "State_Board";
}

if($tclass == "other"){
    $tclass = "";
    $tclassdis = "";
}



?>
    <hr>
    
    <div class="container" id="main">
        <div class="container" id="form">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                    <form method="get" action="generate.php">
                        <label for="">Teacher ID</label>
                        <input type="text" value="<?php echo "$tuid"; ?>" class="form-control" name="trid" id="" aria-describedby="helpId" placeholder="" disabled>
                    </div>

                    <div class="col">
                        <label for="">Teacher Board</label>
                        <input type="text" value="<?php echo "$tboard"; ?>" class="form-control" name="trboard" id="" aria-describedby="helpId" placeholder="" <?php echo $tboarddis; ?>>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <label for="">Teacher Name</label>
                        <input type="text" value="<?php echo "$tfname"."$tlname"; ?>" class="form-control" name="trname" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>

                    <div class="col">
                        <label for="">Class</label>
                        <input type="text" value="<?php echo "$tclass"; ?>" class="form-control" name="trclass" id="" aria-describedby="helpId" placeholder="" <?php echo $tclassdis; ?>>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3" style="margin:auto;">
                        <label for="">Course ID</label>
                        <input type="text" value="<?php echo "$tuid" . "C01"; ?>" class="form-control" name="cid" id="" aria-describedby="helpId" placeholder="" readonly>
                    </div>
                </div>
            </div>

            <hr>



           
                <div class="form-group row">
                    <label for="cname" class="col-4 col-form-label">Course Name</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="cname" name="cname" placeholder="Doubt Clearing" type="text" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="csubject" class="col-4 col-form-label">Course Subject</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-archive"></i>
                                </div>
                            </div>
                            <input id="csubject" name="csubject" placeholder="Maths and Science/Maths" type="text" required="required" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cdesc" class="col-4 col-form-label">Course Description</label>
                    <div class="col-8">
                        <textarea id="cdesc" name="cdesc" cols="40" rows="6" required="required" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cduration" class="col-4 col-form-label">Course Duration</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <input id="cduration" name="cduration" placeholder="1year - mon to fri - 2hr" type="text" aria-describedby="cdurationHelpBlock" required="required" class="form-control">
                        </div>
                        <span id="cdurationHelpBlock" class="form-text text-muted">Please use understandable format (example : 1year - mon to fri - 2hr)</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="camt" class="col-4 col-form-label">Course Amount</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                   Rs.
                                </div>
                            </div>
                            <input id="camt" name="camt" type="text" aria-describedby="camtHelpBlock" class="form-control">
                        </div>
                        <span id="camtHelpBlock" class="form-text text-muted">Please enter full fledge amount</span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>