<?php @include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dream Online Shop</title>

        <link rel="stylesheet" href="dream.css">
        <link rel="stylesheet" href="./cart/css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
    </head>
    <body>

    <?php include('header.php'); ?>

        <section class="main-home">
            <div class="main-text">
                <h5>Fan-made and Official Merchandise</h5>
                <h1>Dream <br>Online Shop</h1>
                <p>There's Nothing like Trend</p>

                <a href="dreamproduct.html " class="main-btn">Shop Now <i class='bx bx-chevron-right' ></i></a>
                
            </div>

            <div class="down-arrow">
                <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>

            </div>
        </section>

        <br>
        <section class="about">
            <div class="aboutus">
                <h3>About <span>us!!</span></h3>
                <img src="https://i.pinimg.com/564x/b4/52/49/b452496d7e2d321e1f85e2a9a03213d6.jpg">
                <p>Hey customers!! Welcome to our online store! We're a passionate fans who love bringing you the coolest and most exclusive merchandise. We carefully curate our collection to ensure that every item is of the highest quality and represents the fandoms we adore such as clothing, keychain, accessories and more just for you. Our goal is to make your shopping experience as exciting as possible, so you can proudly show off your love for your favorite idol and franchises. Join us on this epic merch journey and let's celebrate our shared fandoms together! So go ahead, explore our store and let us help you unleash your inner fashionista nctzen!!</p>
            </div>
        </section>

       <!-- trending-product-section --> 
       <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Our Trending <span>Products</span></h2>
        </div>

        <div class="product">
            <div class="product">
                <div class="row">
                   <img src="bju.jpg"  alt="">
                   <div class="product-text">
                     <h5>New</h5>
                   </div>
    
                   <div class="ratting">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                   </div>
    
                   <div class="price">
                    <h4>Dream Cafe Jacket Hoodie</h4>
                    <p>Rm 159</p>
                   </div>
                </div>
            </div>

             <div class="row">
                <img src="mark august.jpg"  alt="">
                <div class="product-text">
                  <h5>New</h5>
                </div>

                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
 
                <div class="price">
                 <h4>Mark August Kit</h4>
                 <p>Rm 35</p>
                </div>
             </div>

             <div class="row">
                <img src="jm cd.jpg"  alt="">
                <div class="product-text">
                  <h5>Hot</h5>
                </div>
 
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                </div>
 
                <div class="price">
                 <h4>Jm Lover Kit (All set)</h4>
                 <p>Rm 40</p>
                </div>
             </div>
             
             <div class="row">
                <img src=" https://i.pinimg.com/564x/6b/c5/1b/6bc51baa2b5d50863c378296f3e62478.jpg"  alt="">
                <div class="product-text">
                  <h5>Hot</h5>
                </div>
 
                <div class="ratting">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                    <i class='bx bx-star'></i>
                </div>
 
                <div class="price">
                 <h4>Dream Bear</h4>
                 <p>Rm 50</p>
                </div>
             </div>
             
        </div>

       </section> 

       <!-- client-review-section -->
       <section class="client-review">
        <div class="reviews">
            <h3>Client Reviews</h3>
            <img src="mark.jpg" alt="">
            <p>The truth is that the pain itself is important, it will be followed 
                by the client, but it happens at the same time that there <br> is a lot 
                of work and pain. For to come to the smallest detail, no one should practice 
                any kind of work unless <br>he derives some benefit from it. Do not let the pain 
                of the house be scorned in pleasure.</p><br>

                <h2>Mark Jev</h2>
                <p>CEO of CIT</p>
        </div>
       </section>

       <?php include('footer.php') ?>
    </body>