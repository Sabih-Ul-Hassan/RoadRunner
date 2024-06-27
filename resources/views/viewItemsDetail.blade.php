<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/bd69f86183.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <script src="js/myscript.js" ></script>

    <title>View Items Detail</title>
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .logo-title {
            font-weight: 800;
            font-size: 1.6rem;
        }

        .navbar-properties-custom {
            background-color: white;
            border-bottom: solid 2px #000;
        }

        .navbar-items-custom-right {
            margin-right: 20px;
        }

        .navbar-items-custom-right > li {
            margin-left: 25px;
        }

        .line-break-small-screen-custom {
            width: 100%;
            height: 1px;
            color: black;
        }

        @media only screen and (min-width: 768px) {
            .navbar-brand {
                transform: translateX(-50%);
                left: 50%;
                position: absolute;
            }

            .line-break-small-screen-custom {
                display: none;
            }
        }

        @media only screen and (min-width: 992px) {
            .navbar-items-custom-left {
                margin-left: 20px;
            }

            .navbar-items-custom-left > li {
                margin-right: 25px;
            }
        }

        .main-product-custom {
            margin-top: 50px;
        }

        .product-stars {
            width: 15px;
            height: 15px;
        }

        .product-unlist-stars {
            list-style: none;
            padding: 0;
        }

        .product-unlist-stars > li {
            display: inline-block;
            margin-right: 5px;
        }

        .main-product-description {
            font-size: 12px;
        }

        .main-product-quantity {
            margin-top: 15px;
        }

        .main-product-items-cart-button {
            background-color: white;
            display: inline-block;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            border: solid 0.5px #707070;
        }

        .main-product-items-cart-input {
            text-align: center;
            width: 70px;
            height: 30px;
        }

        .main-product-sizes {
            margin-top: 15px;
        }

        .main-product-add-to-cart {
            margin-top: 25px;
        }

        .main-product-add-to-cart > * {
            display: inline-block;
        }

        .main-product-add-to-cart > .main-product-save {
            width: 25px;
            height: 25px;
            margin-left: 10px;
        }

        .main-product-add-to-cart > .main-product-save > * {
            display: inline-block;
        }

        .main-product-add-to-cart-button {
            width: 250px;
            height: 30px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 8px;
        }

        .main-product-add-to-cart-button:hover {
            color: black;
        }

        .main-product-image-custom {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .product-description-more {
            margin-top: 50px;
        }

        .product-description-more-text-items > * {
            display: inline-block;
            margin-bottom: 0px;
        }

        .product-description-more-text-items > img {
            width: 15px;
            height: 15px;
        }

        .product-description-more-text-items > p {
            margin-left: 5px;
        }

        .product-description-title {
            font-size: 14px;
            margin-bottom: 0px;
        }

        .product-description-more-text {
            font-size: 13px;
        }

        .product-description-details-items {
            font-size: 13px;
        }

        .view-item-details-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .our-world-our-planet {
            background-color: rgb(27, 37, 44);
        }


        .our-world-our-planet-description {
            width: 70%;
            margin: auto;
            margin-top: 15%;
        }

        .our-world-our-planet-description > .description-title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 15px;
            color: white;
        }

        .our-world-our-planet-description > .description-details {
            font-size: 14px;
            margin-bottom: 15px;
            color: white;
        }

        .our-world-our-planet-description > .description-links > a{
            font-size: 14px;
            margin-top: 15px;
            color: white;
        }

        .description-recycle-icon {
            float: right;
            margin-top: 100px;
        }

        .description-recycle-icon > .description-recycle-icon-image {
            width: 50px;
            height: 50px;
        }

        .you-may-like-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .you-may-like-title {
            font-size: 24px;
        }

        .you-may-like-container {
            margin-top: 100px;
        }

        .you-may-like-container-title {
            margin-bottom: 25px;
        }

        .image-card > .image-description {
            background-color: rgb(245, 245, 245);
            margin-top: 15px;
        }

        .image-description > a {
            text-decoration: none;
        }

        .image-description-title {
            font-size: 24px;
            font-weight: bold;
            padding: 15px 0px 5px 15px;
            color: black;
        }

        .image-description-info {
            font-size: 14px;
            font-weight: lighter;
            padding: 0px 0px 5px 15px;
            color: black;   
        }

        .reviews-container {
            margin-top: 10px;
            margin-bottom: 50px;
        }

        .reviewName > .name {
            font-size: 18px;
            font-weight: bold;
            color: black;
        }

        .reviewContent > .title {
            font-size: 20px;
            font-weight: bold;
        }

        .load-more-reviews-container > .load-review-button {
            background-color: white;
            border: 3px solid red;
            color: red;
            font-weight: bold;
            border-radius: 200px;
        }

        .load-more-reviews-container > .load-review-details {
            font-size: 13px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="fluid-container">
        <nav class="navbar navbar-light navbar-expand-md navbar-properties-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav navbar-items-custom-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Arrivals</a>
                    </li>
                    <hr class="line-break-small-screen-custom">
                </ul>
            </div>
            
            <a href="#" class="navbar-brand mx-auto">
                <span class="logo-title">ROADRUNNER</span>
            </a>

            <ul class="navbar-nav flex-row navbar-items-custom-right">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="icons/cart.svg" alt="Cart" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link">
                        <img src="icons/sign-up-clear.svg" alt="Sign up" width="30" height="30" class="d-inline-block align-top">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container main-product-custom">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/productImages/Buoyant_Blue_Blizzard.png" alt="Item 1" style="max-width: 100%" class="img-fluid main-product-image-custom">
                </div>
                <div class="col-lg-5 mt-lg-0 mt-md-3 mt-sm-5 mt-5">
                    <p>Sneakers / Men's / Casual</p>
                    <h2 class="main-product-title">BOOMRANG SNEAKER</h2>
                    <p>$95.00</p>
                    <ul class="product-unlist-stars mb-1">
                        <li class="product-list-stars"><img class="product-stars" src="/icons/star_filled.png" alt="Stars"></li>
                        <li class="product-list-stars"><img class="product-stars" src="/icons/star_filled.png" alt="Stars"></li>
                        <li class="product-list-stars"><img class="product-stars" src="/icons/star_filled.png" alt="Stars"></li>
                        <li class="product-list-stars"><img class="product-stars" src="/icons/star_filled.png" alt="Stars"></li>
                        <li class="product-list-stars"><img class="product-stars" src="/icons/stars_notfilled.png" alt="Stars"></li>
                        <li class="product-list-reviews-numbers"><p>(175)</p></li>
                    </ul>
                    <p class="main-product-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa suscipit officiis sit aperiam dolore facere nulla provident magnam sed. Veniam!</p>
                    
                    <hr style="height: 0.2px; background-color: grey;" class="mt-1 mb-1">
    
                    <div class="main-product-color">
                        <p class="main-product-color-title mt-1 mb-1">Color</p>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Blue
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Black
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> White
                            </label>
                        </div>
                    </div>
                    <?php 

                        echo $imgs;
                    
                    ?>
                    <div class="main-product-sizes">
                        <p class="main-product-size mt-1 mb-1">Size</p>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> XS
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> S
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> M
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> L
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> XL
                            </label>
                        </div>
                    </div>
                    <div class="main-product-quantity">
                        <p class="main-product-quantity-title">Quantity</p>
                        <div class="main-product-quantity-items">
                            <button class="main-product-items-cart-button"><p>-</p></button>
                            <input type="text" class="main-product-items-cart-input" value="1">
                            <button class="main-product-items-cart-button"><p>+</p></button>
                        </div>
                    </div>
                    <div class="main-product-add-to-cart d-flex justify-content-center">
                        <button id="main-product-add-to-cart-button" class="main-product-add-to-cart-button">Add to cart</button>
                        <div class="main-product-save">
                            <img src="/icons/heart-solid.svg" alt="Heart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container product-description-more">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="product-description-more-title">Boomrang Sneakers</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="product-description-title"><strong>Description</strong></p>
                            <p class="product-description-more-text mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit officiis sit aperiam dolore facere nulla provident magnam sed. Veniam!</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="product-description-title"><strong>Details</strong></p>
                            <div class="row">
                                <div class="col-6 ">
                                    <div class="item-1 product-description-more-text-items mt-1">
                                        <img src="/icons/heart-solid.svg" alt=""><p class="product-description-details-items">Sweat-Wicking</p>
                                    </div>
                                    <div class="item-2 product-description-more-text-items mt-1">
                                        <img src="/icons/heart-solid.svg" alt=""><p class="product-description-details-items">Sweat-Wicking</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-3 product-description-more-text-items mt-1">
                                        <img src="/icons/heart-solid.svg" alt=""><p class="product-description-details-items">Sweat-Wicking</p>
                                    </div>
                                    <div class="item-4 product-description-more-text-items mt-1">
                                        <img src="/icons/heart-solid.svg" alt=""><p class="product-description-details-items">Sweat-Wicking</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 our-world-our-planet">
                <div class="our-world-our-planet-description">
                    <p class="description-title">Our World, your planet</p>
                    <p class="description-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia provident sint molestias voluptatem officiis rem animi aut laudantium exercitationem reprehenderit.</p>
                    <p class="description-links"><a href="#">Learn more</a></p>
                    <p class="description-recycle-icon">
                        <img class="description-recycle-icon-image" src="/icons/recycle.png" alt="">
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 our-world-our-planet">
                <img class="view-item-details-image" src="/images/homepage/home-10-medium.jpg" alt="Image of a Man">
            </div>
        </div>
        <div class="container you-may-like-container">
            <div class="row you-may-like-container-title">
                <p class="you-may-like-title">YOU MAY ALSO LIKE</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 image-card">
                    <div class="image-description">
                        <a href="">
                            <img class="you-may-like-image" src="/images/productImages/Buoyant_Blue_Blizzard.png" alt="" >
                            <h3 class="image-description-title">Runner</h3>
                            <p class="image-description-info">Soft and Comfertable shoe</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 image-card">
                    <div class="image-description">
                        <a href="">
                            <img class="you-may-like-image" src="/images/productImages/Buoyant_Blue_Blizzard.png" alt="" >
                            <h3 class="image-description-title">Runner</h3>
                            <p class="image-description-info">Soft and Comfertable shoe</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 image-card">
                    <div class="image-description">
                        <a href="">
                            <img class="you-may-like-image" src="/images/productImages/Buoyant_Blue_Blizzard.png" alt="" >
                            <h3 class="image-description-title">Runner</h3>
                            <p class="image-description-info">Soft and Comfertable shoe</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 image-card">
                    <div class="image-description">
                        <a href="">
                            <img class="you-may-like-image" src="/images/productImages/Buoyant_Blue_Blizzard.png" alt="" >
                            <h3 class="image-description-title">Runner</h3>
                            <p class="image-description-info">Soft and Comfertable shoe</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container reviews-container">
            <div class="row">
                <div class="col-12">
                    <article  class="createReview">
                        <div class="container">
                            <div id="addReviewBtnDiv" class="row" >
                                <div class="col-lg-3 col-6 reviewName">
                                    <p class="name"> Based on 175 reviews </p>
                                </div>
                                <div class="col-lg-2 col-md-3 col-6 reviewStars">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div id="btnToAddReviewBox" class="col-lg-6 col-12 reviewContent" >
                                    <button   type="button" class="btn btn1 btn-danger btn-lg createReviewBtn " onclick="addReview()">Create a review</button>
                                </div>
                            </div>
                            <form action="#" method="POST" id="addReviewFrom">
                            <div class="row" >
                                 <div class="col-6 offset-3 offset-lg-0  col-mg-2 col-lg-2 reviewStars order-lg-first" id="addReviewStats">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="col-sm-11 col-12 offset-0 offset-lg-0 col-lg-5 order-first">
                                    <textarea name="reviewBox" id="reviewBox"  ></textarea>
                                </div>
                                <div id="btnToSubmitReviewBox" class="col-3 col-lg-2 offset-1  submitRev " >
                                    <input type="submit" name="submitReview" class="btn btn1 btn-danger btn-lg" id="submitReview" value="Done">    
                                </div>
                             </div>
                            </form>
                            <hr>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <article class="review col-12">
                    <div class="container">
                        <div class="row" >
                            <div class="col-lg-3 col-6 reviewName">
                                <p class="name"> Molly S. </p>
                                <p class="date"> March 2, 2020 </p>
                            </div>
                            <div class="col-lg-3 col-6 reviewStars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <div class="col-lg-6 col-12 reviewContent" >
                                <p class="title">Some randome titile</p> 
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptates?</p> 
                            </div>
                        </div>
                        <hr>
                    </div>
                </article>
                <article class="review col-12">
                    <div class="container">
                        <div class="row" >
                            <div class="col-lg-3 col-6 reviewName">
                                <p class="name"> Molly S. </p>
                                <p class="date"> March 2, 2020 </p>
                            </div>
                            <div class="col-lg-3 col-6 reviewStars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <div class="col-lg-6 col-12 reviewContent" >
                                <p class="title">Some randome titile</p> 
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maiores, aliquid consequatur reiciendis beatae corrupti?</p> 
                            </div>
                        </div>
                        <hr>
                    </div>
                </article>
                <article class="review col-12">
                    <div class="container">
                        <div class="row" >
                            <div class="col-lg-3 col-6 reviewName">
                                <p class="name"> Molly S. </p>
                                <p class="date"> March 2, 2020 </p>
                            </div>
                            <div class="col-lg-3 col-6 reviewStars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <div class="col-lg-6 col-12 reviewContent" >
                                <p class="title">Some randome titile</p> 
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptates?</p> 
                            </div>
                        </div>
                        <hr>
                    </div>
                </article>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-5 d-flex justify-content-center">
                    <div class="load-more-reviews-container">
                        <button class="btn btn1 btn-danger btn-md load-review-button">LOAD MORE REVIEWS</button>
                        <p class="load-review-details">Currently displaying 3 of 175 reviews</p>
                    </div>
                </div>
            </div>
        </div>
        <footer id=footer>
            <div class="container">
                <div class="row " id=footerCol>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>Accounts</p>
                        <p>Sign in</p>
                        <p>Regester</p>
                        <p>Order Status</p>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>About Us</p>
                        <p>Our Stroy</p>
                        <p>Career</p>
                    </div>
                    <div class="col-10 col-sm-4 col-lg-1 offset-1">
                        <p id=heading>Help</p>
                        <p>Contact Us</p>
                        <p>Order Status</p>
                    </div>
                    <div class="col-10 col-sm-5 col-lg-4 offset-1">
                        <p id=heading>Follow us</p>
                        <p>uwhf efh eoshae fosuoh sdfohse fhosdhf osdfhosdfoh fhfsdoh fosdhfosd hfo shdf sdofh sod foh fos dfohsdfo hfosd hfosd hfo hsfsod hod fho</p>
                        <p><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i>  <i class="fa-brands fa-twitter"></i></p>
                        
                    </div>
                </div>
            </div>
            <div id=hr></div>
    
            <div class="container">
                <div class="row">
                    <div class="col-11 offset-1 col-sm-2 order-sm-first order-last">
                        <p id=logo>ROADRUNNER</p>
                    </div>
                    <div class="col-11 offset-1 col-sm-2">
                        <p >©ROADRUNNER 2020</p>
                    </div>
                    <div id="privacypolicy" class="col-11 offset-1 col-sm-2 order-sm-last order-first ">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy policy</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        var addCart = document.getElementById('main-product-add-to-cart-button');
        addCart.addEventListener('click', function(){

            /* get shoes related info */
            
        });
    </script>
</body>
</html>