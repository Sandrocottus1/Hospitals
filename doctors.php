<?php
$connection = mysqli_connect("localhost", "root", "", "hospital");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$departmentId = $_GET['department_id'];
$query = "SELECT id, name FROM doctors WHERE department_id = $departmentId";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

$doctors = [];
while ($row = mysqli_fetch_assoc($result)) {
    $doctors[] = $row;
}
mysqli_close($connection);
header("Content-Type: application/json");
echo json_encode($doctors);
?>
