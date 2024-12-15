<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_news.css">
    <title>News</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--rating-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--header-->
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
    <!--header-->
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
    <!--end of header-->
    <div class="menu">
        <div class="heading">
            <h1>DISH DAZZLE</h1>
            <h3>&mdash; NEWS &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="https://www.allrecipes.com/thmb/chHxROygOOY2mPghtY_9z0GDsGU=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/ar-cheesecake-factory-getty-images-4x3-edaf36c7314540e484f7f93f7061adbb.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                <h5 style="color: red;">FOOD NEWS AND TRENDS</h5>
                </div>
                <h5>Cheesecake Factory Just Introduced a New Flavor to Its Lineup and We Can't Wait to Try It </h5>
                
            </div>
        </div>
        <div class="food-items">
            <img src="https://www.allrecipes.com/thmb/nUtqKX71XnkCU4gh7HMM_cgmaDQ=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/ar-mcdonalds-arches-sign-shutterstock-4x3-f11960fd960b4293a0df0649ab7f4caa.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                <h5 style="color: red;">FOOD NEWS AND TRENDS</h5>
                </div>
                <h5>McDonald's Is (Supposedly) Introducing a New Pie Flavor </h5>
                
            </div>
        </div>
        <div class="food-items">
            <img src="https://www.allrecipes.com/thmb/ikuMzrGrG0H3duYhU-vNsW30ZZM=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/New-Pepsi-Flavor_3x2-c547e80218754af4b6cec2a1658414e7.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                <h5 style="color: red;">FOOD NEWS AND TRENDS</h5>
                </div>
                <h5>Pepsi Just Released Its Most Controversial Flavor Yet </h5>
                
            </div>
        </div>
        <div class="food-items">
            <img src="https://www.allrecipes.com/thmb/PFOP92oBhirARISb5hMh4YXCnDM=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/AR-KFC-logo-bbq-fried-sandwich-4x3-1a06c41431284ce39c7bd6468dbace69.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                <h5 style="color: red;">FOOD NEWS AND TRENDS</h5>
                </div>
                <h5>KFC Is Launching a New Fried Chicken Sandwich </h5>
                
            </div>
        </div>
        <div class="food-items">
            <img src="https://www.allrecipes.com/thmb/pAzKRcLtFZXrLTmlgYDKpmX09PY=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/amazons-secret-kitchen-outlet-is-overflowing-with-early-prime-day-deals-and-prices-start-at-4-tout-911d75d485bf4bf49b49199e5dd2c5e4.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                <h5 style="color: red;">FOOD NEWS AND TRENDS</h5>
                </div>
                <h5>Amazons Secret Kitchen Outlet Is Overflowing With Early Prime Day Deals, and Prices Start at $5 </h5>
                
            </div>
        </div>
        <div class="food-items">
            <img src="https://www.allrecipes.com/thmb/BcBJAENHDMtX6EvBQpWKTFQuz2k=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/AR-sodalawsuit-GettyImages-1177462101-4x3-049a1a6cf94840a1ba12465062635c23.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                <h5 style="color: red;">FOOD NEWS AND TRENDS</h5>
                </div>
                <h5>If You've Ever Drunk These Sodas, You Could Get Up to $25 From a New Class Action Settlement </h5>
                
            </div>
        </div>
    </div>
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
</body>
</html>