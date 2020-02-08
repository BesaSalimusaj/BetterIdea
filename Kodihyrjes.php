<?php
session_start();
require_once('Lidhjamedatabase.php');
if(isset($_POST['hyr'])){
	$emri=$_POST['User'];
	$pas=$_POST['Pass'];
	//$pas=md5($pas);


   $sql="SELECT * FROM perdoruesi WHERE Emri='$emri' AND Fjalekalimi='$pas'";
   $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
      $_SESSION['User']=$emri;
      $row= mysqli_fetch_assoc($result);
      $_SESSION['ID']=$row['ID'];
      //$_SESSION['ID']=$ID;
      header("location:faqja2.php");
    }
    else
    	echo "Nuk ekziston";

if (isset($_Get['logout'])) {
	session_unregister('User');
}
}
 ?>