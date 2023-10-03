<!DOCTYPE html>
<html>
<head>
    <title>Student Registration and Login</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
    test
    <div class="container">
        <div class="form-container">
            <h2>Student Registration</h2>
            <form action="registration.php" method="POST">
            
                <input type="submit" value="Register">
            </form>
        </div>
        <div class="form-container">
            <h2>Student Login</h2>
            <form action="index2.php" method="POST">
                <label for="login_username">Username:</label>
                <input type="text" id="login_username" name="login_username" required><br><br>

                <label for="login_password">Password:</label>
                <input type="password" id="login_password" name="login_password" required><br><br>
                
                <input type="submit" value="Login">

                
            </form>
        </div>
    </div>
</body>
</html>

