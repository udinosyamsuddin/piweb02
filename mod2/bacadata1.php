 <?php
$servername = "localhost";
$username = "root";
$password = "qwerty13";
$dbname = "datasensor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, date, Temperature, Humidity FROM tempdata ORDER BY id DESC LIMIT 3 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Date: " . $row["date"]. " - Temp " . $row["Temperature"]. "- Humi ". $row["Humidity"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
