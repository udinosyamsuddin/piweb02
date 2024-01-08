<?php
session_start();
if(isset($_SESSION['views'])) {
include "db.php"; 

?>

<?php

$date = date("d-m-Y H:i:s");

if (isset($_POST['temp']) AND isset($_POST['hum']) AND isset($_POST['status']))
{
$temp = $_POST['temp'];
$hum = $_POST['hum']; 
$st = $_POST['status']; 

$sql = "INSERT INTO tempdataB (date, Temperature, Humidity, status) 
        VALUES ('$date', '$temp', '$hum', '$st')";
		
		
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


 <form action="editpage.php" method="POST" > 
 
 <table>
 <tr>
  <td><a href="adjust.php" target="_self">Adjust Real time Data</td>
   <td> | <a href="closeB.php" target="_self">Close Browser</td>
 </tr>
  <tr>
    <td><b>Pilih data : </b></td>
    <td></td>
  </tr>
  <tr>
    <td>Realtime</td>
    <td><input type="radio" id="A" name="status" value="A" checked="checked"></td>
  </tr>
  <tr>
    <td>Manual</td>
    <td><input type="radio" id="B" name="status" value="B" ></td>
  </tr>
  <tr>
    <td>Temperature</td>
    <td><input  name="temp" id="temp" type="number" min="1" max="100" value="" class="wd"> C</td>
  </tr>
  <tr>
    <td>Humidity</td>
    <td><input  name="hum" id="hum" type="number" min="1" max="100" value="" class="wd"> %</td>
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
			*) Pilih Realtime untuk data realtime sensor yang lain kosongkan dan submit<br >
			**) Pilih Manual untuk data manual sensor dan isi nilai temp serta humidity selanjutnya submit
			                     
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
