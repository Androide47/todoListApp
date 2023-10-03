<?php
// Enable CORS, content-type and set allowed HTTP methods
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type');
header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_db";

// Create and check database connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all tasks
$sql = "SELECT id, name FROM tasks";
$result = $conn->query($sql);

// Create array to store tasks
$tasks = [];

if ($result->num_rows > 0) {
    // Output each row into array
    while($row = $result->fetch_assoc()) {
        $tasks[] = [
            'id' => $row['id'],
            'name' => $row['name']
        ];
    }
}

// Close the connection
$conn->close();

// Convert tasks array to JSON and print
echo json_encode($tasks);
?>
