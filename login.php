<?php
//session_destroy();
include "db.php"; 
$date = date("d-m-Y H:i:s");

if (isset($_POST['password']))
	
{
	$nilai = md5($_POST['password']);
	
			$sql = "SELECT * FROM switch";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				  if ( $nilai > 0 AND $nilai == $row["key"] ){
					echo "id: " . $row["id"]. "<br>"; 
					session_start();
					$_SESSION['views'] = md5($pass); // store session data
					echo "session = ". $_SESSION['views']; //retrieve data
					header("location: adjust.php");
					
				  }
				  else{
					 // echo "password salah";
				  }
				  
				  
				
			  }
			} else {
			  //echo "password salah";
			  session_destroy();
			}
			$conn->close();
}
else
{
//echo "password salah";
//session_destroy();
}


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

 <title>--</title>
			
<!--		
<script src="./js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
-->
<link href="./css/numpad.css" rel="stylesheet">
   
    <script src="./js/numpad.js"></script>  


  
  
  
  

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
  

</head>

<body>


 <form action="login.php" method="POST" > 
 
 <table>

    <td></td>
    <td><input  name="password" type="text" min="1" max="100" id="demo-numpad-1"> 
	 
	
	</td>
  </tr>
  
  <tr>
     <td></td>
    <td><input type="submit" value="Submit"></td>
   
  </tr>
 

</table>			
        </form>
		
		
		
		
		<!--<input type="text" id="demo-numpad-1"/>-->

		<script>
      window.addEventListener("load", function(){
        // Bare minimum - provide the ID
        numpad.attach({
		  id : "demo-numpad-1",
		  max : 3
        });
        // The options
        numpad.attach({
          id : "demo-numpad-2",
          // The target field will be set to "readonly" by default
          // This is to prevent the default onscreen keyboard from showing up on mobiles
          // Use this with extra care
          readonly : false, 
          // Allow decimal points? True by default
          decimal : false,
          // Maximum allowed characters, 16 by default
          // Feel free to modify the script to set a maximum allowed number instead
          max : 2
        });
      });
    </script>
<br />
<br />
<a href="shut.php">Shutdown Here</a>
<br />
<br />
<a href="clear.php">Clear data sensor</a>
<br />
<br />
<form action='#' method='post' name='my_form'>
<input type="button" value="Refresh"  onclick="closeSelf();"/>
</form>
<script>
  //window.onunload = refreshParent;
  //function refreshParent() {
    //window.opener.location.reload();
 // }
  function closeSelf(){
    document.forms['my_form'].submit();
   window.opener.location.reload();
	 window.close();   
  }
</script>

</body>

</html>
