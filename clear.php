<?php
 $servername = "localhost";
            $username = "user1";
            $password = "qwerty13";
            $dbname = "datasensor";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }


            $deleterecords = "TRUNCATE TABLE tempdata"; //empty the table of its current records
mysqli_query( $conn, $deleterecords );
//header('Location: index.php');
 echo "done";
    exit();
?>
