<?php
$connection = mysqli_connect("localhost", "root", "", "hospital");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$hospitalId = $_GET['hospital_id'];
$query = "SELECT id, dep FROM department WHERE hospital_id = $hospitalId";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
$departments = [];
while ($row = mysqli_fetch_assoc($result)) {
    $departments[] = $row;
}
mysqli_close($connection);
header("Content-Type: application/json");
echo json_encode($departments);
?>
