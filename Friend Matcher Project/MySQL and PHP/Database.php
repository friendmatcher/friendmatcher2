<?php
$servername = "servername";
$username = "username";
$password = "password";

// Connection
$conn = new mysqli($servername, $username, $password);
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//table created
$spl= CREATE TABLE MyUsers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
age INT() NOT NULL,
personalitytype VARCHAR(30) NOT NULL,
class INT(3) NOT NULL,
hobby INT(3) NOT NULL,
color INT(4) NOT NULL,
favoritenumber INT() NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)


// database is created
$sql = "CREATE DATABASE friendMatcher";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>