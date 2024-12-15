<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DishDazzle Header</title>
    <link rel="stylesheet" href="header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
    <header class="nav__list"><div>
        <h1>DishDazzle</h1></div>
        <div class="header-left">
            
            <nav>
                <ul>
                    <li>
                        <a href="" class="active">Home</a>
                    </li>
                    <li>
                        <a href="">Categories</a>
                    </li>
                    <li>
                        <a href="">Trending</a>
                    </li>
                    <li>
                        <a href="">Food News</a>
                    </li>
                    <li>
                        <a href="">About Us</a>
                    </li>
                </ul>
                <div class="login-signup">
                    <a href="">Login</a>
                </div>
            </nav>
        </div>
        <div class="header-right">
            <div class="login-signup">
                <a href="">Login</a>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>
</body>
</html>