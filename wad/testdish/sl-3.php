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
                        <li>new potatoes, washed <span>500 g</span></li>
                        <li>ground turmeric <span>½ tsp </span></li>
                        <li>salt<span>2 tsp</span></li>
                        <li>coconut or vegetable oil<span>1½ tbsp (30 ml) </span></li>
                        <li>lime<span>1 </span></li>
                        <li>coconut or vegetable oil<span>10</span></li>
                        <li>medium red onion, peeled and finely sliced <span>1</span></li>
                        <li>fresh curry leaves <span>1</span></li>
                        <li>garlic clove, peeled and sliced <span>2 tsp</span></li>
                        <li>green chilli, finely sliced<span>3 tsp </span></li>
                        <li>Maldive fish flakes, bonito flakes or katsuobushi<span>1 tsp</span></li>
                        
                    </ul>
                </div>
                <div class="single-food">
                    <div class="food-img">
                        <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29va2luZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                        <h4>INSTRUCTIONS</h4>
                    </div>
                    <ul class="food-list">
                        <li><span>1.</span>Place the split peas and onion in a large saucepan and cover with 1.5 litres of water. Add a good pinch of salt and bring to the boil, skimming off the impurities that rise to the surface.</li>
                        <li><span>2.</span>Reduce the heat and simmer for 15 minutes. Add the cauliflower and continue to cook for a further 15 minutes until the split peas are tender.  Stir in the coconut milk and cook for 2 minutes until the curry has thickened.</li>
                        <li><span>3.</span>Heat the coconut oil in a small frying pan over medium heat and add the turmeric, cumin seeds and most of the chilli. Cook for a few seconds until fragrant, then tip into the curry. Fold through, then check the seasoning and remove the curry from the heat.</li>
                        <li><span>4.</span>Scatter on the fried shallots, mint leaves and reserved chilli and serve drizzled with a little extra coconut milk, if you like.</li>
                        
                    </ul>
                </div>
            </div>
            <button style="background-color:#c30707; padding:15px 32px; border-radius:10px; color:white; border:none; font-weight: bold;" onclick="window.location.href = 'test_1_1.php'">Rate This Recipe</button>
        </div>
    </section>
</body>
</html>
