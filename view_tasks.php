<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }
        body{
            background-image: url('sdbg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        } 
        .container { margin-top: 50px;
             }
        .thead-dark { background-color: #ff66b2; color: white; }

        .table { background-color: #ff99cc; }
        .table th, .table td { vertical-align: middle; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Study Planner Tasks</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Subject</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $result = $conn->query("SELECT * FROM study_planner");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['task_name']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['deadline']}</td>
                        <td>{$row['status']}</td>
                        <td>
                            <a href='update_task.php?id={$row['id']}' class='btn btn-warning btn-sm'>Update</a>
                            <form method='post' action='delete_task.php' style='display:inline;'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                            </form>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="text-center mb-4">
        <a href="add_task.php" class="btn btn-primary">Add New Task</a>
        <a href="index.php" class="btn btn-secondary">Home</a>
    </div>
</body>
</html>
