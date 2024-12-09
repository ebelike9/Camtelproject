<?php
include 'connect.php';

$name = $_POST['name'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$complaint = $_POST['complaint'];
$status = $_POST['status']; // Retrieve the status from the form

$sql = "INSERT INTO complain (fullname, telephone, address, complain, status) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('sssss', $name, $telephone, $address, $complaint, $status); // Bind the status parameter
    if ($stmt->execute()) {
        header("Location: ./complain.php");
    } else {
        echo 'Error: ' . $stmt->error;
    }
    $stmt->close();
} else {
    echo 'Error preparing statement: ' . $conn->error;
}

$conn->close();
?>
