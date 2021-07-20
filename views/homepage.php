<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/project/css/home-page.css">
    <title>Home</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
</head>
<body>
    <div>
    <?php include 'header-footer/header.php';?>
</div>

    <section>
    
    <section id="nav">
       
        <div class="navigation">
        <ul>
        <li><a href="#" style="background-color: rgba(185, 185, 185, 0.534); border-radius: 3px; color: #000;"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li> 
            <li><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i>&nbsp;Special Menu</a></li>
            <li><a href="Foods.php"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp;Foods</a></li>
            <li><a href="#"><i class="fa fa-glass" aria-hidden="true"></i>&nbsp;Drinks</a></li> 
            <li><a href="Aboutus.php"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;About</a></li>
            <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;My orders</a></li>
        </ul>
        </div>

    </section>

    <!--Image-Bar-->
    <section id="img-bar">
        <div class="Slide-1">
            <div class="content">
                <div class="title">
                    <h2>Best Pizza In 
                        Restaurant</h2>
                </div>
                <div class="line"></div>
                <div class="desc">
                    <p>Scottsdale—and the Valley as a whole—has a reputation
                        for exceptional artisanal pizza. In fact, Pizzeria Bianco 
                        in downtown Phoenix is consistently ranked among the 
                        nation’s best.</p>
                    
                </div>
            </div>
        </div>

        <!--combo -->
    <div id="Combo">

        <div class="combo">
            <img src="img/pa.png" alt=""/>
        </div>
            <div class="sp">
                <h2>Special Combo Package </h2>
                <p>Only 399/-</p>
               
            </div>
            <button class="btn">Buy</button>
        
        </div>
    </section>

    <!--Contact-->
    <section id="con">
        <form>
        <div class="head">
            <h1>Contact Form</h1>
        </div>
         <div class="box">
            <label>Email<br>
                <input type="e-mail" class="boxs" placeholder="Enter your Email......" required> 
            </label><br>
            <label>Subject<br>
                <input type="subject" class="boxs" placeholder="Enter your Subject......" required> 
            </label><br>
            <label>Message<br>
                <div class="boxss"><textarea name="message" placeholder="Enter your message......" id=""  rows="10" required></textarea>  </div>
            </label>
           <button class="cancel btn">Cancel</button>
           <button class="send btn">Send</button>
         </div>
        </form>
    </section>
    
      <!-- Biryani-->
        <section id="Biryani">
            <h1>Biryani Item</h1>

            <div class="Biryani-item">
                <ul>
                    <li><a href="#" >
                        <div class="item">
                            <img src="img/ck.jpg" alt="Biryani">
                            <h4>Basmati Chicken Biryani</h4>
                            <p>only 150/-</p>
                        </div>
                    </a></li> 

                    <li><a href="#" >
                        <div class="item">
                            <img src="img/vek.jpg" alt="Biryani">
                            <h4>vegetable kacchi biryani</h4>
                            <p>only 130/-</p>
                        </div>
                    </a></li> 

                    <li><a href="#" >
                        <div class="item">
                            <img src="img/mk.jpg" alt="Biryani">
                            <h4>Kacchi Mutton Biryani</h4>
                            <p>only 250/-</p>
                        </div>
                    </a></li> 

                    <li><a href="#" >
                        <div class="item">
                            <img src="img/bkb.jpg" alt="Biryani">
                            <h4>Basmati Kacchi Biryani</h4>
                            <p>only 400/-</p>
                        </div>
                    </a></li>

                    <li><a href="#" >
                        <div class="item-i">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </a></li>
                    
                </ul>
                </div>

           

        </section>
        <!--Six pack Burger-->

        <section id="six-pack-Burger">
             <a href="#">
                <div class="Burger-img">
                    <img src="img/bs.jpg" alt="six pack Burger">
                </div>
                <div class="burger-title">
                    <h1>Most Popular iteam</h1>
                    <h3>Mr. Six Pack Burger</h3>
                    <p>
                        To hit the six, grab this Awesome Burger<br>
                        with Six Patty and Three Layers of Cheese ...
                    </p>
                   <h5>Only 699/-</h5>
                </div>
            </a>
        </section>
<!--Col-4--->
        <section id="Col-4">
            <div class="img-1">
                <img src="img/combo.jpg" alt="combo">
                <div class="col-4-title">
                    <p>Pizza & Burgers<br>Combo offer</p>
                    <h5>only 999/-</h5>
                </div>
                
            </div>

            <div class="img-1">
                <img src="img/cfk.jpg" alt="combo">
                <div class="col-4-title">
                <p>Special offer<br>chicken fry(4pic)</p>
                <h5>only 150/-</h5>
            </div>
            </div>
              
            <div class="img-1">
                <img src="img/co.jpg" alt="combo" >
                <div class="col-4-title">
                <p>Special Drink <br>In this time</p>
                <h5>only 150/-</h5>
            </div>
            </div>


        </section>
<!--Bucket Biryani-->
        <div class="Col-5">
            <a href="#">
            <div class="col-5-img">
                <img src="img/offer.jpg" alt="">
                
            </div>

            <div class="col-5-title">
                <h1>Special Offer For Special Iteam!!!!</h1>
                    <h3>Bucket Biryani Feast For Everyone</h3>
                    <p>A great Biryani chef balances spices, ensures the rice has a fluffy texture, and cooks the meat until perfectly succulent, all in one pot.
                        The details can really make or break a biryani!</p>
                    <h5>only 850/-</h5>   
            </div>
        </a>
        </div>

   <!--col-6-->
        <section id="Col-6">
            <div class="img-2">
                <img src="img/brack.jpg" alt="combo">
                <div class="col-6-title">
                    <a href="#"><p>Breakfast Food</p></a>
                    
                </div>
                
            </div>

            <div class="img-2">
                <img src="img/lunch.jpg" alt="combo">
                <div class="col-6-title">
                <a href="#"><p>Lunch Food</p></a>
                
            </div>
            </div>
              
            <div class="img-2">
                <img src="img/snack.jpg" alt="combo">
                <div class="col-6-title">
                <a href="#"><p>Snack Food</p></a>
                
            </div>
            </div>

            <div class="img-2">
                <img src="img/dinner.jpg" alt="combo">
                <div class="col-6-title">
                <a href="#"><p>Dinner Food</p></a>
                
            </div>
            </div>



        </section>

        <div class="col-7">
            
            <div class="img-3">
                <img src="img/cakepasti.jpg" alt="">
            </div>
            <div class="col-7-title">
                <h3>Different Kind of Pastrie Cake<br>Available in this Restaurant</h3>
                <p>In a nutshell, all pastries are cakes, but not all cakes are pastries. 
                    And the main difference lies in the fact that cakes involve many ingredients that are nutritious too, while pastries use only a few ingredients.</p>
                   <a href="#"><button>View Now</button></a> 
            </div>
    
        </div>
    </section>

    <section id="footer">
    <?php include 'header-footer/footer.php';?>
    </section>
    </section>
</body>
</html>