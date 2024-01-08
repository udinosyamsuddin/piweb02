<?php
session_start();
if(isset($_SESSION['views'])) {
include "db.php"; 

?>

<?php

$date = date("d-m-Y H:i:s");

if (isset($_POST['cls']))
{
$cls = $_POST['cls'];

  session_destroy();
  exec("sudo python /var/www/html/tutup.py");
  echo "done";
  
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


 <form action="closeB.php" method="POST" > 
 
 <table>
 <tr>
  <td><a href="editpage.php" target="_self">Pilih Data</a> |  <a href="adjust.php" target="_self">Adjust Real time data</a></td>
 </tr>
  <tr>
    <td><b>Klik untuk close browser : </b></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="hidden" id="cls" name="cls" value="cls"></td>
  </tr>
  
    <td><input type="submit" value="close"></td>
   
  </tr>
 

</table>			
        </form>
	
		
		





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

