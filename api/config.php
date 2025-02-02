<?php
require_once 'config.php';

header('Content-Type: application/json');

$token = $_GET['token'] ?? '';
if($token !== API_SECRET) {
    die(json_encode(['error' => 'Invalid API token']));
}

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, 'hr_portal');
if ($conn->connect_error) {
    die(json_encode(['error' => 'DB Connection failed']));
}

$result = $conn->query("SELECT * FROM candidates");
$candidates = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode(['candidates' => $candidates]);
?>