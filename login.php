<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
    
    <style>
        body {
            background-image:url("loga.jpg");
        
            height: 100vh;
            width: 100%;
            background-repeat: no-repeat;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }
        .registration-container {
            padding: 10px;
            border-radius: 10px;
            width: 350px;
        }
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 5px 0 5px;
        }
        input[type="text"], input[type="date"], input[type="password"], select {
            width: 85%;
            padding: 5px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="email"] {
            width: 85%;
            padding: 5px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        .radio-group {
            margin-bottom: 15px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:#FFF380;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #FFF380;
        }
    </style>

<body>
    <div class="registration-container">
        <h1>Registration Process</h1>
        <form action="login_s.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>
            
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>
            
            <div class="radio-group">
                <label>Select Gender:</label>
                <input type="radio" id="Male" name="gender" value="Male" required> Male<br>
                <input type="radio" id="Female" name="gender" value="Female"> Female<br>
                <input type="radio" id="Other" name="gender" value="Other"> Other
            </div>
            
            <label for="DoB">Date of Birth:</label>
            <input type="date" id="DoB" name="DoB" required>
            
            <label for="location">Select Location:</label>
            <select id="location" name="location" required>
                <option value="">Select a location</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Chennai">Chennai</option>
                <option value="Lucknow">Lucknow</option>
            </select>
            
            <label for="Phone">Phone:</label>
            <input type="text" id="Phone" name="Phone" placeholder="+91" size="2" maxlength="10" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</body>
</html>
