<!DOCTYPE html>
<html lang="en">

<?php
       
        require_once ("connection/conn.php");
        session_start();
        
        $isLogged =isLogged();
                if($isLogged ==3){
                    header("Location:index.php "); 
                }
       
        ?>

<head>
    <title>Zay Shop - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    
    
    
    
    
<meta name="viewport" content="width=device-width, initial-scale=1">



    
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php" style="margin-right: 5% ;">
                Zay     
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

          <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="formpage.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job.php">Work with us</a>
                        </li>
                    </ul>
                </div>
              <div class="navbar align-self-center d-flex">
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

 document.getElementById('#mapid #leaflet-control-container #leaflet-pane leaflet-map-pane').style.display = 'none';
</script>
             <div style="clear:both;"></div>
         

                   <div style="padding-left: 5px; padding-right: 5px; padding-bottom:5px; padding-top: 2px ">
                       <?php
                    if(!isset($_SESSION['usernamelogin'])){
                  echo"  <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=login.php>Login</a>";
                  echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=register.php>Sign Up</a>";
                  echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=admin/login.php>Login as Admin</a>";
                  }
                  else{

                     echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=createads.php>Add advertisement</a>";

                     echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=myAccountInfos.php>My account</a>";


                  }


                  ?>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <?php  
 if(!isset($_SESSION['usernamelogin'])){

 }
    else{
    echo "<br>";
    echo "<h2 style=\"color: #04aa6d; margin-left:10%;  allign:centre\">Welcome, ".$_SESSION['usernamelogin']."</h2>";
    }


 ?>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>Zay</b> eCommerce Template<br />Location.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- Ena Map -->
<!-- Start Contact -->
<div>
    <?php 
    require_once("connection/conn.php");
        if(isset($_GET["status"])){
            if($_GET["status"] == 0){
                echo "<p style='text-align:center;color:green;font-weight:bold;font-size:20px;'>Email successfully send !!!</p>";
            } else if($_GET["status"] == 1){
                echo "<p style='text-align:center;color:red;font-weight:bold;font-size:20px;'>ERROR!! Try Again</p>";
            }
        }
        
        function isLogged(){
            if(isset($_SESSION['usernamelogin'])){
                //Logged in user
                return 1 ;
            }else if (isset($_SESSION['admin'])) {
                //Logged in  by admin
                return 2 ;
            }
            else{
                //NOT Logged in 
                return 3 ;
            }
        }
        
        ?>


    </div>
    <div class="container py-5">
    
        <div class="row py-5">
       
            <form class="col-md-9 m-auto" action="contactform.php" method="post" role="form">
                <div>
                    
<br> 
                <div>
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject" required>
                </div>

<br>

                <div>
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea required>
                </div>
<br>
                <div>
                    <div class="col text-end mt-2">
                        <button type="submit" name="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
     
    </div>
    <div>
  
    <br><br><br><br>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">zay@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Categories</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                      <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                         <div class="input-group-text btn-success text-light" style="align-self: auto; margin-left: 5px; cursor: pointer;" onclick="window.location.href='login.php'">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Zay shop | Designed by Hawra, Elia, Adrean, Charbel
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    
    

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>