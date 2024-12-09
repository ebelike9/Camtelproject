<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Check for admin credentials first
if ($username === 'admin' && $password === 'admin') {
    header("Location: ./admin.php");
    exit(); // Ensure script stops executing after redirection
}

// Check for manager credentials
if ($username === 'manager' && $password === 'manager') {
    header("Location: ./dashboard.php");
    exit(); // Ensure script stops executing after redirection
}

$sql = "SELECT password FROM login WHERE username=?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        header("Location: ./leader.php"); // Redirect to user dashboard or another page
        exit(); // Ensure script stops executing after redirection
    } else {
        echo 'Invalid username or password.';
    }

    $stmt->close();
} else {
    echo 'Error preparing statement: ' . $conn->error;
}

$conn->close();
?>
