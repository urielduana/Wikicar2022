<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile | WikiCar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wikicar/mainStyle.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>

    <!--TOP NAVIGATION-->
    <header id="header">
        <div class="topnav" id="myTopnav">
            <a href="/wikicar/home.php" id="active"><img src="/wikicar/img/wikicarLogo.png" class="logo"> <b>WikiCar</b></a>
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
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ipsa, possimus delectus animi
                placeat odit vitae dolorum dignissimos nostrum nesciunt, optio quibusdam blanditiis, reiciendis unde
                reprehenderit quod recusandae accusantium quasi! Nisi amet distinctio earum consequuntur suscipit
                ratione id quaerat ex, quisquam molestiae non. Vero tenetur quia laborum excepturi? Minus est possimus
                facere enim, laudantium adipisci quam quas delectus ratione, nisi sapiente asperiores earum odit nostrum
                voluptas quos cupiditate incidunt temporibus? Quibusdam, quod vero? Porro voluptatum dolorem sunt
                praesentium fugiat illum nam rerum sit nihil velit. Repellat, corrupti. Officia repellendus est
                molestias, aliquid repellat totam similique accusamus molestiae voluptatum fuga porro libero adipisci
                blanditiis laudantium hic quia? Accusantium ab eaque dolorum enim itaque provident ducimus? Quae unde
                voluptatem obcaecati rem quis fuga neque quaerat corrupti odit nemo ipsa perferendis similique ad
                doloremque architecto atque, magnam velit saepe nobis. Qui ea tempora amet enim maxime delectus ad nihil
                voluptatibus harum recusandae alias libero expedita corporis perspiciatis modi quae, mollitia totam
                quisquam. Quas, quod asperiores aut numquam eum eius dolor sed perferendis optio nostrum fugiat fuga et
                id temporibus voluptas magni ipsam nesciunt, repudiandae maxime laborum architecto impedit officia
                similique. Dolore quam laudantium alias, deserunt consequatur iure quisquam asperiores exercitationem
                cumque quos voluptate?</p>
        </div>
    </main>


    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="img/logo.png">
            <h3>WikiCar</h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Profile</a>
                |
                <a href="#">Garage</a>
                |
                <a href="#">Post it!</a>
            </p>

            <p class="footer-company-name">© 2022 WikiCar.com</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Proyecto Integrador UPQ 2do ciclo</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 22-27782183</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@eduonix.com">support@wikciar.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About us</span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt aliquid ut ipsum adipisci dolor
                molestiae placeat odio. Obcaecati ab expedita iure, cupiditate assumenda, nesciunt sequi.
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