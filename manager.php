<?php
include 'connect.php';

// Fetch complaint counts by status
$sql_count = "SELECT 
                SUM(status = 'New') AS new_count,
                SUM(status = 'pending') AS pending_count,
                SUM(status = 'done') AS done_count,
                SUM(status = 'rejected') AS rejected_count
              FROM complain";
$count_result = $conn->query($sql_count);
$count_data = $count_result->fetch_assoc();

// Fetch recent complaints
$sql_recent = "SELECT * FROM complain ORDER BY id DESC LIMIT 5";
$recent_result = $conn->query($sql_recent);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        .stats {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .stat {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background-color: #f1f1f1;
        }
        .stat h3 {
            margin-bottom: 10px;
        }
        .stat span {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .table-container {
            margin-bottom: 20px;
        }
        .back-button {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="admin.php" class="btn btn-secondary back-button">Back to Admin</a>
    <h2 class="text-center text-primary">Dashboard</h2>

    <div class="stats">
        <div class="stat">
            <h3>New Complaints</h3>
            <span><?php echo $count_data['new_count']; ?></span>
        </div>
        <div class="stat">
            <h3>Pending Complaints</h3>
            <span><?php echo $count_data['pending_count']; ?></span>
        </div>
        <div class="stat">
            <h3>Done Complaints</h3>
            <span><?php echo $count_data['done_count']; ?></span>
        </div>
        <div class="stat">
            <h3>Rejected Complaints</h3>
            <span><?php echo $count_data['rejected_count']; ?></span>
        </div>
    </div>

    <div class="table-container">
        <h3 class="text-primary">Recent Complaints</h3>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Telephone</th>
                    <th>Address</th>
                    <th>Complaint</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($recent_result->num_rows > 0) {
                    while ($row = $recent_result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['fullname']}</td>
                                <td>{$row['telephone']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['complain']}</td>
                                <td>{$row['status']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No recent complaints found</td></tr>"; 
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="links">
        <a href="complain.php" class="btn btn-primary">View All Complaints</a>
        <a href="leader.php" class="btn btn-primary">View Pending and Rejected Complaints</a>
    </div>
</div>

</body>
</html>

<?php
$conn->close();
?>
