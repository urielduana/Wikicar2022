<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Garage | WikiCar</title>
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

    <main>
        <h2>Garage</h2>
        <div>
            <?php 
            session_start();
            include("../../connection/conexion.php");

            $conn1= new Conexion("localhost:3306","wikicar","root","");
            $id =  $_SESSION['loggedUserId'];
            $sql = "SELECT Registration_plate, Color, Deficiency, Mileage FROM car WHERE User_id = $id";
            $result = mysqli_query($conn1->getConexion(),$sql);

            echo "<table border>\n";
            while($row = mysqli_fetch_row($result)){
            echo "<tr>\n";
            foreach($row as $field){
            echo "<td>$field</td>\n";
            }
            echo"</tr>\n";
            }
            echo "</table>\n";
            
            $conn1->setClose($conn1->getConexion());
?>

            <body>
                <form action="/wikicar/profile/code/carForm.php" target="_blank">
                    <button type="submit">Add a New Car</button>
                </form>
        </div>

        <div>

        </div>
    </main>


    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>WikiCar</h3>

            <p class="footer-links">
                <a href="../../home.php">Home</a>
                |
                <a href="profileCheck.php">Profile</a>
                |
                <a href="garageCheck.php">Garage</a>
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