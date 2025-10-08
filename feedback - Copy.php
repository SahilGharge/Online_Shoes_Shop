<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "x_streamshoesshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$success_message = "";
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $feedback);

    if ($stmt->execute()) {
        header("Location: sucessfeedback.php");
        exit();
    } else {
        $error_message = "Something went wrong. Please try again later.";
    }
    

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:#d3d3d3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .feedback-form-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            width: 100%;
            height: 120px;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: vertical;
        }

        .submit-btn {
            background-color:black;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: red;
        }

        .message {
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }

        .error-message {
            color: red;
        }
    </style>

</head>
<body>
    <div class="feedback-form-container">
        <h2>We value your feedback</h2>

        <?php if (!empty($success_message)): ?>
            <p class="message"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <?php if (!empty($error_message)): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="name" class="input-field" placeholder="Your Name" required>
            <input type="email" name="email" class="input-field" placeholder="Your Email" required>
            <textarea name="feedback" class="input-field" placeholder="Your Feedback" required></textarea>
            <button type="submit" class="submit-btn">Submit Feedback</button>
        </form>
    </div>
</body>

</html>
