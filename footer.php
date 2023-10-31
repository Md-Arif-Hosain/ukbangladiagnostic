<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- FONT AWSOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
     <!--Start Footer-->
     <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="foot">
                            <div class="footabout">
                                <div class="col-4">
                                    <h1>Our Service</h1>
                                    <p>24/7 Health Service</p>
                                    <p>Digital Ultrasonogram</p>
                                    <p>Digital X-Ray</p>
                                    <p>Digital X-Ray</p>
                                    <p>Medical Checkup</p>
                                    <p>Computerized Pathology</p><br><br>
                                </div>
                            </div>
                        <div class="onno">
                            <div class="address">
                                <div class="col-4">
                                    <h1>Dhaka Branch</h1>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> <span> Road No-28, House No-381,
                                            New DOHS, Mohakhali, Dhaka, Bangladesh</span><br>
                                        <i class="fa-regular fa-envelope"></i> <span>
                                            ukbanglagroup01@ gmail.com</span><br>
                                        <i class="fa-solid fa-phone"></i> <span>+880000000000</span><br>
                                    </p>
                                </div>
                            </div>
                            <div class="opentime">
                                <div class="col-4">
                                    <h1>Rangpur Branch</h1>
                                    <p>
                                        <i class="fa-solid fa-location-dot"></i> <span> House- 65, Road -2, R.K Road Islambag,Rangpur</span><br>
                                        <i class="fa-regular fa-envelope"></i> <span>
                                            ukbanglagroup01@ gmail.com</span><br>
                                        <i class="fa-solid fa-phone"></i> <span>+880000000000</span><br>
                                         <h1>Live Services</h1>
                                         <p><a href="serial-list.php" style="text-decoration:none; color:white;">Patient Serial List </a></p>
                                        <p><a href="login.php" style="text-decoration:none; color:white;">Login/logout</a></p> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main footer -->
    <div class="food">
        <div class="container">
            <hr>
            <div class="col-6 lest">
                <h4>Copyright © 2023 UK-Bangla Diagnostic and consultation Center Ltd.</h4>
                <button onclick="topFunction()" id="myonBtn" title="Go to top"><i class="fa-solid fa-circle-up"></i></button>
            </div>
            <div class="social">
                <div class="col-6">
                    <p><a href="https://www.facebook.com/people/Uk-bangla-Diagnostic-and-consultation-Centre-Ltd/100076620741015/?mibextid=ZbWKwL"> <i class="fa-brands fa-facebook" ></i></a> 
                        <a href="#"> <i class="fa-brands fa-twitter"> </i></a><span> </span>
                        <a href="#"> <i class="fa-brands fa-instagram"></i></a><span></span>
                        <a href="#"> <i class="fa-brands fa-linkedin"> </i></a><span> </span>
                        <a href="#"> <i class="fa-brands fa-youtube"> </i></a><span></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--End Footer-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
// Get the button
let mybutton = document.getElementById("myonBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!-- JS link -->
<script src="js/java.js"></script>
</body>
</html>