<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_about.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--rating-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Stylesheet-->
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

    <title>ABOUT</title>

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
            <h3>&mdash; About Us &mdash; </h3>
        </div>
    </div>
    <div class="a-container">
        <div class="about">
            <div class="about-image">
                <img
                    src="https://img.freepik.com/premium-photo/lots-green-lettuce-ketchup-thick-beef-burger-mouthwatering-hamburger_124507-25477.jpg?w=360">
            </div>
            <div class="about-contact">
                <h2>About Us</h2>
                <p>Welcome to DishDazzle, your ultimate destination for discovering and savoring culinary delights from
                    around the world. Our website is dedicated to bringing you an immersive experience in the realm of
                    gastronomy, where you can search for a wide variety of recipes, watch captivating cooking videos,
                    and indulge in the flavors of Sri Lankan, Indian, and Italian cuisines.</p>
    
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