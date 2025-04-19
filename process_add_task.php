<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $subject = $_POST['subject'];
    $deadline = $_POST['deadline'];
    $notes = $_POST['notes'];}

    $sql = "INSERT INTO study_planner (task_name, subject, deadline, notes) VALUES ('$task_name', '$subject', '$deadline', '$notes')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Task added successfully!');
            window.location.href='view_tasks.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: " . $conn->error . "');
            window.location.href='add_task.php';
        </script>";
    }
?>    