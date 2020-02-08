<?php
session_start();
//var_dump($_SESSION);
require 'Lidhjamedatabase.php';
//echo 'Welcome '.$_SESSION['User'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bismilah faqja 2</title>
	<style type="text/css">
		.div1{
			color: blue;
			text-align: center;
			font-family: sans-serif;
			font-size: 50px;
		   }
        .btndil{
        font-family: "Roboto",sans-serif;
      	text-decoration: uppercase;
      	outline: 0;
      	background:lightblue;
      	width: 10%;
      	border: 0;
      	padding: 15px;
        color:  hsl(207, 100%, 48%);
      	font-size: 14px;
      	cursor: pointer;
      	position:fixed;
        right:10px;
        bottom: :5px;
        border-radius: 25px;
        }
        body{
        	background-image: url(super.jpg);
        	background-size: cover;
        }
        

        * {
  box-sizing: border-box;
}

/*body {
  font-family: Arial, Helvetica, sans-serif;
}*/

/* Float four columns side by side */
.column {
  float: left;
  width: 100%;
  padding: 10px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {
	margin: 25px 25px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    /*margin-bottom: 80px;*/
     margin: auto;
     /*width: 60%;
 /* border: 3px solid #73AD21;*/
  padding: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  font-size: 25px;
  font-family: sans-serif;
  background-color: #f1f1f1;
 /* background-color: transparent;*/
  border-radius: 25px;
}
	</style>
</head>
<body>
	<div class="div1"><?php echo 'Welcome '.$_SESSION['User']; ?></div>
<br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <h3><a href="thenie.php">Thënie</a></h3>
    </div>
  </div>

  <div class="column">
    <div class="card">
     <h3><a href="foto.php">Foto</a></h3>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><a href="kalvep.php">Kalendari veprimtarive</a></h3>
    </div>
  </div>
  
  
</div>



<br><a href="Dil.php"><input class="btndil" type="button" value="DIL"></a>

</body>
</html>