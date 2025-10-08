<?php
// Get the name from the query string (passed when redirecting from the form)
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submitted</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Automatically redirect to the homepage after 5 seconds
        setTimeout(function() {
            window.location.href = 'index.php'; // Redirects to the homepage (index.php)
        }, 5000);
    </script>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.form-container, .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
}

.form-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

input, textarea, button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border: none;
}

button:hover {
    background-color: #45a049;
}

.success-message h2 {
    color:rgb(76, 145, 175);
}

.success-message p {
    color: #555;
}

.back-button {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 20px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.back-button:hover {
    background-color: #0056b3;
}

        </style>
</head>
<body>
<div class="container">
        <div class="success-message">
            <h2>Thank You, <?php echo $name; ?>!</h2>
            <p>Your feedback has been successfully submitted.</p>
            <p><a href="index.php" class="back-button">Back to Home</a></p>
        </div>
    </div>
</body>
</html>
