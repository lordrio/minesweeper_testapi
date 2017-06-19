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

// INSERT INTO `minesweeper_demo`.`demo` (`id`, `created_by`, `data`, `solve_time`) VALUES (NULL, 'asdasda', 'sadasdasd', '212');
// select last 10
$sql = "SELECT id, created_by, data, solve_time FROM ". $table . " order by id desc limit 10";
$result = $conn->query($sql);
$res = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["created_by"]. " " . $row["data"]. "<br>";
        array_push($res, $row);
    }
} else {
    echo json_encode(["data" => $res]);
}
$conn->close();

echo json_encode(["data" => $res]);

?>