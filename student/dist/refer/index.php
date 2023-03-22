<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodePen - Soft touch two option menu</title>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Andika);

*
{
margin:0px;
padding:0px;
outline:none;
}

html{height:100%}
 
body{
        background: #a18c96; /* Old browsers */
        background: -moz-linear-gradient(-45deg,  #a18c96 0%, #d1c2c5 38%, #3a3b4c 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#a18c96), color-stop(38%,#d1c2c5), color-stop(100%,#3a3b4c)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(-45deg,  #a18c96 0%,#d1c2c5 38%,#3a3b4c 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(-45deg,  #a18c96 0%,#d1c2c5 38%,#3a3b4c 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(-45deg,  #a18c96 0%,#d1c2c5 38%,#3a3b4c 100%); /* IE10+ */
        background: linear-gradient(135deg,  #a18c96 0%,#d1c2c5 38%,#3a3b4c 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a18c96', endColorstr='#3a3b4c',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        padding:10px;
        font-family:'Andika', sans-serif;
        color:#b8a7a7;
        text-transform:uppercase;
        font-weight:bold;
}


#menu
{
width: 280px;
margin: 5% auto;
position: relative;
}

#menu:before
{
width: 294px;
padding: 31.5px 0px;
border-radius: 30px;
position: absolute;
background: #fff;
content: "";
left: -7px;
top: -6px;
z-index: -1;
opacity: 0.3;
}

#menu:after
{
width: 12px;
height: 20px;
padding:0px 4px 0px 4px;
border-radius: 50%;
position: absolute;
background: #d01768; /* Old browsers */
background: -moz-linear-gradient(top,  #d01768 0%, #ea2a72 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d01768), color-stop(100%,#ea2a72)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #d01768 0%,#ea2a72 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #d01768 0%,#ea2a72 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #d01768 0%,#ea2a72 100%); /* IE10+ */
background: linear-gradient(to bottom,  #d01768 0%,#ea2a72 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d01768', endColorstr='#ea2a72',GradientType=0 ); /* IE6-9 */
content: "OR";
left: 46%;
top: 15px;
border:1px solid #d01f68;
font-size:0.5em;
color:#a5014f;
line-height:20px;
letter-spacing:-1px;
}

a{
font-size:0.7em;
text-decoration:none;
display:block;
float:left;
padding: 17px 0px;
width:49.6%;
text-align:center;
color:#efdcdc;
background: #f73c82; /* Old browsers */
background: -moz-linear-gradient(top,  #f73c82 0%, #c21063 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f73c82), color-stop(100%,#c21063)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #f73c82 0%,#c21063 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #f73c82 0%,#c21063 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #f73c82 0%,#c21063 100%); /* IE10+ */
background: linear-gradient(to bottom,  #f73c82 0%,#c21063 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f73c82', endColorstr='#c21063',GradientType=0 ); /* IE6-9 */
-webkit-transition:0.5s;
-moz-transition:0.5s;
-ms-transition:0.5s;
-o-transition:0.5s;
transition:0.5s;
}
a:hover
{
box-shadow:inset 0px 0px 10px 1px #b0245e;
-webkit-transition:0.5s;
-moz-transition:0.5s;
-ms-transition:0.5s;
-o-transition:0.5s;
transition:0.5s;
}

#menu a:first-child{border-radius: 25px 0px 0px 25px;border-right:1px solid #cf3972;}
#menu a:last-child{border-radius: 0px 25px 25px 0px;border-left:1px solid #ee508c;}
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="menu">
<a href="teacher.php">Refer a Teacher</a>
<a href="student.php">Refer a Student</a>
</div>
<!-- partial -->
  
</body>
</html>
