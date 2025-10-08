<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];

    // Assuming the payment process goes here...

    // Clear the cart after purchase
    unset($_SESSION['cart']);

    echo "<h1>Thank you for your order, {$name}!</h1>";
    echo "<p>Your order will be shipped to {$address}. Payment method: {$payment_method}.</p>";
    echo "<br><a href='add_to_cart.php'>Shop More</a>";
}
?>
