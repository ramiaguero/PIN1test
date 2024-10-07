<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeraCloud ECS Container Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        h1 {
            color: #0066cc;
        }
        .container-info {
            font-size: 1.2rem;
            margin: 1rem 0;
        }
        .powered-by {
            font-style: italic;
            color: #666;
        }
        .details {
            margin-top: 2rem;
            text-align: left;
        }
        .details ul {
            list-style-type: none;
            padding: 0;
        }
        .details li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to TeraCloud ECS</h1>
        <div class="container-info">
            <?php
            // Get the hostname (container ID in ECS)
            $hostname = gethostname();
            
            // Output the greeting message
            echo "Hello from container #" . htmlspecialchars($hostname);
            ?>
        </div>
        <p class="powered-by">Made by Ramiro TeraCloud!</p>
        <div class="details">
            <h2>Container Details:</h2>
            <ul>
                <li>Container ID: <?php echo htmlspecialchars($hostname); ?></li>
                <li>PHP Version: <?php echo phpversion(); ?></li>
                <li>Container IP: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
                <li>Current Time: <?php echo date('Y-m-d H:i:s'); ?></li>
                <li>Task Definition: <?php echo getenv('TASK_DEFINITION') ?: 'Not Available'; ?></li>
                <li>ECS Cluster: <?php echo getenv('ECS_CLUSTER') ?: 'Not Available'; ?></li>
                <li>AWS Region: <?php echo getenv('AWS_REGION') ?: 'Not Available'; ?></li>
            </ul>
        </div>
    </div>
</body>
</html>