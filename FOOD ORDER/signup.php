<?php include('process.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link rel="stylesheet" href="style.css">   -->
  <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Coffee house</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a7a7a7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("background.jpg");
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #submit {
            width: 100%;
            padding: 10px;
            background-color: #ffc107;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
        }
        #submit:hover
        {
          cursor: pointer;
         background-color:  #0e6253;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-bottom: 10px;
        }
    </style>
    
    
</head>
<body>
  
    <form id="signupForm" style="margin-left: 500px;"  action="home.php" method="post" onsubmit="return validateForm()">
        <h2 style="color: #0e6253;">Signup</h2>
        <div class="error" id="errorMessage"></div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="emailll" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmpassword" required>
        
        <input type="submit" name="save" id="submit">
    </form>
    
    

   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- JAVA SCRIPT -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
