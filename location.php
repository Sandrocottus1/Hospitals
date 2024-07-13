<?php
// Connect to your MySQL database
$connection = mysqli_connect("localhost", "root", "", "hospital");

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch locations from the database
$query = "SELECT id, name FROM locations";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

$locations = [];
while ($row = mysqli_fetch_assoc($result)) {
    $locations[] = $row;
}

// Close the database connection
mysqli_close($connection);

// Return data as JSON
header("Content-Type: application/json");
echo json_encode($locations);
?>
