<!--Lidhja me database:-->
<?php
$con=mysqli_connect("localhost","root","","projekti");
  
  if(!$con){
  	echo "Lidhja me database nuk mund te behet";
  }
?>