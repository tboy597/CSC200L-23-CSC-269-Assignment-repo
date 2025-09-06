<?php
// index.php - Main page with registration form
?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .container {
            width: 70%;
            margin: auto;
            background: white;
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form label {
            display:inline-block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            margin-right: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #28a796;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background: #217a88;
        }

        a {
            text-decoration: none;
            color: #007bff;
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>CSC 282 Registration Form</h2>
        <form action="process.php" method="POST">
            <label>Full Name:</label>
            <input type="text" name="fullname" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Department:</label>
            <input type="text" name="department" required>

            <label>Matric Number:</label>
            <input type="text" name="matric" required>

            <button type="submit" name="register">Register</button>
        </form>
        <a href="view.php">View Registered Students</a>
    </div>
</body>

</html>