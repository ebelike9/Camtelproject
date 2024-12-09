<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camtel - Complaint Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-container h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .form-container label {
            font-weight: bold;
            margin-top: 10px;
        }
        .form-container input[type="text"],
        .form-container input[type="tel"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
        }
        .form-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>File a Complaint</h2>
    <form action="form.php" method="post">
        <fieldset id="fs-frm-inputs">
            <label for="full-name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="First and Last" required>
            
            <label for="telephone">Telephone Number (Optional)</label>
            <input type="tel" name="telephone" id="telephone" placeholder="(555) 555-5555">
            
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="Street, City, State, ZIP" required>
            
            <label for="complaint">Complaint</label>
            <textarea rows="6" name="complaint" id="complaint" placeholder="Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla nullam quis risus." required></textarea>
            
            <input type="hidden" name="status" value="New">
            <input type="hidden" name="_subject" id="email-subject" value="Complaint Form Submission">
        </fieldset>
        <input type="submit" value="File Complaint">
    </form>
</div>

</body>
</html>
