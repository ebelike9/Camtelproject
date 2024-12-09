<?php
include 'connect.php';

$id = $_POST['id'];

// Update the status to 'Done'
$sql = "UPDATE complain SET status = 'Done' WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    echo 'Complaint validated successfully!';
} else {
    echo 'Error: ' . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect back to the leader.php page after validation
header("Location: leader.php");
exit();
?>
