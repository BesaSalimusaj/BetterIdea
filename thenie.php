<?php
session_start();
require_once('Lidhjamedatabase.php');
$output="";

if (isset($_POST['shto'])) {
	$then=$_POST['thenia'];
  $kategori=$_POST['kategoria'];
//	$emri=$_SESSION['User'];
  $id=$_SESSION['ID'];
	//$sql="INSERT INTO thenie(IDperdorues,Thenie) VALUES ((SELECT ID from perdoruesi WHERE Emri='$emri'),'$then')";
  $sql="INSERT INTO thenie(IDperdorues,IDkategoria,Thenie) VALUES('$id',(SELECT ID from kategoria WHERE Emri_Kategorise='$kategori'),'$then')";
    $result=mysqli_query($con,$sql);
    if ($result) {
    	$output="U krye";
    }
    else
        $output="Dicka nuk shkoi mire".mysqli_error($con);
}

?>
<html>
<title>THENIE</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.hapi1{
		border: 10px solid black;
        margin-top: 45px;
        margin-bottom: 15px;
        margin-right: 150px;
        margin-left: 80px;
        background-color: #DEB887;
        text-align: relative;
        font-size:25px;
  font-family: sans-serif;
  font-weight: bold;
   font-style: oblique;
	}
  .nenhapi1{
    text-align: right;
    margin-top: 25px;
  }

    .hapi2{
    	margin-top: 50px;
        margin-bottom: 25px;
        margin-left: 1200px;
        color: #DEB887;
    }


    * {box-sizing: border-box;}
/* The popup chat - hidden by default */
.kutia-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 1;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background:  #DEB887;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color:  #DEB887;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #DEB887;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.shfaqje{
   border: 10px solid black;
  background-size: cover;
  /*background-image: url(flete.jpg);*/
  background-color:#DEB887 ;
  background-repeat: no-repeat;
  padding:250px;
  margin-right: 150px;
  margin-left: 80px;
  background-position: center;
  * {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #f1f1f1;
  color: brown;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

}/*body{
  background-image: url(body1.jpg);
  background-size: cover;
}*/

</style>
<body>
<div class="hapi1">
  <div class="nenhapi1">
  <a href="galeriaime.php"><input type="button" value="Galeria ime"></a>
</div>
	Zbukuroje ditën me një thënie të mencur:
</div>

<div class="shfaqje">
   <form class="example" action="thenie.php" method="post" style="margin:auto;max-width:300px">
     <select name="kateg">
            <option>Zgjidh kategorinë</option>
            <option value="Fjaleteurta">Fjale te urta</option> 
            <option value="Koha">Koha</option>
            <option value="Edukim">Edukimi</option>
            <option value="Familja">Familja</option>
            <option value="Inspirim">Inspirim</option>
            <option value="Eksperienca">Eksperienca</option>
            <option value="Deshtime">Deshtime</option>
            <option value="Liria">Liria</option>
            <option value="Dashuria">Dashuria</option>
            <option value="Jeta">Jeta</option>
            <option value="Lidhjet">Lidhjet</option>
            <option value="Bukuria">Bukuria</option>
        </select>
  <!--<input type="text" placeholder="Zgjidhni kategorinë..." name="kateg">-->
  <button type="submit" name="zgjidh"><i class="fa fa-search"></i></button>
</form><br>
 <?php echo $output;?>
	<!--<table>
	<thead>
		<tr>
			<th>Thenia:</th>
		</tr>
	</thead>
	<tbody>-->
<?php
$output="";
 $id=$_SESSION['ID'];
   if (isset($_POST['zgjidh'])) {
       $kat=$_POST['kateg'];
    $query="SELECT * FROM thenie WHERE IDkategoria= (SELECT ID from kategoria WHERE EMRI_Kategorise='$kat') ORDER BY RAND() LIMIT 10";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
        echo "".$row["thenie"]."<form action='thenie.php' method='post'><input type='hidden' name='hd' value='".$row["Id"]."'><input type='submit' name='shtopre' value='Me pelqen'></form><br>";
      }
    }
         /*echo "<form action='galeriaime.php' method='post'>".$row['thenie']."<input type='checkbox' name='check_list[]' value='".$row["thenie"]."'><br>";
        }
      echo "<input type='submit' value='Te_Preferuarat' name='submit'</from>";
    }*/

    else
      echo "Me vjen keq,akoma askush nuk ka shtuar thenie ne kete kategori";
  }
  
  
  if (isset($_POST['shtopre'])) { 
    $id2=$_POST['hd'];
    $sql="INSERT INTO preferuarat (IDperdoruesit,IDthenies) VALUES('$id','$id2')";
    $result=mysqli_query($con,$sql); 
    if ($result=mysqli_query($con,$result)) {
      $output="U shtua tek të preferuarat e tua";
    }
  }
 

       
?>
	<!--</tbody>
</table>	-->
<!--<div>
  <a href="galeriaime.php"><input type="button" value="Galeria ime"></a>
</div>-->

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</div>

</div>


<div class="hapi2">Shto thënie:<button class="w3-button w3-xlarge w3-circle w3-brown w3-card-4" onclick="openForm()">+</button>
<div class="kutia-popup" id="myForm">
  <form action="thenie.php" method="post" class="form-container">
    <h1>Thënie e re!<div></div></h1>

    <label for="thenia"><b>Faleminderit për kontributin tuaj<?php echo ' '.$_SESSION['User'];  ;?></b></label>
    <textarea  placeholder="Shkruaj këtu.." name="thenia" required><?php echo $output;?></textarea>
    <!--<textarea  placeholder="zgjidh kategorine" name="kategoria"></textarea>-->
    <select name="kategoria">
            <option>Zgjidh kategorinë</option>
            <option value="Fjaleteurta">Fjale te urta</option> 
            <option value="Koha">Koha</option>
            <option value="Edukim">Edukimi</option>
            <option value="Familja">Familja</option>
            <option value="Inspirim">Inspirim</option>
            <option value="Eksperienca">Eksperienca</option>
            <option value="Deshtime">Deshtime</option>
            <option value="Liria">Liria</option>
            <option value="Dashuria">Dashuria</option>
            <option value="Jeta">Jeta</option>
            <option value="Lidhjet">Lidhjet</option>
            <option value="Bukuria">Bukuria</option>
        </select>
    <button type="submit" name="shto" class="btn">Shto</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Mbyll</button>
  </form>
</div></div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


</body>
</html> 