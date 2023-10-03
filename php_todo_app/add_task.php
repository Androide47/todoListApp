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
$name = $data['name'];

// SQL query to add new task
$sql = "INSERT INTO tasks (name) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $name);
$result = $stmt->execute();

// Check for successful execution
if ($result) {
    echo json_encode(["message" => "Task successfully added", "id" => $conn->insert_id]);
} else {
    echo json_encode(["message" => "Failed to add task", "error" => $conn->error]);
}

// Close the connection
$stmt->close();
$conn->close();
?>
