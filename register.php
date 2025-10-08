
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change with your database username
$password = ""; // Change with your database password
$dbname = "x_streamshoesshop"; // Change with your database name

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and get the form data
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Check if passwords match
        if ($password !== $confirm_password) {
            echo "Passwords do not match!";
            exit();
        }

        // Hash the password for security
        // SQL query to insert data
        $sql = "INSERT INTO register (name, email, password,confirm_password) VALUES (:name, :email, :password, :confirm_password)";
        
        // Prepare and bind
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':confirm_password', $confirm_password);

        
        // Execute the query
        if ($stmt->execute()) {
            echo "<script type='text/javascript'>
                    alert('Registration Successful!');
                    window.location.href = 'login.php'; // Redirect to login page
                  </script>";
        } else {
            echo "Error registering user.";
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
    <title>Register</title>
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
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1s ease-out;
    width: 350px;
    height:430px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h2 {
    text-align: center;
    margin-bottom: 20px;
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
    border-color: black;
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

</style>
<body>

    <div class="container">
        <div class="form-container">
            <h2>Create Account</h2>
            <form  method="POST" id="register-form">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>

</body>
</html>
