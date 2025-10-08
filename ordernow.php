<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "x_streamshoesshop";
if(isset($_POST['product']) && $_POST['product']!=''){
$product=$_POST['product'];
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $item = $_POST['item'];
    $delivery_date = $_POST['delivery_date'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders(name, email, item, delivery_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $item, $delivery_date);

    // Execute the query
    if ($stmt->execute()) {
        header("location:ordersuccess.php");
        exit();
        echo "<p>Order placed successfully!</p>";
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel="stylesheet" href="ordernow.css">
</head>
<body>
    <div class="container">
        <h1>Place Your Order</h1>
        <form action="ordernow.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="item">Item Ordered</label>
                <input type="text" id="item" name="item" value=<?php echo $product;?>>
            </div>
            <div class="form-group">
                <label for="delivery_date">Delivery Date</label>
                <input type="date" id="delivery_date" name="delivery_date" required>
            </div>
            <button type="submit" name="order" value="order" class="btn">Place Order</button>
        </form>
    </div>
</body>
</
