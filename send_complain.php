<?php
include 'connect.php';

$id = $_POST['id'];

// Update the status to 'pending'
$sql = "UPDATE complain SET status = 'Pending' WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    // Redirect to the leader.php page
    header("Location: complain.php");
} else {
    echo 'Error: ' . $stmt->error;
}

$stmt->close();
$conn->close();
?>
