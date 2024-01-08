<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Sistem Monitoring</title>
<link rel="stylesheet" href="./css/sensor.css">

<script src="./js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="./js/eocjs-newsticker.js"></script>
<script src="./js/script.js"></script>
<script src="./js/jquery.bpopup.min.js"></script>


<!---clock-->
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ];
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



<!---koneksi ke db--->

<?php include "db.php"; ?>

<!--<script>
setTimeout(function(){
   window.location.reload(1);
}, 5000);
</script>-->



<!---running text-->
<script type="text/javascript">
$(document).ready(function() {

  $("#runtext").eocjsNewsticker({
    speed: 40, /*speed text*/
    timeout: 0.5
  });

});

</script>

<!---pop up-->
<script type="text/javascript">
  
        function createPopupWin(pageURL, pageTitle, 
                    popupWinWidth, popupWinHeight) { 
            var left = (screen.width ) ; 
            var top = (screen.height ) ; 
            var myWindow = window.open(pageURL, pageTitle,  
                    'resizable=yes, width=' + popupWinWidth 
                    + ', height=' + popupWinHeight + ', top=' 
                    + top + ', left=' + left); 
        } 
   
     
</script>
	
	
<!---auto refesh -->
<script>
      setInterval(function() {
            $("#div_refresh").load("sensorrealtime.php");
        }, 1000);
      setInterval(function() {
            $("#resetdate").load("date.php");
      	}, 1000);
		 
 
</script>



</head>
<body>
<!----bagian kiri untuk gambar--->
<!--
 <div class="kiri">
    <a href="refresh.php"><image class="gbr" src="gambar1.jpg"></a>
     
 </div>-->
  <div class="kiri">
    <image class="gbr" src="gambar6.jpg">
 </div>

  </div>


  <div class="kanan"> <!---agar jam jadi ketengah -->
  <!--<div class="kanan">--> <!---agar jam jadi ketengah -->

    <div class="box_atas"></div>
    <!---digital date-->
    <div class="box">
      <!--<div id="Date"></div>-->
          <div id="resetdate"></div>
        <ul>
            <li id="hours"></li>
            <li id="point">:</li>
            <li id="min"></li>
            <li id="point">:</li>
            <li id="sec"></li>
        </ul>

    </div>
    <div class="box_batas"></div>

   <!--data sensor -->
	  <div>
	  <div id="div_refresh"></div>
  <!---end data sensor -->

      <div class="clear"></div>
      

    </div>



    <div class="box_batas"></div>


 <!---stopwatch-->

    <div class="box">

      <!---stopwatch-->
      <div id="jquery-script-menu"></div>

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

  </div>
  


  <div class="clear"></div>
  
  
  <div>refresh here</div>  <div class="logo">
  
   <a href="#" onclick="createPopupWin('editpage.php', 
            'edit page', 300, 250);"><img src="logox.jpg" class="logo"></a>
 
  </div>
  


  <div class="footer">

  <div id="runtext">

    <?php include "runtext.php"; ?>

  </div>


</div>
<!--</div>-->




</body>
</html>
