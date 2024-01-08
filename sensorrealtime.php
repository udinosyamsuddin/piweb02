<?php include "db.php"; ?>

<?php
	   $sql = "SELECT * FROM tempdataB ORDER BY id DESC LIMIT 1";
       $result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {
    $ini =  ($row["status"]);
	//echo $ini;
	if ($ini == 'B') 
	{
?>
      <div class="box">
      <div class=temp> Temp :  </div>
      <div class=data_temp> 
	<?php
	
	   //echo "tabel B";
       echo  number_format($row["Temperature"]). " &#8451;";
	  // echo "test";
	 ?>
       </div>
      <div class="clear"></div>

      <div class=temp> Humi : </div>
      <div class=data_temp> 

     <?php

   	 echo  number_format($row["Humidity"]). " %";
	}else{
    
	/*---select tabel2 -*/
	
					$sql = "SELECT * FROM tempdataB ORDER BY id DESC LIMIT 1";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {

					while($row = $result->fetch_assoc()) {
						
					?>
						<div class="box">
						<div class=temp> Temp : </div>
						<div class=data_temp> 					
                
					<?php
					
					//echo "tabel A";
					echo  number_format($row["Temperature"])."&#8451;"
					// ."&#8451;"
					?>
					</div>
					<div class="clear"></div>

					<div class=temp> Humi : </div>
					<div class=data_temp> 
                    

<?php
					echo  number_format($row["Humidity"]). " %";
					
				
	


		
	/*--akhir select--*/
    }
	
	} else {
		
	}
	
	
	
	
	
}
	}
}
	
	?>
