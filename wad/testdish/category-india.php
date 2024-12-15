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
    <link rel="stylesheet" href="india.css">
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
            <h3>&mdash; INDIAN &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="https://img.taste.com.au/yEVVergq/taste/2016/11/red-lentil-dahl-85346-1.jpeg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Easy red lentil dahl</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>This simple, nutritious red lentil dahl requires just 5 minutes hands-on time to create a rich vegetarian dinner that simmers away on the stovetop. Serve with a homemade tadka that infuses oil with cumin, curry leaves, garlic and chilli to add mouthwatering flavour.</p>
                <button onclick="window.location.href = 'ind-1.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://swatisani.net/kitchen/wp-content/uploads/2015/09/IMG_9051.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Mangalorean ghee chicken</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x " ></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>Mangalorean ghee chicken is a rich and flavourful Indian dish that originates from the coastal city of Mangalore. Chicken marylands are marinated in a combination of turmeric, yoghurt and lemon juice, then cooked with a flavoursome masala curry paste. Serve with warm parathas.</p>
                <button onclick="window.location.href = 'ind-2.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://realfood.tesco.com/media/images/sri-lankan-style-fish-curryl-d4589d26-f112-411f-b646-f5ae0fdffe33-0-1400x919.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Christine's coconut fish curry</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>Try this simple coconut fish curry packed with spices, curry leaves, lime juice and coriander. Serve with steamed rice to soak up all the divine coconut curry sauce!</p>
                <button onclick="window.location.href = 'ind-3.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://i.ytimg.com/vi/KacmDtvwT3o/maxresdefault.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Prawn biryani and sweet yoghurt raita</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                    </div>
                </div>
                <p>Speed up your biryani cook time by using a quick-cooking protein like prawns. A sweet yoghurt raita on the side provides a refreshing creamy contrast to the complex and bold flavours of the spiced biryani.</p>
                <button onclick="window.location.href = 'ind-4.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://pikturenama.com/wp-content/uploads/2021/04/Low-res-Andhra-Pepper-Chicken-2.jpg" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken pepper fry</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>This punchy recipe is a classic from the Chettinad region of Tamil Nadu. It has a decent kick of pepper and spice that lingers on the palate. Serve these with appams – South Indian lacy pancakes made with fermented rice batter and coconut milk.</p>
                <button onclick="window.location.href = 'ind-5.php'">See Full Recipe</button>
            </div>
        </div>

        <div class="food-items">
            <img src="https://cdn.cdnparenting.com/articles/2020/02/24151407/Paneer-Paratha-Recipe.webp" height="300">
            <div class="details">
                <div class="details-sub">
                    <h5>Paneer paratha</h5>
                    <div class="container">
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x checked"></span>
                        <span class="fa fa-star fa-3x"></span>
                        <span class="fa fa-star fa-3x"></span>
                    </div>
                </div>
                <p>Paneer paratha is a beloved Indian stuffed flatbread. The dough is made from wholemeal wheat flour and is filled with crumbled paneer, chilli, cumin, coriander, mint and spring onion. They are best eaten hot, so roll out parathas, cook and serve at the same time to ensure they are eaten fresh!</p>
                <button onclick="window.location.href = 'ind-6.php'">See Full Recipe</button>
            </div>
        </div>
    </div>
</body>
</html>