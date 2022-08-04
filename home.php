<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown Menu with Search Box | CodingNepal</title>
    <link rel="stylesheet" href="mainStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="#">WikiCar</a></div>
                <ul class="links">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Garage</a></li>
                    <li>
                        <a href="#" class="desktop-link">Post</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Post</label>
                        <ul>
                            <li><a href="#">Drop Post</a></li>
                            <li><a href="#">Drop Post</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Brands</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Brands</label>
                        <ul>
                            <li><a href="#">Drop Brands</a></li>
                            <li><a href="#">Drop Brands</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Models</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Models</label>
                        <ul>
                            <li><a href="#">Drop Models</a></li>
                            <li><a href="#">Drop Models</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum non vitae beatae nam ab nihil perferendis voluptatibus iusto saepe obcaecati, soluta nesciunt laudantium architecto ad dolor dolorem adipisci maxime sapiente?</p>
    </div>


   
        <footer class="footer-distributed">

        <div class="footer-left">
            <img src="img/logo.png">
            <h3>WikiCar</h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">© 2019 Eduonix Learning Solutions Pvt. Ltd.</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>309 - Rupa Solitaire,
                        Bldg. No. A - 1, Sector - 1</span>
                    Mahape, Navi Mumbai - 400710</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 22-27782183</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@eduonix.com">support@eduonix.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                We offer training and skill building courses across Technology, Design, Management, Science and
                Humanities.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    
    
    </footer>

</html>