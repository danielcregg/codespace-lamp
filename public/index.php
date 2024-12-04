<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP Stack in Codespaces</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Your LAMP Stack</h1>
        <div class="info">
            <h2>Environment Information:</h2>
            <?php
                echo "<p>PHP Version: " . phpversion() . "</p>";
                echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
                echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
            ?>
        </div>
        <div class="info">
            <h2>Getting Started:</h2>
            <p>Your LAMP stack is now running in GitHub Codespaces. Here's what's included:</p>
            <ul>
                <li>Apache Web Server</li>
                <li>MySQL Database</li>
                <li>PHP <?php echo phpversion(); ?></li>
            </ul>
            <p>Start building your web application by modifying files in the <code>public</code> directory.</p>
        </div>
    </div>
</body>
</html>