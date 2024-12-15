<?php
    session_start();
?>
<?php
require './classes/DBConnector.php';
use classes\DBConnector;
$dbcon = new DBConnector();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Rating with Review </title>
        <meta name="viewport" content="width=device-width, intial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
            body {
            background-color: #c30707;
            }
            
            .progress {
            background-color: #c30707;
             opacity: 0.3;
            }
            .progress-label-left{
                float: left;
                margin-right: 0.5em;
                line-height: 1em;
            }
            .progress-label-right {
                float: right;
                margin-left: 0.3em;
                line-height: 1em;
            }
            .star-light{
                color: #c30707;
            }
            .stars {
                display: inline-block;
                font-size: 30px;
                cursor: pointer;
            }
            .star {
                color: gray;
            }
            .selected {
                color: #c30707; /* Change to your desired color for selected stars */
            }
        </style>
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
        <?php
        $rowcount1 = null;
        $rowcount2= null;
        $rowcount3 = null;
        $rowcount4= null;
        $rowcount5 = null;
        $query = "SELECT * FROM review_table where user_rating = ?";
        try{
            $con = $dbcon->getConnection();
            $pstmt1 = $con->prepare($query);
            $pstmt1->bindValue(1, "1");
            $pstmt1->execute();
            
             $pstmt2 = $con->prepare($query);
            $pstmt2->bindValue(1, "2");
            $pstmt2->execute();
            
             $pstmt3 = $con->prepare($query);
            $pstmt3->bindValue(1, "3");
            $pstmt3->execute();
            
             $pstmt4 = $con->prepare($query);
            $pstmt4->bindValue(1, "4");
            $pstmt4->execute();
            
             $pstmt5 = $con->prepare($query);
            $pstmt5->bindValue(1, "5");
            $pstmt5->execute();
            
            
               $rowcount1 = $pstmt1 ->rowCount();
                $rowcount2 = $pstmt2 ->rowCount(); 
              $rowcount3 = $pstmt3 ->rowCount();
              $rowcount4 = $pstmt4 ->rowCount();
              $rowcount5 = $pstmt5 ->rowCount();
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
        ?>
        <div class="container">

            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h1 class="text-warning mt-4 mb-4">DISH DAZZLE
                                <b><span id="average_rating" style="color:white;"></span></b>
                            </h1>
                           
                            <h3><span id="total_review">0</span> Reviews</h3>
                        </div>
                        <div class="col-sm-4">
                            <p>
                            <div class="progress-label-left">
                                <b>5</b> <i class="fa-solid fa-star" style="color: #b92222;"></i>
                            </div>
                            <div class="progress-label-right">(<span id="total_five_star_review"><?php echo $rowcount5; ?></span>)</div>
                            <div class="progress">
                               
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left">
                                <b>4</b> <i class="fa-solid fa-star" style="color: #b92222;"></i>
                            </div>
                            <div class="progress-label-right">(<span id="total_four_star_review"><?php echo $rowcount4; ?></span>)</div>
                            <div class="progress">
                                
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left">
                                <b>3</b> <i class="fa-solid fa-star" style="color: #b92222;"></i>
                            </div>
                            <div class="progress-label-right">(<span id="total_three_star_review"><?php echo $rowcount3; ?></span>)</div>
                            <div class="progress">
                                
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left">
                                <b>2</b> <i class="fa-solid fa-star" style="color: #b92222;"></i>
                            </div>
                            <div class="progress-label-right">(<span id="total_two_star_review"><?php echo $rowcount2; ?></span>)</div>
                            <div class="progress">
                                
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left">
                                <b>1</b> <i class="fa-solid fa-star" style="color: #b92222;"></i>
                            </div>
                            <div class="progress-label-right">(<span id="total_one_star_review"><?php echo $rowcount1; ?></span>)</div>
                            <div class="progress">
                                
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3 class="mt-4 mb-3">Write Review Here</h3>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add" style="background-color: #c30707;">
                                Review
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" id="review_content"></div>
            
            <!-- Add this section to your HTML -->
            <div id="review_list" class="mt-4" style="background-color:#c30707;">
               
            </div>

        </div>

        <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                <div class="modal-content w-150">
                    <div class="modal-header">
                        <h5 class="modal-title">Submit Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form action="submit_rating.php" method="POST">
                            <h4 class="text-center mt-2 mb-4">
                                <div class="stars">
                                    <span class="star" data-value="1"><i class="fa-solid fa-star" ></i></span>
                                    <span class="star" data-value="2"><i class="fa-solid fa-star" ></i></span>
                                    <span class="star" data-value="3"><i class="fa-solid fa-star" ></i></span>
                                    <span class="star" data-value="4"><i class="fa-solid fa-star" ></i></span>
                                    <span class="star" data-value="5"><i class="fa-solid fa-star" ></i></span>
                                </div>
                                <input type="hidden" id="starCount" name="starCount" value="0">
                                <p id="result"></p>

                                <script>
                                    const stars = document.querySelectorAll(".star");
                                    const result = document.getElementById("result");
                                    const starCountInput = document.getElementById("starCount");
                                    let selectedValue = 0;

                                    stars.forEach(star => {
                                        star.addEventListener("mouseover", () => {
                                            resetStars();
                                            const value = parseInt(star.getAttribute("data-value"));
                                            for (let i = 0; i < value; i++) {
                                                stars[i].classList.add("selected");
                                            }
                                        });

                                        star.addEventListener("mouseout", () => {
                                            if (selectedValue === 0) {
                                                resetStars();
                                            }
                                        });

                                        star.addEventListener("click", () => {
                                            const value = parseInt(star.getAttribute("data-value"));
                                            selectedValue = value;
                                            starCountInput.value = value; // Update the hidden input value
                                            result.innerText = `You rated this ${value} stars!`;
                                            resetStars();
                                            for (let i = 0; i < value; i++) {
                                                stars[i].classList.add("selected");
                                            }
                                        });
                                    });

                                    function resetStars() {
                                        stars.forEach(star => {
                                            star.classList.remove("selected");
                                        });
                                    }
                                    
                                    <!-- Your existing JavaScript code... -->

    
    // AJAX request to fetch review data
    const reviewList = document.getElementById("review_list");
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "fetch_reviews.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const reviews = JSON.parse(xhr.responseText);
            renderReviews(reviews);
        }
    };
    xhr.send();
    
    // Function to render reviews
    function renderReviews(reviews) {
        let html = "";
        for (const review of reviews) {
            html += `
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">${review.user_name}</h5>
                        <p class="card-text">${review.user_review}</p>
                    </div>
                </div>`;
        }
        reviewList.innerHTML = html;
    }


                                    
                                    <!-- Your existing JavaScript code... -->

    // Function to fetch reviews and update ratings
    function fetchReviewsAndUpdateRatings() {
        // Fetch reviews using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "fetch_reviews.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const reviews = JSON.parse(xhr.responseText);
                renderReviews(reviews);
                updateRatings(reviews);
            }
        };
        xhr.send();
    }

    // Function to update ratings based on fetched reviews
    function updateRatings(reviews) {
        const totalReviews = reviews.length;
        const ratings = [0, 0, 0, 0, 0]; // Array to store rating counts (1 to 5 stars)
        let totalRating = 0;

        for (const review of reviews) {
            const rating = parseInt(review.user_rating);
            totalRating += rating;
            ratings[rating - 1]++;
        }

        // Update average rating
        const averageRating = totalRating / totalReviews;
        document.getElementById("average_rating").innerText = averageRating.toFixed(1);

        // Update total review count
        document.getElementById("total_review").innerText = totalReviews;

        // Update progress labels and bars
        for (let i = 1; i <= 5; i++) {
            const progressBar = document.getElementById(`${i}_star_prgress`);
            const progressLabel = document.getElementById(`total_${i}_star_review`);
            progressBar.style.width = (ratings[i - 1] / totalReviews) * 100 + "%";
            progressLabel.innerText = ratings[i - 1];
        }
    }

    // Initial fetch and update
    fetchReviewsAndUpdateRatings();

    // Set interval to update ratings every X seconds (optional)
    setInterval(fetchReviewsAndUpdateRatings, 10000); // Update every 10 seconds


                                </script>

                            </h4>
                            <div class="form-group">
                                <input type="text" name="user_name" class="form-control" placeholder="Enter Your Name" />
                            </div> <br>
                            <div class="form-group">
                                <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea> 
                            </div>
                            <div class="form-group text-center mt-4">
                               <button type="submit" class="btn btn-primary" id="save_review" style="background-color: #c30707;" >Submit</button>
                            </div>
                        </form>
                    </div>                    

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