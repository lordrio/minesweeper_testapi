<?php
$servername = "43.255.154.110";
$username = "sweep";
$password = "12345";
$db = "minesweeper_demo";
$table = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// select last 10
$sql = "INSERT INTO `".$db."`.`demo` (`id`, `created_by`, `data`, `solve_time`) VALUES (NULL, '".$_POST["created_by"]."', '".$_POST["data"]."', '".$_POST["solve_time"]."')";
$result = $conn->query($sql);
$conn->close();

echo json_encode(["result"=> "success"]);

?>