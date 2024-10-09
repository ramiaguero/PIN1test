<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECS Instance Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .dashboard {
            background-color: #34495e;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 90%;
            max-width: 800px;
        }
        header {
            background-color: #e74c3c;
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            color: #fff;
        }
        .instance-info {
            font-size: 1.2rem;
            padding: 20px;
            background-color: #2980b9;
            text-align: center;
        }
        .details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .detail-item {
            background-color: #3498db;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
        }
        .detail-item h3 {
            margin-top: 0;
            font-size: 0.9rem;
            color: #bdc3c7;
        }
        .detail-item p {
            margin-bottom: 0;
            font-weight: bold;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <header>
            <h1>ECS Instance Dashboard</h1>
        </header>
        <div class="instance-info">
            <?php
            $hostname = gethostname();
            echo "Instance ID: " . htmlspecialchars($hostname);
            ?>
        </div>
        <div class="details">
            <div class="detail-item">
                <h3>PHP Version</h3>
                <p><?php echo phpversion(); ?></p>
            </div>
            <div class="detail-item">
                <h3>Current Time</h3>
                <p><?php echo date('Y-m-d H:i:s'); ?></p>
            </div>
            <div class="detail-item">
                <h3>ECS Cluster</h3>
                <p><?php echo getenv('ECS_CLUSTER') ?: 'Not Available'; ?></p>
            </div>
        </div>
        <footer>
            Created by Ramiro Aguero
        </footer>
    </div>
</body>
</html>