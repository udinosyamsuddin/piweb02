<!DOCTYPE html>
<?php include 'db.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sensor.css">
    <script src="./js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <script src="./js/equalcolumns.js" type="text/javascript"></script>


<!--<script type="text/javascript">
    $(document).ready(function(){
		 $("#div_refresh").load("baca.php");
		 $("#div_refresh2").load("baca-2.php");
        setInterval(function() {
            $("#div_refresh").load("baca.php");
			$("#div_refresh2").load("baca-2.php");
    }, 25);
    });
	</script>-->


<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12" ];
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year
$('#Date').html(newDate.getDate() + ' / ' + monthNames[newDate.getMonth()] + ' / ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);

setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);

setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
});
</script>





</head>
<body>


 <div id=container>

 <div class="row">

   <!---kolom kanan-->
  		<div class="column"><!---content kiri--->

    <!-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/gIB2egm7tL8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    -->


      </div>

    <!---kolom kanan-->
 		 <div class="column2">
			 <div id="box1">
		     <div class="tanggal">
			 <?php
			// $tanggal = date("d - m - Y");
			 //echo $tanggal;
		     ?>


         <div id="Date"></div>
           <ul>
               <li id="hours"></li>
               <li id="point">:</li>
               <li id="min"></li>
               <li id="point">:</li>
               <li id="sec"></li>
           </ul>




		     </div>
		     </div>
			 <div class="clear"></div>
			 <div id="box1">

			 <!---sensor--->
				 <?php //include "baca-sensor"; ?>
				 <div class="data-sensor">
        <!--<div id="div_refresh"></div>-->

<?php
$sql = "SELECT id, date, Temperature, Humidity  FROM tempdata ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
?>

    


           <div class=temp> Temp : </div>
           <div class=data_temp>  
<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row['id'].'  &#8451;';
  

?>	    
     
	     
	     
	     
	   </div>
           <div class="clear"></div>

           <div class=temp> Humi : </div>
           <div class=data_temp>
	   
<?php
echo $row['Humidity'].'  &#x25;';

}

} else {
  echo "0 results";
}
$conn->close();


?>
	   
	   
	   </div>
           <div class="clear"></div>



				<!--		<div id="div_refresh"></div>



					<div id="div_refresh2"></div>-->


				 </div>




			 </div>
			 <div class="clear"></div>
			 <div id="box2">
       <!---stopwatch-->
       <div id="jquery-script-menu">


           </div>


           <section class="clock">
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 input-wrapper">

                         <div class="buttons-wrapper">
                             <button class="btn" id="start-cronometer">Start Stopwatch</button>
                             <button class="btn" id="start-countdown">Start Countdown</button>
                         </div>



                           <div class="input">
                               <input type="number" id="num" class="form-control" min="0">
                               <select id="measure" class="form-control">
                                   <option value="0">Select Unit</option>
                                   <option value="s">Seconds</option>
                                   <option value="m">Minutes</option>
                                   <option value="h">Hours</option>
                               </select>
                           </div>

                       </div>

                       <div id="timer" class="col-12">

                         <div class="buttons-wrapper">
                           <button class="btn" id="resume-timer">Resume</button>
                           <button class="btn" id="stop-timer">Stop</button>
                           <button class="btn" id="reset-timer">Reset</button>
                         </div>


                         <div class="clock-wrapper">
                             <span class="hours">00</span>
                             <span class="dots">:</span>
                             <span class="minutes">00</span>
                             <span class="dots">:</span>
                             <span class="seconds">00</span>
                         </div>
                       </div>

                   </div>
               </div>
           </section>






			 </div>

	     </div>

      <div class="clear"></div>
</div>

</div>



</body>
</html>
