<?php
$servername = "projedbinstance.cxzky9x7h5eg.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "master1234";
$dbname = "proje";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql_table = "CREATE TABLE visitors (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
phone VARCHAR(30),
photo VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    
if ($conn->query($sql_table) === TRUE) {
    echo "Table visitors created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
    
$conn->close();
?>