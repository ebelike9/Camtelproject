<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .registration-container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .register-button {
            width: 100%;
            padding: 10px;
            background-color: green;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .register-button:hover {
            background-color:green;
        }
        .success-message {
            color: (0, 23, 128);
            display: none;
            text-align: center;
        }
        .error-message {
            color: red;
            display: none;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Register</h2>
    <div class="error-message" id="error-message">Please fill in all fields.</div>
    <div class="success-message" id="success-message">Registration successful!</div>
    <form  action="log.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"  required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="register-button">Register</button><br><br>
        <a href="./login.php">login</a>
    </form>
</div>

<script>
    document.getElementById('registration-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Simple validation
        if (username === '' || email === '' || password === '') {
            document.getElementById('error-message').style.display = 'block';
            document.getElementById('success-message').style.display = 'none';
        } else {
            document.getElementById('error-message').style.display = 'none';
            document.getElementById('success-message').style.display = 'block';
            // You can add logic to send this data to a server here
        }
    });
</script>

</body>
</html>