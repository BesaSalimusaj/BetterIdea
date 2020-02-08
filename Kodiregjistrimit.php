<?php
session_start();
require_once('Lidhjamedatabase.php');
$emri=$email=$pwd='';

if(isset($_POST['regjistrohu'])){
$emri=$_POST['Emri'];
$email=$_POST['Email'];
$pwd=$_POST['Fjalekalimi'];
//$pass=md5($pwd);
$qu="SELECT * FROM perdoruesi WHERE Emri='$emri' AND Email='$email' AND Fjalekalimi='$pwd'";
$re=mysqli_query($con,$qu);
if (mysqli_num_rows($re)==1)
	header("location:Bismilah2.php?error=Kjoadreseeshteperdornjeher");
else
	if(!preg_match("/^[a-zA-Z]/",$emri))
	header("location:Bismilah2.php?error=gabimkarakteripareduhettejeteshkronje");
else 
	if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) 
		header("location:Bismilah2.php?error=emailgabim");
else
	if (strlen($pwd)<6)
		header("location:Bismilah2.php?error=fjalekalimiduhettejetetepakten6karaktere");

else{
$sql="INSERT INTO perdoruesi(Emri,Email,Fjalekalimi) VALUES ('$emri','$email','$pwd')";
$result=mysqli_query($con,$sql);
 if($result){
 	//echo "U regjistrua me sukses";
 	$_SESSION['User']=$emri;
 	header("location:faqja2.php");
    
 }
 else
 	echo "Gabim:".mysqli_error($con);

  }
}
?>

