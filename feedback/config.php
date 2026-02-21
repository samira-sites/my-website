<?php
$host = "localhost";         
$db   = "samiraomar_feedback_db";
$user = "samiraomar_samiraomar";  
$pass = "Alhamdulillah88#"; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
