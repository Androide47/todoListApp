<?php
// Enable CORS, content-type and set allowed HTTP methods
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type');
header('Content-Type: application/json');

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    return 0;
}

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

// Get task data from POST request
$raw_data = file_get_contents("php://input");
$data = json_decode($raw_data, true);
$id = intval($data['id']);
$name = $data['name'];

// SQL query to update the task
$sql = "UPDATE tasks SET name = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $name, $id);
$result = $stmt->execute();

// Check for successful execution
if ($result) {
    echo json_encode(["message" => "Task successfully edited"]);
} else {
    echo json_encode(["message" => "Failed to edit task", "error" => $conn->error]);
}

// Close the connection
$stmt->close();
$conn->close();
?>
