<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the password from the request
    $password = $_POST['password'];

    // Check if the password is correct
    if ($password === '1234') {
        // Return a JSON response indicating success
        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
        exit;
    } else {
        // Return a JSON response indicating failure
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Incorrect password']);
        exit;
    }
}
?>
