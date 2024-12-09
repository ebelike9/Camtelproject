<?php
include 'connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM complain WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);

if ($stmt->execute()) {
    echo 'Complaint deleted successfully!';
} else {
    echo 'Error: ' . $stmt->error;
}

$stmt->close();
$conn->close();

// Redirect back to the complaints list after deletion
header("Location: complain.php");
exit();
?>
