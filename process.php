<?php
include "db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Process Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
        }

        .container {
            width: 50%;
            margin: auto;
            background: white;
            padding: 20px;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2 {
            color: #333;
        }

        .success {
            color:#086348ff;
            font-weight: bold;
        }
        
        .error {
            color: red;
            font-weight: bold;
        }
        
        a {
            text-decoration: none;
            color: #007bff;
            display: block;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['register'])) {
            $fullname = trim($_POST['fullname']);
            $email = trim($_POST['email']);
            $department = trim($_POST['department']);
            $matric = trim($_POST['matric']);

            if (empty($fullname) || empty($email) || empty($department) || empty($matric)) {
                echo "<p class='error'>All fields are required!</p>";
                echo "<a href='index.php'>Go Back</a>";
                exit;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class='error'>Invalid email format!</p>";
                echo "<a href='index.php'>Go Back</a>";
                exit;
            }

            $sql = "INSERT INTO student_records (full_name, email, department, matric_number) 
            VALUES ('$fullname', '$email', '$department', '$matric')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Registration successful!</p>";
                echo "<a href='view.php'>View Students</a>";
            } else {
                echo "<p class='error'>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>

</html>