<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //database table
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
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE Friend_Matcher";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>