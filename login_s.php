<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    </head>
    <style>
        body {
            background-image: url("loga.jpg");
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }
        .welcome-container {
            padding: 20px;
            align-items: "left";
            border-radius: 10px;
            width: 400px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }
        p {
            margin: 10px 0;
            font-size: 1.2em;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #FFF380;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #FFF380;
        }
    </style>

<body>
    <div class="welcome-container">
        <h1>Welcome to Our Website</h1>
        <p>Your record has been saved successfully.</p>
        <p>Please click below to login:</p>
        <a href="login2.php">Click here to Login</a>
    </div>
</body>
</html>
