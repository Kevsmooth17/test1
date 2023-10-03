<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // Get user input
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $min_length = 8;

    if (strlen($password) < $min_length) {
        echo "Error: Password must be at least $min_length characters long.";
    } else {
        // Password meets the criteria, you can process it further
        echo "Password is valid!";

    // You should add more validation and security checks here

    // Example: Hash the password (use a strong hashing algorithm in production)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    

    // You can store the user data in a database (not shown in this example)

    // Display a success message
    echo "Registration successful. Welcome, $username!";
    
}
?>

