<?php
    include("../../connection/queries.php");
    session_start();
    $name = new BasicProcedure("selectSectionlList","","");
    $resultadoName=$name->getBasicProcedure();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post it! | WikiCar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wikicar/mainStyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>

    <!--TOP NAVIGATION-->
    <header id="header">
        <div class="topnav" id="myTopnav">
            <a href="/wikicar/home.php" id="active"><img src="/wikicar/assets/img/logos/logo.png" class="logo">
                <b>WikiCar</b></a>
            <a href="/wikicar/profile/code/profileCheck.php">PROFILE</a>
            <a href="/wikicar/profile/code/garageCheck.php">GARAGE</a>

            <div class="dropdown">
                <button class="dropbtn"> POSTS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content animate">
                    <a href="/wikicar/post/code/postCheck.php">Look a Post</a>
                    <a href="/wikicar/post/code/postForm.php">Post it!</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"> BRANDS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content animate">
                    <a href="/wikicar/brand/code/brandCheck.php">Look a Brand
                        <a href="/wikicar/brand/code/brandForm.php">Add a Brand</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"> MODELS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content animate">
                    <a href="/wikicar/model/code/modelCheck.php">Look a Model</a>
                    <a href="/wikicar/model/code/modelForm.php">Add a Model</a>
                </div>
            </div>

            <a href="/wikicar/logout.php" style="float:right;">
                <img class="fa fa-camera" src="/wikicar/img/logout.png" alt="">

            </a>


            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
        </div>
    </header>

    <br><br><br>
    <div class="card">
        <div class="card2">
            <br>
        <h2>Post it</h2>
        <div class="inputs">
            <form action="postVal.php" method="post">
                <textarea name="post" cols="50" rows="5" placeholder="Comments" required></textarea> <br>
                <select name="section" id="section" required>
                <option value="" disabled="" selected="">Section</option>
                <?php 
                foreach($resultadoName->fetch_all() as $section){
                echo"<option value='$section[0]'>$section[1] - $section[2]</option>";
                }
                ?>
                </select>
                <button type="submit">Register</button>
            </form>
        </div>
        </div>
    </div>
<br><br><br><br>
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>WikiCar</h3>

            <p class="footer-links">
                <a href="../../home.php">Home</a>
                |
                <a href="../../profile/code/profileCheck.php">Profile</a>
                |
                <a href="../../profile/code/garageCheck.php ">Garage</a>
                |
                <a href="postForm.php">Post it!</a>
            </p>

            <p class="footer-company-name">© 2022 WikiCar.com</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Proyecto Integrador UPQ</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 22-27782183</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@eduonix.com">support@wikicar.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About us</span>
                Ingenieria en sistemas computacionales S173 <br>
                “I don't know how to drive in any other way than risky, when I have to exceed the limit, I exceed it.
                Every driver has a limit, mine is a little beyond.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>

            </div>
        </div>


    </footer>

    <!--JAVASCRIPT-->
    <script type="text/javascript" src="navbar.js"></script>
</body>

</html>