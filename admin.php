<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camtel - Options</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        .title {
            font-size: 36px;
            color: #007bff;
            margin-bottom: 20px;
            position: relative;
        }
        .title::after {
            content: '';
            width: 60px;
            height: 5px;
            background: #007bff;
            display: block;
            margin: 10px auto 0;
            border-radius: 5px;
        }
        .logo {
            width: 120px;
            opacity: 0.8;
            margin-bottom: 30px;
        }
        .options {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .option {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            background: #ffffff;
            border: 1px solid #007bff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            text-align: center;
            text-decoration: none;
            color: #007bff;
        }
        .option:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            background-color: #007bff;
            color: #ffffff;
        }
        .option i {
            font-size: 40px;
            margin-bottom: 10px;
        }
        .option h3 {
            font-size: 20px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Welcome to Camtel</h1>
        <img src="./img/id6WP_cvHj_1731330704545.png" alt="Camtel Logo" class="logo">

        <div class="options">
            <a href="cform.php" class="option">
                <i class="fas fa-pencil-alt"></i>
                <h3>Record Complaint</h3>
            </a>
            <a href="complain.php" class="option">
                <i class="fas fa-paper-plane"></i>
                <h3>Submit Complaint</h3>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
