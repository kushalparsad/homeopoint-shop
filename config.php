<?php
$host = "localhost";
$user = "root";        // XAMPP default user
$pass = "";            // agar tumne MySQL ka password nahi lagaya to blank hi rakho
$db   = "homeopoint";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
