<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymwebsite";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$muscleGroup = isset($_GET['muscleGroup']) ? $_GET['muscleGroup'] : '';


$sql = "SELECT * FROM exercice WHERE muscleGroup = '$muscleGroup'";
$result = $conn->query($sql);

$exercises = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $exercises[] = $row;
    }
}

echo json_encode($exercises);

$conn->close();
?>
