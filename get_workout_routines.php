<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymwebsite";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bodyPart = $_GET['bodyPart']; 

$sql = "SELECT * FROM workoutroutines WHERE bodyPart = '$bodyPart'";
$result = $conn->query($sql);

$workoutRoutines = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $workoutRoutine = $row;
        $workoutRoutine['exercises'] = array();

       
        $workoutId = $row['id'];
        $exerciseSql = "SELECT * FROM exerciseinworkout WHERE workout_id = '$workoutId'";
        $exerciseResult = $conn->query($exerciseSql);

        if ($exerciseResult->num_rows > 0) {
            while ($exerciseRow = $exerciseResult->fetch_assoc()) {
                $workoutRoutine['exercises'][] = $exerciseRow;
            }
        }

        $workoutRoutines[] = $workoutRoutine;
    }
}

echo json_encode($workoutRoutines);

$conn->close();
?>
