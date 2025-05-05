<?php
$servername = "localhost";
$username = "root"; // эсвэл өөр username
$password = "";     // XAMPP хэрэглэж байвал хоосон
$dbname = "users_table";

// Холболт үүсгэх
$conn = new mysqli($servername, $username, $password, $dbname);

// Холболт шалгах
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
