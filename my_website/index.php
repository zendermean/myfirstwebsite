<?php
session_start();
if(!isset($_SESSION["id"]))
{
    session_destroy();
    #header("location:index.php");
}
else 
{

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <title>xaoc prod.</title>
    <!--browser-sync start --server --files "*.*"-->
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<!----------------------------------------HOME SECTION---------------------------------------->
<div id="home">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="index.php" class="navbar-brand"><img src="img/logo_xaoc.png"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#team" class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                   <!--<a href="#loginModal" name="login" class="nav-link" data-toggle="modal">Log In</a> <--href or data-target="#loginModal"-->
                   <!--<a href="#loginModal" name="login" class="nav-link" data-toggle="modal">Log In</a> -->
                </li>
                <li class="nav-item">
                    <a href="register.html" class="nav-link">Sign In</a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link" style="color:yellow"><?php echo $_SESSION["name"];?></a>
                </li>
            </ul>
        </div>
    </nav>
<!----------------------------------------START IMAGE SLIDER---------------------------------------->
<div class="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(img/f_10.jpg);">
            <div class="carousel-caption text-center">
                <h1>Welcome to Xaoc</h1>
                <h4>“To manifest the beauty of life, think beauty, dream beauty, and see the beauty in the simple things all around you.” 
                        ― Debasish Mridha</h4>
                <a class="btn btn-outline-light btn-lg" href="#">Some info</a>
            </div>
        </div>
        <!--Slide 2-->
        <div class="carousel-item" style="background-image: url(img/foto0.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/f_1.jpg);"></div>
        <div class="carousel-item" style="background-image: url(img/f_2.jpg);"></div>
    </div><!--end carousel inner-->
    <!--Prev & Next Buttons-->
    <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
<!----------------------------------------END IMAGE SLIDER---------------------------------------->  
</div>
<span id="result">TESTING...</span> 
<!----------------------------------------END HOME SECTION---------------------------------------->
<!----------------------------------------PORTFOLIO SECTION---------------------------------------->
<div id="portfolio" class="offset">
    <div class="jumbotron container-fluid">
        <div class="col-12 text-center">
            <h3 class="heading">Portfolio</h3>
            <div class="heading-underline"></div>
        </div>

        <div class="row no-padding">
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="request.php" target="_blank">
                        <img src="img/portfolio/1.png">
                    </a>
                </div>
            </div>
        <div class="col-sm-4">
            <div class="portfolio">
                <a href="img/portfolio/2.png" target="_blank">
                     <img src="img/portfolio/2.png">
                </a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="portfolio">
                <a href="img/portfolio/3.png" target="_blank">
                    <img src="img/portfolio/3.png">
                </a>
            </div>
        </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/4.png" target="_blank">
                        <img src="img/portfolio/4.png">
                    </a>
                </div>
             </div>
             <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/5.png" target="_blank">
                        <img src="img/portfolio/5.png">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="portfolio">
                    <a href="img/portfolio/6.png" target="_blank">
                        <img src="img/portfolio/6.png">
                    </a>
                </div>
            </div>
            <div class="narrow text-center">
                <div class="col-12">
                    <p class="lead">Want to learn how to make beautiful photo?</p>
                    <a href="#" class="btn btn-secondary btn-md" target="_blank">Xaoc Course</a>
                </div>
            </div>
        </div> <!--End Row-->
    </div>
</div>
<!----------------------------------------END PORTFOLIO SECTION---------------------------------------->

<!----------------------------------------TEAM SECTION---------------------------------------->
<div id="team" class="offset">
    <div class="col-12 text-center">
        <h3 class="heading">Team</h3>
        <div class="heading-underline"></div>
    </div>

    <div class="row padding">
        <div class="col-md-6">
            <div class="card text-center">
                <img src="img/team/team1.png" alt="" class="car-img-top">
                <div class="card-body">
                    <h4>Jessica Miller</h4>
                    <p>"Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Laborum, eveniet! Ab sapiente cum dolor iste porro, nisi numquam impedit? 
                        Velit sapiente maiores dolore. Expedita id nulla eum culpa rem obcaecati."</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="img/team/team2.png" alt="" class="car-img-top">
                    <div class="card-body">
                        <h4>Nicolas Davis</h4>
                        <p>"Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Laborum, eveniet! Ab sapiente cum dolor iste porro, nisi numquam impedit? 
                            Velit sapiente maiores dolore. Expedita id nulla eum culpa rem obcaecati."</p>
                </div>
            </div>
        </div>
    </div> <!--End of row-->
</div>
<!----------------------------------------END TEAM SECTION---------------------------------------->

<!----------------------------------------CONTACT SECTION---------------------------------------->
<div id="contact" class="offset">
    <footer>
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <img src="img/logo_xaoc.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam doloremque esse totam, atque similique id placeat magni, molestias blanditiis ab asperiores voluptas, quia earum velit fugiat! Beatae ab saepe provident.</p>
                <strong>Contact info</strong>
                <p>(666) 666-666<br>emaliinfo@gmail.com</p>

                <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <hr class="socket">
            &copy; Xaoc Production.
        </div> <!--End of row-->

    </footer>
</div>
<!----------------------------------------END CONTACT SECTION---------------------------------------->

<!----------------------------------------START LOGIN SECTION---------------------------------------
testing loginModal
<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Login</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                    <br>
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <br>
                    <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>
                </div>
        </div>
    </div>
</div>
------------------------------------END LOGIN SECTION---------------------------------------->
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

body{
  overflow-x: hidden;
  font-family: 'Lato', sans-serif;
  color: #505962;
}

/*--- Navbar --*/
.navbar{
  text-transform: uppercase;
  font-weight: 700;
  font-size: .9rem;
  letter-spacing: .1rem;
  background: rgba(0,0,0,.8)!important;
}
.navbar-brand img{
  height: 3rem;
}
.navbar-nav li{
  padding-right: .7rem;
}
.navbar-dark .navbar-nav .nav-link{
  color: rgb(103, 125, 136);
  padding-top: .8rem;
}
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
  color: #fdfdfd;
}
/*--Slider--*/
.carousel-item{
  height: 100vh;
}
.offset:before{
  height: 3.8rem;
  margin-top: -3.8rem;
  content: "";
  display: block;
}
.carousel-caption{
  position: absolute;
  text-transform: uppercase;
}
.carousel-caption h1{
  font-size: 3.8rem;
  font-weight: 700;
  letter-spacing: .3rem;
}
.carousel-caption h3{
  font-size: 2rem;
  text-shadow: .1rem .1rem .5rem black;
  padding-bottom: 1.6rem;
}
.btn-lg{
  border-width: medium;
  border-radius: 0;
  font-size: 1.1rem;
}
.jumbotron {
  border-radius: 0;
  padding: 3rem 0 2rem;
  margin-bottom: 0;
}
h3.heading{
  font-size: 1.9rem;
  font-weight: 700;
  text-transform: uppercase;
  padding-bottom: 1.9rem;
}
.heading-underline{
  width: 3rem;
  height: .2rem;
  background-color: #1ebba3;
  margin: 0 auto 2rem;
}
/*portfolio*/
.portfolio img{
  max-width: 100%;
  transition: transform .5s ease;
}
.row.no-padding [class*=col-]{
  padding: 0;
}
.portfolio img:hover{
  transform: scale(1.1);
  cursor: zoom-in;
}
.portfolio{
  overflow: hidden;
}
.card{
  margin: 2rem;
  size: 50%;
}
/*--Contact--*/
footer{
  background-color: #40474e;
  color: white;
  padding: 2rem 0 3rem;
  margin-top: 1rem;
}
footer img{
  height: 3rem;
  margin: 1.5rem 0;
}
footer a{
  color: white;
}
footer svg.svg-inline--fa{
  font-size: 1.6rem;
  margin: 1.2rem .5rem 0 0;
}
footer svg.svg-inline--fa:hover{
  color: #1ebba3;
}
hr.socket{
  border-top: .2rem solid #666b71;
  width: 100%;
}
/*============= COURSE SECTION =============*/

.narrow {
  width: 75%;
  margin: 0 auto;
  padding-top: 2rem;
}
.btn-md {
  border-width: medium;
  border-radius: 0;
  padding: .6rem 1.1rem;
  text-transform: uppercase;
  margin: 1rem;
}

/*--- media queries --*/
@media (max-width: 767px){
  .carousel-caption h1{
    font-size: 2.3rem;
    letter-spacing: .15rem;
  }
  .carousel-caption h3{
    font-size: 1.2rem;
    text-shadow: .1rem .1rem .5rem black;
    padding-bottom: 1.2rem;
  }
  .btn-lg{
    font-size: 1rem;
  }
  .narrow h1{
    font-size: 1.5rem;
  }
  p.lead{
    font-size: 1rem;
  }
}


/*============ BOOTSTRAP BREAK POINTS:

Extra small (xs) devices (portrait phones, less than 576px)
No media query since this is the default in Bootstrap

Small (sm) devices (landscape phones, 576px and up)
@media (min-width: 576px) { ... }

Medium (md) devices (tablets, 768px and up)
@media (min-width: 768px) { ... }

Large (lg) devices (desktops, 992px and up)
@media (min-width: 992px) { ... }

Extra (xl) large devices (large desktops, 1200px and up)
@media (min-width: 1200px) { ... }

=============*/
</style>
<!----------------------------------------SCRIPTS---------------------------------------->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>