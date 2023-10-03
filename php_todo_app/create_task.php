<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type');
header('Content-Type: application/json');


$server = "localhost";
$username = "root";
$password = "";
$dbname = "todo_db";

$conn = new mysqli($server, $username, $password, $dbname);

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];

$sql = "INSERT INTO tasks (name) VALUES ('$name')";
$result = $conn->query($sql);

echo json_encode(['result' => 'success']);
