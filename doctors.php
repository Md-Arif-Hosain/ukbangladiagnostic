<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" href="img/logo.png" type="image">
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
<!-- Topbar Page Link -->
<?php include_once 'topbar.php';?>

<!-- Header Page Link -->
<?php include_once 'header.php';?>

   <!--Start Doctors -->
    <div class="doctors">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="team">
                        <h1>Our Doctors</h1>
                        <div class="col-3 item">
                            <img src="img/d1.jpg" alt="">
                            <div class="text">
                                <h2>Dr. Md. Abdul Momin</h2>
                                <h3>MBBS, BCS (Health), FCPS</h3>
                                <h4>Medicare Diagnostic Center, Pabna</h4>
                                <h4> Appointment: +8801713998199</h4>
                            </div>

                        </div>
                        <div class="col-3 item">
                            <img src="img/d4.jpg" alt="">
                            <div class="text">
                                <h2>Dr. Fahmida Alam</h2>
                                <h3>MBBS, BCS (Health), FCPS </h3>
                                <h4>Medicine, Diabetes & Hormone Specialist</h4>
                                <h4> Appointment: +8809666787817</h4>
                            </div>
                        </div>
                        <div class="col-3 item">
                            <img src="img/d3.jpg" alt="">
                            <div class="text">
                                <h2>Dr. Shahana Ferdous</h2>
                                <h3>MBBS, FCPS (Radiotherapy)</h3>
                                <h4>Chattogram Maa-O-Shishu Hospital Medical College</h4>
                                <h4> Appointment: +8801976022333</h4>
                            </div>
                        </div>
                        <div class="col-3 item">
                            <img src="img/d2.jpg" alt="">
                            <div class="text">
                                <h2>Dr. Nasir Uddin Mahmud (Shuvo)</h2>
                                <h3>MBBS, BCS (Health), FCPS </h3>
                                <h4>Chittagong Medical College & Hospital</h4>
                                <h4>Appointment: +8801896094552</h4>
                            </div>
                        </div>
                        <span id="dots"></span><span id="more">
                            <div class="col-3 item five">
                                <img src="img/d1.jpg" alt="">
                                <div class="text">
                                    <h2>Dr. Md. Abdul Momin</h2>
                                    <h3>MBBS, BCS (Health), FCPS</h3>
                                    <h4>Medicare Diagnostic Center, Pabna</h4>
                                    <h4> Appointment: +8801713998199</h4>
                                </div>

                            </div>
                            <div class="col-3 item">
                                <img src="img/d3.jpg" alt="">
                                <div class="text">
                                    <h2>Dr. Fahmida Alam</h2>
                                    <h3>MBBS, BCS (Health), FCPS </h3>
                                    <h4>Medicine, Diabetes & Hormone Specialist</h4>
                                    <h4> Appointment: +8809666787817</h4>
                                </div>
                            </div>
                            <div class="col-3 item seven">
                                <img src="img/d2.jpg" alt="">
                                <div class="text">
                                        <h2>Dr. Nasir Uddin Mahmud (Shuvo)</h2>
                                    <h3>MBBS, BCS (Health), FCPS </h3>
                                    <h4>Chittagong Medical College & Hospital</h4>
                                    <h4>Appointment: +8801896094552</h4>
                                </div>
                            </div>
                            <div class="col-3 item eight">
                                <img src="img/d4.jpg" alt="">
                                <div class="text">
                                
                                    <h2>Dr. Shahana Ferdous</h2>
                                    <h3>MBBS, FCPS (Radiotherapy)</h3>
                                    <h4>Chattogram Maa-O-Shishu Hospital Medical College</h4>
                                    <h4> Appointment: +8801976022333</h4>
                                </div>
                            </div>

                        </span>
                        <button onclick="myFunction()" id="myBtn">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- End Doctors -->
<!-- Link of Footer page -->
<?php include_once 'footer.php';?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- JS link -->
<script src="js/java.js"></script>
</body>
</html>