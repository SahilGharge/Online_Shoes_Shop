<?php
// Include database connection file
include('connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contact (username, email, phone, message) 
            VALUES ('$username', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-stream Shoes Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
      <link rel="stylesheet" href="form.css">
    

</head>
<body>
    <!------------------navbar-------------------->
 
        <section class="RESIDENTIAL">
    
            <div class="container">
                <span class="big-circle"></span>
                <div class="form">
                  <div class="contact-info">
                    <h3 class="title">Contact with X-stream shoes shop</h3>
                    <p class="text">
                        A phone number and links to social media channels. It should also be easy to navigate!
                    </p>
          
                    <div class="info">
                      <div class="information">
                        <p>X-stream shoes shop, Kadegaon, Tal: Kadegaon, Dist: Sangli, Maharashtra, India</p>
                      </div>
                      
                      <div class="information">
                        <a href="https://wa.me/8983337663"> <i class="fa-brands fa-whatsapp"></i></a>
                         <p>chat with us</p>
                       </div>
                    </div>
          
                    <div class="social-media">
                      <p>Connect with us :</p>
                      <div class="social-icons">
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
          
                  <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>
          
                    <form method="post">
                      <h3 class="title">Contact us</h3>
                      <div class="input-container">
                        <input type="text" name="username" class="input" />
                        <label for="">Username</label>
                        <span>Username</span>
                      </div>
                      <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                      </div>
                      <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                      </div>
                      <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                      </div>
                      <input type="submit" value="Send" class="btn" />
                    </form>
                  </div>
                </div>
              </div>
    
        </section>
       
    </body>
   
<script>
    const inputs = document.querySelectorAll(".input");

    function focusFunc() {
        let parent = this.parentNode;
        parent.classList.add("focus");
    }

    function blurFunc() {
        let parent = this.parentNode;
        if (this.value == "") {
        parent.classList.remove("focus");
        }
    }

    inputs.forEach((input) => {
        input.addEventListener("focus", focusFunc);
        input.addEventListener("blur", blurFunc);
    });
</script>
</html>
       