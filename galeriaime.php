<?php
session_start();
require_once('Lidhjamedatabase.php');

?>

<html>
<head>
	<style>
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #DAA520;
}

.right {
  right: 0;
  background-color: #B8860B;
}
h2{
	text-align: center;
}


.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 155px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 150%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
</style>
</head>
<body>

<div class="split left">
	<h2>Këto janë thëniet e tua <?php echo ' '.$_SESSION['User'];?></h2>
  <table>	
	<tbody>
<?php
       $id=$_SESSION['ID'];
		$sql1="SELECT * FROM thenie WHERE IDperdorues='$id'";
			$result = mysqli_query($con, $sql1);

            if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
         $thisRow="<tr><th>Thenja jote:" . $row["thenie"]. "</th>";
         $thisRow.="<th><form action='galeriaime.php' method='post'><input type='hidden' name='hid' value='".$row["Id"]."'><input type='submit' name='fshi' value='Fshi'></form></th></tr>";
        echo $thisRow;
      }
      if(isset($_POST['fshi']))
		    	{
		    		$id=$_POST['hid'];
		    		$sql="DELETE FROM thenie WHERE Id=$id";
		    		if($result=mysqli_query($con, $sql))
		    			header("location:galeriaime.php");
		    		else
		    			echo "gabmi".mysqli_error($con);
		    	}
   } 
  else
    echo "Ju nuk keni asnjë thënie ne galerinë tuaj";

		   // mysqli_close($con);
		?>
	 </tbody>
   </table>	
</div>

<div class="split right">
	<div class="container">
  <img src="shporta.jpg"  alt="Shporta" style="width:90px">
  <h3>Shporta me thëniet e tua të preferuara:</h3>
</div>
   <?php
     $id=$_SESSION['ID'];
     $sql="SELECT thenie.thenie,preferuarat.IDthenies FROM((preferuarat INNER JOIN perdoruesi ON preferuarat.IDperdoruesit='$id')INNER JOIN thenie ON preferuarat.IDthenies=thenie.Id)";
      $result=mysqli_query($con,$sql);
      $count=mysqli_num_rows($result);
        $count=$count/10;
        if (mysqli_num_rows($result)>0) {
        	while ($row=mysqli_fetch_assoc($result)) {
        	   echo "<p>Te preferuarat:".$row['thenie']."</p><form action='galeriaime.php' method='post'><input type='hidden' name='hi' value='".$row["IDthenies"]."'><input type='submit' name='fsh' value='Hiqe'></form>";
        	   $count--;
        	   if ($count==0) 
        	   	  break;  
        	}
        }
     if(isset($_POST['fsh']))
		    	{
		    		$id=$_POST['hi'];
		    		$sql="DELETE FROM preferuarat WHERE IDthenies=$id";
		    		if($result=mysqli_query($con, $sql))
		    			header("location:galeriaime.php");
		    		else
		    			echo "gabmi".mysqli_error($con);
		    	}     
   ?>
</div>


</body>
</html>