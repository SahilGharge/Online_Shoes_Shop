<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-stream Shoes Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <!------------------navbar-------------------->
    <section id="header">
        <a href="#"><img src="img/xlogo-removebg-preview.png"class="logo"width="100px"height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a   class="active"href="Blog.php">Blog</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
              <!--- <li><a href="index.html"></a></li>---->
              <a href="#"><i class="fa fa-shopping-bag bag"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="fa fa-shopping-bag bag"></i></a>
            <i id="bar"class="fas fa-outdent"></i>
            
        </div>
    </section>
    <!-------------homepage first----------------->
            <section id="page-header" class="blog-header">
                <h2>#Readmore</h2>

                <p>Read all case studies about our products!</p>
            </section>
    <!------------blog-------------------->
    <section id="blog-container">
        <div class="blog-post">
            <div class="post">
                <img src="img/blog4.jpg" alt="">
   
                <div class="page-btn">
                    <a href="Blog.php"><span class="next">&#8592; Back to Blog</span></a>
                </div>
            
            </div>
        </div>
    </section>
    
    
    
   
        <!---------pagination------------->
        <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
        </section>
        <!-------------footer----------------->
        <footer>
            <div class="row">
            <div class="col">
            <img src="img/xlogo-removebg-preview.png" height="130px",width="130px"> 
            <p>"Great selection, excellent service, and good prices! <br>The staff were very helpful and made sure I found the right shoes.Highly recommended!"</p>               
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p>ITPL Road</p>
                <p>Whitefeild, Bangalore</p>
                <P>Karnataka , PIN 145205, India</P>
                <p class="email-id">sahilgharge4946@gmail.com</p>
                <p class="email-id">ganeshchavan@gmail.com</p>
                <h4>+91 012345679</h4>
            </div>
            <div class="col">
                <h3>Links <div class="underline"><span></span></div></h3>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newsletter <div class="underline"><span></span></div></h3>
                <form>
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="socialmediaicon">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-pinterest"></i>
                </div>
            </div>
            </div>
        
           <!----- <p class="copyright">X-Stream Shoes Shop- All Right Reserved</p>---->
        </footer>
         
     

    <script src="script.js"></script>
    <script>
        jQuery(document).ready(function($){
            $('.slider-img').on('click',function(){
                $('.slider-img').removeClass('active');
                $(this).addClass('active');
            })
        });

    </script>
</body>
</html>
