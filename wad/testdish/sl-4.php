<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sl-1.css">
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
                <h4>Spice-crusted Murray cod with capers and curry leaf butter</h4>
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
                        <li><span>1.</span>For the pepper-cumin salt, toast the cumin seeds and peppercorns in a small dry frying pan over a medium heat for 1–2 minutes until fragrant. Transfer to a bowl to cool, then blitz in a spice grinder or mini food processor until fine, and keep aside for later.</li>
                        <li><span>2.</span>In a bowl, whisk the eggs together with the salt and turmeric until frothy. Set aside.</li>
                        <li><span>3.</span>Heat 3 teaspoons of oil in a frying pan around 20-25cm wide over a medium heat. Add the onion (or spring onions), green chillies, garlic and curry leaves. Allow to cook, stirring occasionally, for 4-5 minutes, so that the onion softens; don’t allow it to crisp, and don’t cook past the point that the chillies and curry leaves are still bright green.</li>
                        <li><span>4.</span>Add the remaining oil to the pan, wait 30 seconds for the oil to get hot, and then pour in the eggs. Keep cooking over a medium heat and use a spatula to pull the edges in as they set, tilting the pan to spread the uncooked egg around. Continue this motion of pulling the edges in and tilting all around the pan, until the omelette is almost set, which will take around 2-3 minutes.</li>
                        
                    </ul>
                </div>
            </div>
            <button style="background-color:#c30707; padding:15px 32px; border-radius:10px; color:white; border:none; font-weight: bold;" onclick="window.location.href = 'test_1_1.php'">Rate This Recipe</button>
        </div>
    </section>
</body>
</html>
