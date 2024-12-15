<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>DISH DAZZLE</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--rating-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="italy.css">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
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
    <!--end of the header-->
    <div class="menu">
        <div class="heading">
            <h1>DISH DAZZLE</h1>
            <h3>&mdash; ITALIAN &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="https://gustotv.com/wp-content/uploads/2020/05/2029_honey-cheese-fritters.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Honey and cheese fritters (seadas)</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                    </div>
                </div>
                <p>These light, golden fritters are a little bit sweet and a little bit savoury.  </p>
                <button onclick="window.location.href = 'ita-1.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://www.ciaoumbria.it/wp-content/uploads/2018/07/rocciata-un-gustoso-dolce-che-deriva-dalle-radici-di-arrocciare-o-di-torcere.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Umbrian strudel (rocciata di Assisi)</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                    </div>
                </div>
                <p>This strudel is all about sweet, wintery flavours, with apples, dried figs, walnuts, almonds, raisins, cinnamon, fennel seeds and lemon zest. The olive oil pastry is easy to make and easy to roll out.</p>
                <button onclick="window.location.href = 'ita-2.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://img.delicious.com.au/-AUcWX4p/del/2015/10/mustard-crusted-veal-roast-with-red-cabbage-slaw-15025-1.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Veal roast (arrosto di vitello) with mustard fruit</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked" ></span>
                        <span class="fa fa-star fa-3x checked"></span>
                    </div>
                </div>
                <p>I like to be extra generous with the sweet-sour mustard fruits, which go so well with the tender roast veal in this Lombardy-inspired dish. </p>
                <button onclick="window.location.href = 'ita-3.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://static01.nyt.com/images/2014/04/02/dining/spuma-di-mortadella/spuma-di-mortadella-superJumbo.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Mortadella mousse (spuma di mortadella)</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>This light, airy mousse is excellent to spread on tigelle, light fluffy mini flatbreads from Emilia-Romagna.</p>
                <button onclick="window.location.href = 'ita-4.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://more.ctv.ca/content/dam/lifestyle/uploadImg/2019/9/20/sour-cherry-and-ricotta-tart.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Sour cherry and ricotta tart</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>This lovely crostata with its golden-crown pastry crust is soft and creamy in the middle, with a hint of licorice from a dash of Sambuca. </p>
                <button onclick="window.location.href = 'ita-5.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://gustotv.com/wp-content/uploads/2020/05/2022_spiced-chocolate-cookies.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Spiced chocolate cookies (rame di Napoli)</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>Orange zest works wonderfully with honey, cinnamon and cloves in these soft-centred biscuits, coated in chocolate and pistachio.  </p>
                <button onclick="window.location.href = 'ita-6.php'">See Full Recipe</button>
            </div>
        </div>
    </div>
</body>
</html>