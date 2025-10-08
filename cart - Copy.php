<?php
include 'connection.inc.php';
include 'header.php'; // Custom header
session_start();
//ob_start();
if(isset($_GET['remove'])){
  $conn->query("delete from cart where id='".$_GET['remove']."'");
}

try{
$user_id = $conn->query("select id from users where name='".$_SESSION['USER_USERNAME']."'")->fetch_assoc()['id'];
}catch(Exception $e){
  echo $e.getMessage();
  exit();
}
try{
$product_ids = $conn->query("select product_id,quantity,id from cart where user_id='$user_id'");
}catch(Exception $e){
  echo $e.getMessage();
  exit();
}

//ob_get_flush();
?>

<div class="container" style="padding: 20px;">
    <h2 style="color: #333; font-size: 24px;">Shopping Cart</h2>
    <table class="table" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f8f9fa; border-bottom: 2px solid #ddd;">
                <th style="padding: 10px; text-align: left;">Product</th>
                <th style="padding: 10px; text-align: left;">Price</th>
                <th style="padding: 10px; text-align: left;">Quantity</th>
                <th style="padding: 10px; text-align: left;">Total</th>
                <th style="padding: 10px; text-align: left;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while($product_id=$product_ids->fetch_assoc()){
                $res = $conn->query("select * from product where id='".$product_id['product_id']."'") ;
                $rows=$res->fetch_assoc();
                echo "<tr style='border-bottom: 1px solid #ddd;'>
                        <td style='padding: 10px;'>{$rows['name']}</td>
                        <td style='padding: 10px;'>Rs.{$rows['price']}</td>
                        <td style='padding: 10px;'>{$product_id['quantity']}</td>
                        <td style='padding: 10px;'>Rs.".((int)$rows['price'] * (int)$product_id['quantity'])."</td>
                        <td style='padding: 10px;'><a href='cart.php?remove={$product_id['id']}' class='btn btn-danger' style='color: white; background-color: red; padding: 5px 10px; text-decoration: none;'>Remove</a></td>
                      </tr>";
         } 
            ?>
        </tbody>
    </table>
    <h3 style="margin-top: 20px; color: #555;">Total: Rs.<?php echo number_format($total, 2); ?></h3>
    <a href="checkout.php" class="btn btn-success" style="display: inline-block; padding: 10px 20px; background-color: green; color: white; text-decoration: none;">Proceed to Checkout</a>
</div>

<?php include 'footer.php'; // Custom footer ?>

