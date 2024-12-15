<?php
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Home</title>


        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!--owl slider stylesheet -->
        <link rel="stylesheet" type="text/css"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        <!-- font awesome style -->
        <link href="css/font-awesome.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />

    </head>

    <body>

        <div class="hero_area">


            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" alt="">
                        </a>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="category.php">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="test_1_1.php">Rating</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index_news.php">Food News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index_about.php">About Us</a>
                                </li>
                                

                            </ul>
                        </div>
                        <div class="quote_btn-container">
                            <?php
                            if (isset($_SESSION["userid"])) {
                                ?>
                                <li><a href="index.php"><?php echo $_SESSION["useruid"]; ?></a></li>
                                <li><a href="includes/logout.inc.php" class="quote_btn">LOGOUT</a></li>
                                <?php
                            } else {
                                ?>
                                <li><a href="login-signup.php">SIGN UP</a></li>
                                <li><a href="login-signup.php" class="quote_btn">LOGIN</a></li>
    <?php
}
?>
                        </div>

                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="detail-box">
                                        <h4>
                                            Welcome to Dish Dazzle, <br><br> your ultimate destination for culinary inspiration!
                                        </h4>
                                        <div class="btn-box">
                                            <!-- <a href="" class="btn1">
                                              Contact Us
                                            </a> -->
                                            <a href="index_about.php" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="detail-box">
                                        <h4>
                                            SRI LANKAN <br><br>
                                            Sri Lankan cuisine is a delightful fusion of flavors, <br>
                                            spices, and influences from various cultures.
                                        </h4>
                                        <div class="btn-box">
                                            <!-- <a href="" class="btn1">
                                              Contact Us
                                            </a> -->
                                            <a href="" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="detail-box">
                                        <h4>
                                            INDIAN <br><br>
                                            Indian cuisine is renowned for its rich and diverse <br>
                                            flavors, vibrant colors, and aromatic spices.
                                        </h4>
                                        <div class="btn-box">
                                            <!-- <a href="" class="btn1">
                                              Contact Us
                                            </a> -->
                                            <a href="" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="detail-box">
                                        <h4>
                                            ITALIAN <br><br>
                                            Italian cuisine is beloved worldwide for its <br>
                                            simplicity, fresh ingredients, and robust flavors.
                                        </h4>
                                        <div class="btn-box">
                                            <!-- <a href="" class="btn1">
                                              Contact Us
                                            </a> -->
                                            <a href="" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="detail-box">
                                        <h1>
                                            Stay Tuned <br>
                                            With Us!
                                        </h1>
                                        <div class="btn-box">
                                            <!-- <a href="" class="btn1">
                                              Contact Us
                                            </a> -->
                                            <a href="index_about.php" class="btn2">
                                                About Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                    <li data-target="#customCarousel1" data-slide-to="3"></li>
                    <li data-target="#customCarousel1" data-slide-to="4"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>




    <!-- end service section -->


    <!-- about section -->

    <section class="about_section">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>
                        </div>
                        <p>
                            Welcome to DishDazzle, your ultimate destination for discovering and savoring culinary delights from
                            around the world. Our website is dedicated to bringing you an immersive experience in the realm of
                            gastronomy, where you can search for a wide variety of recipes, watch captivating cooking videos, and
                            indulge in the flavors of Sri Lankan, Indian, and Italian cuisines.
                        </p>
                        <!-- <a href="">
                          Read More
                        </a> -->
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="https://staticcookist.akamaized.net/wp-content/uploads/sites/22/2021/09/beef-burger.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end about section -->



    <!-- project section -->


    <!-- end project section -->

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    JOIN WITH DISH DAZZLE!
                </h2>
            </div>
        </div>
        <div id="customCarousel2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client1.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client1_name">
                                                <h5>
                                                    Vishma Gunawardhana
                                                </h5>
                                                <h6>
                                                    Customer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Dish Dazzle has completely transformed my cooking experience! The wide variety of recipes,
                                            accompanied by clear instructions and stunning visuals, has made it easy for me to try new dishes
                                            and impress my family and friends.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client2.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Kaushi Chalakshana
                                                </h5>
                                                <h6>
                                                    Customer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            I can't get enough of Dish Dazzle! The recipe collection is incredibly diverse, and I love how
                                            they cater to different dietary preferences. Whether I'm looking for a quick weeknight dinner or a
                                            show-stopping dessert, Dish Dazzle always has the perfect recipe.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/client3.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Pirashoban Kulasegaram
                                                </h5>
                                                <h6>
                                                    Customer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Dish Dazzle has become my go-to resource for all things food-related. The website's user-friendly
                                            interface and well-organized categories make it effortless to navigate and find exactly what I'm
                                            looking for. Thanks to Dish Dazzle, I've expanded my culinary repertoire and discovered flavors I
                                            never thought I'd love!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel2" data-slide-to="1"></li>
                <li data-target="#customCarousel2" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end client section -->

    <!-- why us section -->

    <section class="why_us_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Why Choose Us?
                </h2>
            </div>
            <div class="why_us_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/w1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Extensive Recipe Collection
                        </h5>
                        <p>
                            Dish Dazzle boasts a vast and diverse collection of recipes, ranging from traditional favorites to
                            innovative and exotic dishes. With an extensive selection, users can explore a wide range of cuisines and
                            find recipes to suit their taste preferences.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/w2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Community Interaction
                        </h5>
                        <p>
                            Dish Dazzle fosters a vibrant community of food enthusiasts. Users have the opportunity to engage with
                            fellow cooks, share their own recipes, and receive feedback. This interactive aspect creates a sense of
                            belonging and encourages users to connect, learn, and grow together.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/w3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Clear and Concise Instructions
                        </h5>
                        <p>
                            Dish Dazzle ensures that every recipe is presented with clear and easy-to-follow instructions. Whether
                            you're a beginner or an experienced cook, the step-by-step guidance helps you create delicious meals with
                            confidence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <!-- <a href="">
                  Read More
                </a> -->
            </div>
        </div>
    </section>

    <!-- end why us section -->

    <!-- contact section
    
    end contact section -->

    <!--info section-->
    <section class="info_section ">

        <div class="container">
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call : +94 76 9201332
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : dishdazzle@gmail.com
                    </span>
                </a>
                </a>
            </div>

            <div class="info_top ">
                <div class="row info_main_row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="info_links">
                            <h4>
                                DISH DAZZLE
                            </h4>
                            <div class="info_links_menu">
                                <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                                <a class="" href="service.php">Category</a>
                                <a class="" href="about.php">Trending </a>
                                <a class="" href="project.php">Food News</a>
                                <a class="" href="contact.php">About Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
                        <div class="info_post">
                            <h5>
                                INSTAGRAM FEEDS
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/instagram.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/instagram1.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/instagram2.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/instagram3.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/instagram4.jpg" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/instagram.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info_form">
                            <h4>
                                SUPPORT US WITH GIVING FEEDBACK!
                            </h4>
                            <form action="">
                                <input type="text" placeholder="Enter Your Feedback" />
                                <button type="submit">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class="col-md-2">
                        <div class="info_logo">
                            <a href="">
                                <img src="images/logo2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--end info_section-->


    <!--footer section-->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Dish Dazzle</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!--  OwlCarousel 2 - Filter -->
    <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>