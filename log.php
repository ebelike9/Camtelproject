<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO login (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('sss', $username, $email, $password);
    if ($stmt->execute()) {
        header("Location: ./login.php");
    } else {
        echo 'Error: ' . $stmt->error;
    }
    $stmt->close();
} else {
    echo 'Error preparing statement: ' . $conn->error;
}

$conn->close();
?>
