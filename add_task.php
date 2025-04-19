<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        *{
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }
        body {
            background-image: url('sdbg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            font-family:monospace;
            font-weight: 10px;
        

        }
        .form-control {
            background-color: #ff99cc;
        }
        .btn-primary { background-color: #ff1493; border-color: #ff66b2;color: black; }
        .btn-primary:hover { background-color:rgb(234, 234, 208); color: black; }
        .btn-secondary { background-color:#ff1493; border-color: #ff66b2; color: black;}
        .btn-secondary:hover { background-color: rgb(234, 234, 208); color: black;}
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Add New Task</h2>
        <form method="post" action="process_add_task.php" class="p-4 shadow-sm bg-white">
            <div class="form-group">
                <label for="task_name">Task Name</label>
                <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Enter task name" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" required>
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
                <textarea class="form-control" id="notes" name="notes" placeholder="Add notes..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Add Task</button>
            <a href="view_tasks.php" class="btn btn-secondary btn-sm">View Tasks</a>
            <a href="index.php" class="btn btn-secondary btn-sm">Home</a>
        </form>
    </div>
</body>
</html>





