<?php
include '../include/dbconnect.php';
$phone = $_COOKIE['phone'];
echo $phone;



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REFER</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   


    <script>
      (function() {
    
    // Create reusable copy fn
    function copy(element) {
        
        return function() {
          document.execCommand('copy', false, element.select());
        }
    }
    
    // Grab shareUrl element
    var shareUrl = document.querySelector('.js-shareUrl');

    // Create new instance of copy, passing in shareUrl element
    var copyShareUrl = copy(shareUrl);
    
    // Set value via markup or JS
    shareUrl.value = "codepen.io/nicksafafnish";
  
    // Click listener with copyShareUrl handler
    shareUrl.addEventListener('click', copyShareUrl, false);
  
}());
    </script>
  </head>
  <body>
    <div class="container">
        <div class="row mt-30 mb-30">
          <div class="col-sm-12 col-md-3">
            <div class="share-boxes">
              <img src="https://i.ibb.co/PtYrLNy/img1.png" alt="img1" border="0">
              <p>Share with your friends</p>
            </div>
          </div>
          <div class="col"></div>
          <div class="col-sm-12 col-md-3">
            <div class="share-boxes">
              <img src="https://i.ibb.co/P5TdfkT/img2.png" alt="img2" border="0">
              <p>Students will get 10% Discount on thire First Course</p>
              <img src="https://i.ibb.co/Sr5F70S/dotted-arrow1.png" alt="dotted-arrow1" class="dotted-line">
              <img src="https://i.ibb.co/Fqs2KxB/dotted-arrow2.png" alt="dotted-arrow2" class="dotted-line2">
            </div>
          </div>
          <div class="col"></div>
          <div class="col-sm-12 col-md-3">
            <div class="share-boxes">
              <img src="https://i.ibb.co/StC3RWk/img3.png" alt="img3" border="0">
              <p>Teachers will Earn 10% more on thire First Course</p>
            </div>
          </div>
        </div>
        <div class="row refer-form-sec">
          <div class="col">
            <div class="refer-image">
              <img src="https://www.clearias.com/up/Refer-Earn-.png" alt="big-image" border="0" />
            </div>
          </div>
          <div class="col">
            <div class="refer-form">
              <ul>
                <li class="facebook-color"><a href="#">Facebook</a></li>
                <li class="youtube-color"><a href="#">Whatsapp</a></li>
                <li class="twitter-color"><a href="#">twitter</a></li>
              </ul>
            </div>
            <div class="refer-form-content">
              <h2>Friends To Friends</h2>
              <p>Be a Part of this revolution in Eucational Industry
              <form action="#" method="post">
                <label for="student">I wanna Invite my Friend</label>
                <input value="https://didactology.in/student/register.php?ref=<?php echo $phone; ?>" type="text" name="Your Name" placeholder="Your Friend Name" readonly>
                <p class="form-text text-muted">
                  Copy Link above and Share With your Friends
                </p>

                <label for="student">I know a Teacher</label>
                <input value="https://didactology.in/teacher/register.php?ref=<?php echo $phone; ?>" type="text" name="Your Name" placeholder="Your Friend Name" readonly>
                <p class="form-text text-muted">
                  Copy Link above and Share With your Teacher
                </p>
              
                <!-- <input type="email" name="Your Email" placeholder="Your Friend Email"> -->
                <p>
                  <label class="container-checkbox">i have read and accept the T & C and privacy policy
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label></p>
                <button>REFER & EARN</button>
              </form>
            </div>
          </div>
        </div>
        <div class="row mt-30 mb-30">
          <div class="col">
            <!-- <div class="referal-progress">
              <h2>YOUR REFERAL PROGRESS</h2>
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>No. of friends who have purchased</td>
                    <td><strong>USD : 10.00</strong></td>
                  </tr>
                  <tr>
                    <td>No. of friends who have purchased</td>
                    <td><strong>USD : 10.00</strong></td>
                  </tr>
                  <tr>
                    <td>No. of friends who have purchased</td>
                    <td><strong>USD : 10.00</strong></td>
                  </tr>
                </tbody>
              </table>
            </div> -->
          </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>