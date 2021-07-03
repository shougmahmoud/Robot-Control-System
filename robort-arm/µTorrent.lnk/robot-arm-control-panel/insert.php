<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="motors";
// connect
$conn = new mysqli($servername, $username, $password ,$dbname);

// creating database with php 
$create_db = $conn->query("CREATE DATABASE motors");
//creating table
$create_table = $conn->query("CREATE TABLE info (`id` int(11) unsigned NOT NULL AUTO_INCREMENT, `motor1` INT, `motor2` INT, `motor3` INT, `motor4` INT, `motor5` INT, `motor6` INT, on1 INT, off1 INT,PRIMARY KEY (`id`))");

if(isset($save)){
	$sql= "INSERT INTO info (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6) VALUES('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6',)";
	mysqli_query($conn,$sql);
	header("Location: ../indx.html");
}

?>
