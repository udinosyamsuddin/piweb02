<?php
session_destroy();
header("location: login.php");
exec("sudo python /var/www/html/tutup.py");
?>
