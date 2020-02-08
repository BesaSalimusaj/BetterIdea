<?php
session_start();
require_once('Lidhjamedatabase.php');
$output="";
if (isset($_POST['btn'])) {
	$id=$_SESSION['ID'];
	$vep=$_POST['kalen'];
$sql="INSERT INTO kalendari(IDperdorues,Veprimtarite) VALUES('$id','$vep')";
    $result=mysqli_query($con,$sql);
    if ($result) {
    	$output="";
    }
    else
        $output="Dicka nuk shkoi mire".mysqli_error($con);
}


?>

<html>
<head>
<style>
	body {
  margin: 0; 
  background-image: url(thenie31.jpg);
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;

}
.divimadh{
  width: 700px;
  margin-left: 30px;
  padding: 100px;
  border: 5px solid gray;
}
.header {
  
  padding: 10px;
  margin-right:200px;
  text-align: center;
}
div.header h1{
  font-size: 45px;
  font-family: sans-serif;
  font-weight: bold;
   font-style: oblique;
}
div.prov{
	margin-left: 100px
}
.column{

  border: 5px solid gray;
  display: block;
  margin-left:25px;
  margin-right: auto;
}
</style>
</head>
<body>
	<div class="header">
  <h1>Krijo ditarin tënd personal:</h1>
</div>
<div class="prov">
<form action="kalvep.php" method="post">
	<textarea placeholder="Shkruaj ketu..." name="kalen" ></textarea><br><input type="submit" value="Shto ne ditar" name="btn">
</form></div>
<div><?php echo $output;?></div><br>

<div class="divimadh">
	<?php
	 echo "<p>Pershendetje:".$_SESSION['User']."</p>";?>
	<?php
	$id=$_SESSION['ID'];

	$query="SELECT * FROM kalendari WHERE IDperdorues='$id' ";
	if($result=mysqli_query($con,$query))
			$count=mysqli_num_rows($result);
		if($count>0){
		    	while ($row=mysqli_fetch_assoc($result)) {
		    	echo "<div class='column'><p>".$row["Data"]."<br>";
		    	echo " " .$row["Veprimtarite"]."<br><form action='kalvep.php' method='post'><input type='hidden' name='kujt' value='".$row["Id"]."'><input type='submit' name='fshij' value='Fshij kujtimin'></form></p></div><br>";
		    	}
		    }
		    if (isset($_POST['fshij'])) {
			$id=$_POST['kujt'];
			$sql="DELETE FROM kalendari WHERE Id='$id'";
			if ($resu=mysqli_query($con,$sql)) {
				header("location:kalvep.php");
			}
			else
				echo "me vje keq";
		}
?>
</div>

</body>
</html>