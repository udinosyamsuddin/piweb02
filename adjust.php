<?php
session_start();
if(isset($_SESSION['views'])) {
include "db.php"; 

?>

<?php

$date = date("d-m-Y H:i:s");

if (isset($_POST['tmp']) AND isset($_POST['hmd']) )
{
$temp = $_POST['tmp'];
$hum = $_POST['hmd']; 


$sql = "UPDATE adjust SET tmp='$temp' , hdy='$hum' WHERE id = 1";
		
		
if ($conn->query($sql) === TRUE) {
  echo "
  <table><tr><td>
  Update data berhasil 
  </td></tr></table>";
  //header("refresh:2; url=editpage.php");
  session_destroy();
  header("location: login.php");  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}		
$conn->close();

}
else
{
   //echo "Maaf, anda harus mengakses halaman ini dari form.html";
}
//echo "
//<table><tr><td>"
//.$date."
 // </td></tr></table>";





?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<link rel="stylesheet" href="./css/jquery.nice-number.min.css">
		
		<script src="./js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		 <script src="./js/jquery.nice-number.js"></script>
<script type="text/javascript">
    $('input[type="number"]').niceNumber();
	
  </script>
  

  <style>
table {
  border-collapse: collapse;
   font-size: 14px;
   font-family: "Times New Roman", Times, serif;
}

table, td, th {
  border: none;
}

input.wd  {
  width: 100px;
  border : 2px solid #efefef;
}
</style>
  

	 <title>--</title>
	
</head>

<body>


 <form action="adjust.php" method="POST" > 
 
 <table>
 <tr>
  <td><a href="editpage.php" targer="_self">Pilih Data</a></td>
  
  <td> | <a href="closeB.php" target="_self">Close Browser</td>
 </tr>
 <tr>
    <td><b>Adjust data : </b></td>
    <td></td>
  </tr>
    <tr>
    <td>Temperature</td>
    <td><input  name="tmp" id="temp" type="number" min="-100" max="100" value="0" class="wd"> C</td>
  </tr>
  <tr>
    <td>Humidity</td>
    <td><input  name="hmd" id="hum" type="number" min="-100" max="100" value="0" class="wd"> %</td>
  </tr>
  <tr>
     <td></td>
    <td><input type="submit" value="Submit"></td>
   
  </tr>
 

</table>			
        </form>
		<table>

			<tr>
			<td>
			*) Adjust hanya berlaku untuk data <B>Realtime</B> saja 
                        **) Masukkan nilai selisisih yang akan ditambahkan atau dikurangkan dari nilai realtime yang ada<br >
			***) Jika ingin ke nilai sensor tanpa adjust masukkan nilai<B>0</B> dan submit<br /> 
                        </td>
			</tr>
			</table>
		
		
		





</body>

</html>
<?php
}	
else
{
	//echo "salah";
	session_destroy();
	header("location: login.php");
}
?>
