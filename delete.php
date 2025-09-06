<?php
include "db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Delete Record</title>
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
            color: red;
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
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM student_records WHERE id=$id";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Record deleted successfully!</p>";
            } else {
                echo "<p class='error'>Error deleting record: " . $conn->error . "</p>";
            }
            echo "<a href='view.php'>Back to List</a>";
        }
        ?>
    </div>
</body>

</html>