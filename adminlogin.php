<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    
    if ($admin_name === "sahil" && $admin_password === "1234") {
        $_SESSION['admin'] = $admin_name;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid admin name or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container label {
            margin: 5px 0;
            font-weight: bold;
        }
        .login-container input {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <form action="" method="POST">
            <label for="admin_name">Admin Name:</label>
            <input type="text" id="admin_name" name="admin_name" required>
            
            <label for="admin_password">Password:</label>
            <input type="password" id="admin_password" name="admin_password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
