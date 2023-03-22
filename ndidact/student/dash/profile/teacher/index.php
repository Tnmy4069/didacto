<!doctype html>
<html lang="en">

<head>
  <title>Didactology Teacher Profile</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--  CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <?php
  include '../../include/navbar.php';
  include '../../include/dbconnect.php';
  $tr =  $_GET['tr'];

  $sql = "SELECT * FROM teacher WHERE id=$tr";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $tid = $row["id"];
      $tfname = $row["fname"];
      $tlname = $row["lname"];
      $temail = $row["email"];
      $tstate = $row["state"];
      $tcity = $row["city"];
      $tarea = $row["area"];
      $tclass = $row["class"];
      $tboard = $row["board"];
      $tqualification = $row["qualification"];
      $tinstitute = "Apex Coaching";
      $tuserid = $row['userid'];
    }
  } else {
    echo "Invalid Teacher";
  }


  if ($tclass == "12A") {
    $tclass = "12th Arts";
  }
  if ($tclass == "12S") {
    $tclass = "12th Science";
  }
  if ($tclass == "12S") {
    $tclass = "12th Commerce";
  }

  if ($tclass == "11A") {
    $tclass = "11th Arts";
  }
  if ($tclass == "11S") {
    $tclass = "11th Science";
  }
  if ($tclass == "11C") {
    $tclass = "11th Commerce";
  }
  ?>


  <div class="container">
    <div class="main-body">



      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4><?php echo "$tfname $tlname"; ?> <br></h4>
                  <p class="text-secondary mb-1"><?php echo "$tcity,$tstate" ?></p>
                  <p class="text-muted font-size-sm"><?php echo "$tboard,$tclass " ?></p>
                  <!-- <button class="btn btn-outline-primary disabled">Message</button> -->
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo "$tfname $tlname"; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Teaching At</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $tinstitute; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Qualification</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php echo $tqualification; ?>
                </div>
              </div>
              <hr>
              <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Didactor ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $tuserid; ?>
                    </div>
                  </div>
            </div>
          </div>
          <br>
          <div class="row gutters-sm">
            <div class="m-3" style="width:90%">


              <div class="card h-100">
                <div class="card-body">
                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Demo Lecture</i></h6>
                  <div id="carouselId" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselId" data-slide-to="1"></li>
                      <li data-target="#carouselId" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <iframe src="https://www.youtube-nocookie.com/embed/dZVpvhQtiRQ" title="YouTube video player" frameborder="0" height="409px" width="100%" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="carousel-item">
                        <iframe height="409px" width="100%" src="https://www.youtube-nocookie.com/embed/aNVviTECNM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="carousel-item">
                        <iframe height="409px" width="100%" src="https://www.youtube-nocookie.com/embed/aNVviTECNM0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <hr>
                  <p class="lead">
                  <h4 align="center">Pricing Chart</h4>
                  <hr>
                  <b> Maths Full Syllabus --</b>
                  One Year - <b>Online</b><br>
                  <a name="cource1" id="cource1" class="btn btn-primary" href="#" role="button">8000Rs</a>
                  <hr>

                  <b> Maths Full Syllabus --</b>
                  One Year - <b>offline</b> <br>
                  <a name="cource1" id="cource1" class="btn btn-primary" href="#" role="button">13000Rs</a>
                  <hr>

                  <b> Science Full Syllabus --</b>
                  One Year - <b>online</b><br>
                  <a name="cource1" id="cource1" class="btn btn-primary" href="#" role="button">9000Rs</a>
                  <hr>

                  <b> Science Full Syllabus --</b>
                  One Year - <b>offline</b><br>
                  <a name="cource1" id="cource1" class="btn btn-primary" href="#" role="button">14000Rs</a>
                  <hr>

                  <b> Maths + Science Full Syllabus --</b>
                  One Year - <b>online</b><br>
                  <a name="cource1" id="cource1" class="btn btn-primary" href="#" role="button">16000Rs</a>
                  <hr>

                  <b> Maths + Science Full Syllabus -- </b>
                  One Year - <b>offline</b><br>
                  <a name="cource1" id="cource1" class="btn btn-primary" href="#" role="button">20000Rs</a>
                  <hr>




                  </p>


                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
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