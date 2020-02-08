<?php
$out="";
session_start();
require_once('Lidhjamedatabase.php');

if (isset($_POST['submit'])) {
  $id=$_SESSION['ID'];
  $target_path="images/";
  $target_path=$target_path.basename($_FILES['foto']['name']);
  if (move_uploaded_file($_FILES['foto']['tmp_name'],$target_path)) {
  	$sql="INSERT INTO foto(Path,IDperdoruesit) VALUES ('$target_path','$id')";
  	if($result=mysqli_query($con,$sql))
  		header("location:foto.php");
  	else
  		echo "error".mysqli_error($con);
  }
}
?>

<html>
<head>
	  <style type="text/css">
  body{
  	background-color:rgb(255, 249, 230);
  }
.div1 {
	border:double;
	padding-top: 10px;
    padding-right: 300px;
    padding-bottom:0;
    padding-left: 250px;
    text-align: center;
    background-color:rgb(255, 242, 204);
    }
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body><div class="div1">
<form action="foto.php" method="post" enctype="multipart/form-data">
	<label>
		<b>Ngarko një foto:</b>
	</label>
	<input type="file" name="foto" required="on" ><input type="submit" name="submit" value="Ngarko"><br>
</form></div>
<div>
<?php
   $id=$_SESSION['ID'];
  $sql1="SELECT * FROM foto";
   $result1=mysqli_query($con,$sql1);
   if(mysqli_num_rows($result1)>0){
   	while ($row=mysqli_fetch_assoc($result1)) {
   		$pathi=$row['Path'];
   		$idp=$row['IDperdoruesit'];
   		if($id==$idp){
   		echo "<div class='gallery'><img src='$pathi' height='400' width='600'><div class='desc'><form method='post' action='foto.php'><input type='hidden' name='fshirje' value='".$row['Id']."'><input type='submit' name='hiq' value='Fshije'></form></div></div>";
   	}
   	else
   		echo "<div class='gallery'><img src='$pathi' height='400' width='600'<div class='desc'><p>Hope you like!</p></div></div>";

   }
}
if(isset($_POST['hiq']))
		    	{
		    		$id=$_POST['fshirje'];
		    		$sql="DELETE FROM foto WHERE Id=$id";
		    		if($result=mysqli_query($con, $sql))
		    			header("location:foto.php");

		    		else
		    			echo "gabmi".mysqli_error($con);
		    	}
   
 
  
?>
</div>


</body>
</html>