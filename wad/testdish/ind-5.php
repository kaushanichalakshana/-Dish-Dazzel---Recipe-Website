<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy red lentil dahl</title>
    <link rel="stylesheet" href="ita-1.css">
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
    <section class="food-area">
        <div class="container">
            <div class="title">
                <p>DISH DAZZLE</p>
                <h4>Easy red lentil dahl</h4>
            </div>
            <div class="foods">
                <div class="single-food">
                    <div class="food-img">
                        <img src="https://images.unsplash.com/photo-1625467150295-8eadf10ea64d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="">
                        <h4>INGREDIENTS</h4>
                    </div>
                    <ul class="food-list">
                        <li>large organic or free-range eggs <span>3 </span></li>
                        <li>salt, or to taste, <span>1 tsp </span></li>
                        <li>ground turmeric<span>¾ tsp</span></li>
                        <li>coconut or vegetable oil <span>1½ tbsp  </span></li>
                        <li>red onion <span>½  </span></li>
                        <li>green chillies, sliced<span>1-2 </span></li>
                        <li>garlic clove <span>1</span></li>
                        <li>fresh curry leaves <span>7- 8</span></li>
                        
                    </ul>
                </div>
                <div class="single-food">
                    <div class="food-img">
                        <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29va2luZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                        <h4>INSTRUCTIONS</h4>
                    </div>
                    <ul class="food-list">
                        <li><span>1.</span>Combine the yoghurt, lemon juice and garam masala in a bowl. Add the chicken and mix until well coated. Cover and refrigerate for 6 hours or overnight.</li>
                        <li><span>2.</span>Heat the vegetable oil in a large saucepan over medium heat. Add the garlic, ginger, chillies, cinnamon stick, salt, coriander, cumin and turmeric. Cook, stirring, for 1 minute, or until fragrant. Add the chicken and cook for 3–4 minutes, stirring well to coat it in the spices.</li>
                        <li><span>3.</span>Stir in the passata, sugar and almond meal, then cover and simmer over low heat for 20 minutes.</li>
                        <li><span>4.</span>Serve with basmati rice, garnished with coriander.</li>
                    </ul>
                </div>
            </div>
            <button style="background-color:#c30707; padding:15px 32px; border-radius:10px; color:white; border:none; font-weight: bold;" onclick="window.location.href = 'test_1_1.php'">Rate This Recipe</button>
        </div>
    </section>
</body>
</html>
