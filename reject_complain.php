<?php
include 'connect.php';

$id = $_POST['id'];

// Update the status to 'rejected'
$sql = "UPDATE complain SET status = 'rejected' WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    echo 'Complaint rejected successfully!';
} else {
    echo 'Error: ' . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect back to the complaints list after rejection
header("Location: complain.php");
exit();
?>
