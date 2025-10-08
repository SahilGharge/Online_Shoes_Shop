<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change with your database username
$password = ""; // Change with your database password
$dbname = "x_streamshoesshop"; // Change with your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Make sure to use $conn
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Login process:
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];  // Plain text password from the form

        // Get user data from the database
        $stmt = $conn->prepare("SELECT * FROM register WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Compare the entered password with the stored plain text password
            if ($password === $user['password']) {
                // Successful login, set session variables and redirect
                session_start();  // Don't forget to start the session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email.";
        }
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>
    /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color:#d3d3d3;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #fff;
    border-radius: 10px;
    padding: 45px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1s ease-out;
    width: 350px;
    height: 400px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 5;
        transform: translateY(0);
    }
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

.input-group {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    position: relative;
}

.input-group i {
    position: absolute;
    left: 10px;
    color: #888;
}

.input-group input {
    width: 100%;
    padding: 12px 15px 12px 40px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

.input-group input:focus {
    outline: none;
    border-color:black;
}

.btn {
    width: 100%;
    padding: 12px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: red;
}

p {
    text-align: center;
    margin-top: 20px;
}

a {
    color: blue;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Login to Your Account</h2>
            <form  method="POST" id="login-form">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </form>
        </div>
    </div>

</body>
</html>
