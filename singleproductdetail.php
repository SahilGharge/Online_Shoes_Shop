<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <!------------------navbar-------------------->
    <a href=""></a>
    <!----------header-banner--------------------->
    <section id="header">
        <a href="#"><img src="img/xlogo-removebg-preview.png"class="logo"width="100px"height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li>
                <li><a class="active" href="shop.html">Shop</a></li>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
              <!--- <li><a href="index.html"></a></li>---->
              <a href="#"><i class="fa fa-shopping-bag bag"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="fa fa-shopping-bag bag"></i></a>
            <i id="bar"class="fas fa-outdent"></i>
            
        </div>
    </section>
    <!-------------sibgle product detail---------->
   <!----1-->
    <section id="prodetail" class="section-p1">
        <div class="single-product-img">
            <img src="img/shopproductimg1.png" width="100%" id="MainImg" alt="">
            <!---sub img of product first -->
            <div class="small-product-img">
                <div class="small-img-col">
                    <img src="img/shopproductimg1.png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shopimg(1.1).png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shopimg(1.2).png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shopimg(1.3).png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shopimg(1.4).png" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/shopimg(1.5).png" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-product-details">
            <h6>Men's Shoe</h6>
            <h4>Nike Dunk Low Retro</h4>
            <h2>MRP : ₹ 8 295.00</h2>
            <select>
                <option>Select Size</option>
                <option>UK 8</option>
                <option>UK 9</option>
                <option>UK 10</option>
                <option>UK 11</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <form action="ordernow.php" method="post">
                <input type='hidden' name="product" value='Nike_Dunk_Low_Retro'/>
            <button style="margin-left:12%;margin-top:2%;" class="normal"type="submit">Order Now</button> 
            </form>
            <a href="cart.html"></a>
            <h4>Product Detail</h4>
            <span>Created for the hardwood but taken to the streets, the Nike Dunk Low Retro returns with crisp overlays and original team colours.basketball icon channels '80s vibes with premium leather in the upper that looks good and breaks in even better. Modern footwear technology helps bring the comfort into the 21st century.</span>
        </div>
        </section>


        <!--------related product----------->
             <!---------------Feature product-------------->
    <section id="Product1"class="section-p1">
        <h2>Products You May Like</h2>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/p2.jpg"width="200px">
                    <div class="des">
                        <span>Nike</span>
                        <h5>Men's Shoes</h5> 
                       <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$74</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-bag cart"></i></a>
                </div> <div class="pro">
                    <img src="img/puma2full img.jpg"width="200px">
                    <div class="des">
                        <span>Puma</span>
                        <h5>Men's Shoes</h5> 
                       <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$200</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/p1.jpg"width="200px">
                    <div class="des">
                        <span>Nike C1TY</span>
                        <h5>Men's Shoes</h5> 
                       <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$210</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/puma3full img.jpg"width="200px">
                    <div class="des">
                        <span>Puma Nitro</sup></span>
                        <h5>Men's Shoes</h5> 
                       <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>$199</h4>
                    </div>
                    <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
                </div>
                
            </div>
            </section>
        <!-------------footer----------------->
        <footer>
            <div class="row">
            <div class="col">
            <img src="img/xlogo-removebg-preview.png"height="130px",width="130px"> 
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
        var MainImg= document.getElementById("MainImg");
        var smallimg= document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src =smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src =smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src =smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src =smallimg[3].src;
        }
        smallimg[4].onclick = function(){
            MainImg.src =smallimg[4].src;
        }
        smallimg[5].onclick = function(){
            MainImg.src =smallimg[5].src;
        }

    </script>
</body>
</html>
