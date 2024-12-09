<?php
include 'connect.php';

// Fetch complaints with status "pending" or "rejected"
$sql = "SELECT * FROM complain WHERE status IN ('pending', 'rejected')";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending and Rejected Complaints</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
        }
        table th, table td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-group {
            display: flex;
            justify-content: center;
        }
        .btn-group form {
            display: inline-block;
        }
        .btn-group button {
            margin: 0 5px;
        }
        .back-button {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="admin.php" class="btn btn-secondary back-button">Back</a>
    <h2 class="text-center text-primary">Pending and Rejected Complaints</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Complaint</th>
                <th>Status</th> <!-- Display Status -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['fullname']}</td>
                            <td>{$row['telephone']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['complain']}</td>
                            <td>{$row['status']}</td> <!-- Display Status -->
                            <td class='btn-group'>
                                <form action='view_complain.php' method='post'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' class='btn btn-primary'>View</button>
                                </form>
                                <form action='validate_complain.php' method='post'>
                                    <input type='hidden' name='id' value='{$row['id']}'>
                                    <button type='submit' class='btn btn-success'>Validate</button>
                                </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>No pending or rejected complaints found</td></tr>"; 
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
