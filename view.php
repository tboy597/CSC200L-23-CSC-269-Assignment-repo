<?php
// view.php - Displays students
include "db.php";
$result = $conn->query("SELECT * FROM student_records");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registered Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .container {
            width:800px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background:#28a77bff;
            color: white;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .delete {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Registered Students</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Matric Number</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['matric_number']; ?></td>
                    <td><a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        <a href="index.php">Go Back to Registration</a>
    </div>
</body>

</html>