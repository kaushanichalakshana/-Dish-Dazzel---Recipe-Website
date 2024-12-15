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
    <link rel="stylesheet" href="sl.css">
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
            <h3>&mdash; SRI LANKAN &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="https://d104tpg70nvstz.cloudfront.net/2021/10/Pol-Roti-mob.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Pol roti with pol sambol</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>Pol roti is a simple coconut and flour savoury flatbread specific to Sri Lanka. They are charred to cook and puff up a little. They are usually eaten alongside a curry meal or more simply with sambols for breakfast. </p>
                <button onclick="window.location.href = 'sl-1.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://cdn.broadsheet.com.au/cache/1a/d4/1ad45aa9d1cc273a71b3d06180a676b8.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Spice-crusted Murray cod with capers and curry leaf butter</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>This is a delicious buttery number that, once the preparation is done, you can very easily and quickly serve up as a snack for drinks. It's a little salty and has a spice kick to get things going.</p>
                <button onclick="window.location.href = 'sl-2.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://biteontheside.com/wp-content/uploads/2022/01/roasted-turmeric-potatoes-9.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Tempered crunchy fried potatoes with turmeric</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>This quick dish, made by tempering hot spices, curry leaves and onion in oil and adding soft potatoes so they crisp up in the pan, is great made with new potatoes that you don’t need to peel. I roast the potatoes a bit crispier than is strictly traditional.  If you can get Maldive fish or bonito, it makes a big difference.</p>
                <button onclick="window.location.href = 'sl-3.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://boroughmarket.org.uk/wp-content/uploads/2022/08/Sri-Lankan-turmeric-omelette-Alex-Lau-1024x576.jpg" height="300"> 
            <div class="details">
                <div class="details-sub">
                    <h5>Sri Lankan turmeric omelette</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                    </div>
                </div>
                <p>This is a favourite breakfast dish; one my mum cooks when she’s taking orders for breakfast at the weekends from her grandson, Thierry, who may be only six but knows what’s up. You can have it on its own with something fresh like a little dill, lime and watercress salad, perhaps with some soft white bread, too.</p>
                <button onclick="window.location.href = 'sl-4.php'">See Full Recipe</button>
            </div>
        </div>


        <div class="food-items">
            <img src="https://foodvoyageur.com/wp-content/uploads/2020/10/Seeni-Sambol-bun.webp" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Seeni sambol buns</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>Seeni Sambol buns are a Sri Lankan favourite; found at bakeries and street vendors all of the island. Like most Sri Lankan foods, many families follow their own personal and unique method for their sambol; allow me to share my own.</p>
                <button onclick="window.location.href = 'sl-5.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://www.abelandcole.co.uk/media/2176_18156_x.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Sri Lankan beetroot curry</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                    </div>
                </div>
                <p>The spices in this dish bring out the earthiness in the beetroot, with a nice balance of sweetness from the coconut milk.</p>
                <button onclick="window.location.href = 'sl-6.php'">See Full Recipe</button>
            </div>
        </div>
    </div>
</body>
</html>