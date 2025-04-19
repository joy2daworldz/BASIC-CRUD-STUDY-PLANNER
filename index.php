<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Study Planner</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-image: url(sdbgf.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .container {
                margin-top: 20vh; 
                text-align: center;
                color: black;
                background-color:#dea5a4;
                padding: 20px;
                border: 2px solid #ff99cc;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            .btn {
                margin: 10px;
                background-color: #ff99cc;
                color: white;
                border-color: #ff66b2;
            }
            .btn:hover {
                background-color: #ff66b2;
                border-color: #ff3380;
            }
           
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <h1>Welcome to Your Study Planner</h1>
                    <p>Organize your study tasks and track your progress effectively.</p>
                    <div>
                        <a href="add_task.php" class="btn btn-primary btn-lg btn-block">Get Started</a>
                        <a href="view_tasks.php" class="btn btn-secondary btn-lg btn-block">View Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    