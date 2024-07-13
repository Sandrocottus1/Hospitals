<?php
$connection = mysqli_connect("localhost", "root", "", "hospital");

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$locationId = $_GET['location_id'];
$query = "SELECT id, name FROM hospital WHERE location_id = $locationId";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

$hospitals = [];
while ($row = mysqli_fetch_assoc($result)) {
    $hospitals[] = $row;
}
mysqli_close($connection);
header("Content-Type: application/json");
echo json_encode($hospitals);
?>
