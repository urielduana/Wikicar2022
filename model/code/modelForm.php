<?php
    include("../../connection/queries.php");
    session_start();
    $name = new BasicSelect("Id_brand, Brand_name","brand","");
    $resultadoName=$name->getBasicSelect();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Model | WikiCar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wikicar/mainStyle.css">
    <link rel="stylesheet" href="../css/modelForm.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>

    <!--TOP NAVIGATION-->
    <header id="header">
        <div class="topnav" id="myTopnav">
            <a href="/wikicar/home.php" id="active"><img src="/wikicar/assets/img/logos/logo.png" class="logo"> <b>WikiCar</b></a>
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

    <main>
        <h2>Models</h2>
        <div class="containerModel">
            <form action="modelVal.php" method="post" >
                <input type="text" placeholder="Model Name" values="" name="model" required><br>
                <input type="text" placeholder="Model Type" values="" name="type" required><br>
                <input type="number" placeholder="Number Doors" values="" name="door" required><br>
                <input type="number" placeholder="Number Seats" values="" name="seats" required><br>
                <input type="number" placeholder="Gas Tank Capacity" values="" name="capacity" required><br>
                <input type="text" placeholder="Gas Type" values="" name="type" required><br>
                <input type="number" placeholder="Model Year" values="" name="year" required><br>
                <input type="number" placeholder="Starting Price" values="" name="start" required><br>
                <input type="number" placeholder="Actual Price" values="" name="actual" required><br>
                <textarea name="configuration" cols="50" rows="5" placeholder="Configuration" required></textarea> <br>


                <select name="brand" id="brand" required>
                <option value="" disabled="" selected="">Brand</option>

                    <?php 
                        foreach($resultadoName->fetch_all() as $brand){
                            echo"<option value='$brand[0]'>$brand[1]</option>";
       
    }
            ?>
                </select><br>
                <button type="submit">Register</button>
            </form>
        </div>
    </main>

<br><br><br>
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>WikiCar</h3>

            <p class="footer-links">
                <a href="../../home.php">Home</a>
                |
                <a href="../../profile/code/profileCheck.php">Profile</a>
                |
                <a href="../../profile/code/garageCheck.php">Garage</a>
                |
                <a href="../../post/code/postForm.php">Post it!</a>
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
                “I don't know how to drive in any other way than risky, when I have to exceed the limit, I exceed it. Every driver has a limit, mine is a little beyond.
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