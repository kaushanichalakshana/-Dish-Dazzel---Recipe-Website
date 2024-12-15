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
                <h4>Pol roti with pol sambol</h4>
            </div>
            <div class="foods">
                <div class="single-food">
                    <div class="food-img">
                        <img src="https://images.unsplash.com/photo-1625467150295-8eadf10ea64d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="">
                        <h4>INGREDIENTS</h4>
                    </div>
                    <ul class="food-list">
                        <li>grated coconut <span>200 g</span></li>
                        <li>self-raising flour <span>325 g</span></li>
                        <li>eschallot, finely sliced<span>70 g</span></li>
                        <li>curry leaves, finely sliced <span>¼ cup</span></li>
                        <li>ghee <span>2 tbsp</span></li>
                        <li>baking powder<span>1 tsp</span></li>
                        <li>grated coconut <span>200 g</span></li>
                        <li>small green chillies, finely chopped <span>2</span></li>
                        <li>chilli powder <span>2 tsp</span></li>
                        <li>ground black pepper<span>1 tsp</span></li>
                        <li>sweet paprika<span>1 tsp</span></li>
                    </ul>
                </div>
                <div class="single-food">
                    <div class="food-img">
                        <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29va2luZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                        <h4>INSTRUCTIONS</h4>
                    </div>
                    <ul class="food-list">
                        <li><span>1.</span>To make the pol roti, in a large bowl combine the grated coconut, self-raising flour, eschallot, sliced curry leaves, ghee, baking powder and a generous pinch of sea salt flakes. Mix well, using your hands. Gradually add 50 – 100 ml water, mixing as you go, until the dough comes together and is slightly sticky. Cover with a tea towel and rest for 30 minutes.</li>
                        <li><span>2.</span>Meanwhile, to make the sambol; place all ingredients, except lime juice and salt, into a medium bowl together and use your hands to combine and thoroughly mix. Season well with salt, taste and then season more if needed, the add the lime juice. The flavour should be sweet, hot and tangy.</li>
                        <li><span>3.</span>Divide the dough into 10 equal pieces, rolling them into balls.</li>
                        <li><span>4.</span>Use a rolling pin or a tortilla press to flatten the dough into discs about 5 mm thick. Use baking paper on each side of the ball for ease and less stickiness.</li>
                        <li><span>5.</span>To cook, place the roti into a hot frying pan over high heat, a flat top plate or BBQ for 1-2 minutes, until it darkens and chars. Flip and repeat on the other side. When both sides are lightly charred, reduce the heat and cook for a further 2-3 minutes.</li>
                        <li><span>6.</span>Serve the pol roti warm with the sambol, curries or even with butter and vegemite.</li>
                    </ul>
                </div>
            </div>
            <button style="background-color:#c30707; padding:15px 32px; border-radius:10px; color:white; border:none; font-weight: bold;" onclick="window.location.href = 'test_1_1.php'">Rate This Recipe</button>
        </div>
    </section>
</body>
</html>
