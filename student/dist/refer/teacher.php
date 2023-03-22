<?php

include '../include/dbconnect.php';

$phone = $_COOKIE['phone'];

// echo $phone;

$sql = "SELECT * FROM students WHERE phone=$phone";

$result = $db->query($sql);





if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    $sid = $row["id"];

    $sname = $row["name"];

    $semail = $row["email"];

    $sstate = $row["state"];

    $scity = $row["city"];

    $sarea = $row["area"];

    $sclass = $row["class"];

    $sboard = $row["board"];

    $sphone = $row["phone"];

    



  }

} else {

  echo "Plz Login Again, there might be some Error";

}













?>



<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>Didactology - Click and Copy to Clipboard (referral/invite links)</title>

  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

 <style type="text/css">.shareUrl-input {

  cursor: pointer;

}



/* Stylistic Changes

=================== */

html {

  height: 100%;

  box-sizing: border-box;

}

html *, html *:before, html *:after {

  box-sizing: inherit;

}



body,

.wrapper,

.content {

  min-height: 100vh;

}



body {

  max-width: 100%;

  overflow-x: hidden;

  font-family: -apple-system, BlinkMacSystemFont, "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Open Sans", "Helvetica Neue", sans-serif;

  letter-spacing: 0;

  font-weight: 400;

  font-style: normal;

  text-rendering: optimizeLegibility;

  -webkit-font-smoothing: antialiased;

  -moz-osx-font-smoothing: grayscale;


  background: linear-gradient(to right, #b993d6, #8ca6db);

  color: #fff;

}

body ::-moz-selection {

  background: rgba(116, 201, 71, 0.8);

  color: #fff;

}

body ::selection {

  background: rgba(116, 201, 71, 0.8);

  color: #fff;

}



.wrapper {

  background: linear-gradient(to right, #b993d6, #8ca6db);

}



p {

  line-height: 1.3;

}



.shareUrl {

  width: 100%;

  padding: 40px 20px;

  text-align: center;

}



.shareUrl-header {

  margin-bottom: 40px;

}



.shareUrl-headerText {

  margin-top: 0;

  margin-bottom: 10px;

  font-size: 22px;

}



.shareUrl-subtext {

  margin-top: 10px;

  font-size: 14px;

}



.shareUrl-body {

  margin-bottom: 70px;

}



.shareUrl-input {

  width: 100%;

  padding: 10px 0;

  border: 2px solid rgba(0, 0, 0, 0.09);

  text-align: center;

  font-size: 26px;

  font-weight: bold;

  color: rgba(255, 255, 255, 0.9);

  background: rgba(0, 0, 0, 0);

  border-radius: 3px;

  transition: all 300ms ease;

}

.shareUrl-input:hover, .shareUrl-input:focus, .shareUrl-input:active {

  border-color: rgba(0, 0, 0, 0.3);

  background: rgba(255, 255, 255, 0.1);

}



@media (min-width: 568px) {

  .shareUrl {

    padding: 70px 20px;

  }



  .shareUrl-input {

    max-width: 100%;

    font-size: 56px;

  }



  .shareUrl-headerText {

    font-size: 32px;

  }

}

.u-verticalGrid {

  display: flex;

  flex-flow: column wrap;

}



.u-flexCenter {

  display: flex;

  align-items: center !important;

}



.u-flexCenterHorizontal {

  display: flex;

  justify-content: center !important;

}



.u-sizeViewHeightMin100 {

  min-height: 100vh !important;

}



.u-size1040 {

  max-width: 1040px;

}



.u-marginAuto {

  margin: 0 auto;

}</style>



</head>

<body>

<!-- partial:index.partial.html -->

<div class="wrapper">

  <div class="content u-flexCenter u-sizeViewHeightMin100">

    <div class="shareUrl u-verticalGrid u-marginAuto u-size1040">

      <header class="shareUrl-header">

        <h1 class="shareUrl-headerText">Didactology Teacher Refferal</h1>

        <p class="shareUrl-headerSubtext">When you reffer someone you will get 5% and Teacher will get 5% wavier on next Course Purchase</p>

      </header>

      <div class="shareUrl-body">

        <div class="container">

          <!-- COPY INPUT -->

          <input class="shareUrl-input js-shareUrl" type="text" readonly="readonly" />

          <p class="shareUrl-subtext">Click above to copy the link and share is our social Platforms.</p>

          <!-- AddToAny BEGIN -->
<div>
<a href="https://www.addtoany.com/share#url=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;title=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/a2a.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/copy_link?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/link.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/whatsapp.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/sms?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/sms.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/telegram?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/telegram.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/email.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/pocket?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/pocket.svg" width="32" height="32" style="background-color:royalblue"></a>
<a href="https://www.addtoany.com/add_to/print?linkurl=https%3A%2F%2Fdidactology.in%2Fteacher%2Fregister%2Fregister.php%3Fref%3D<?php echo $sid; ?>&amp;linkname=Didactology%20Student%20to%20Teacher%20Reffer" target="_blank"><img src="https://static.addtoany.com/buttons/print.svg" width="32" height="32" style="background-color:royalblue"></a>
</div>
<!-- AddToAny END -->

        </div>

      </div>

        <br>




<br><br>
<br><br>
      </div>



  

    </div>

  </div>

</div>
<footer class="shareUrl-footer">

<p><a href="../index.php" style="color:#fff; text-align: center;">Back to Home</a></p>

</footer>
<!-- partial -->

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

    shareUrl.value = "https://didactology.in/teacher/register/register.php?ref=<?php echo $sid; ?>";

  

    // Click listener with copyShareUrl handler

    shareUrl.addEventListener('click', copyShareUrl, false);

  

}());

    

  </script>



</body>

</html>

