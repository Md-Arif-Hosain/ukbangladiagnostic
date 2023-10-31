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

    <!--Start Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ment">
                        <h1>Our Services</h1>
                        <div class="col-4">
                            <div class="web">
                                <img src="img/c.jpg" alt="">
                                <h2>COVID-19 TEST</h2>
                                <p>If you or any of your loved ones think you are infected
                                    by the coronavirus and want to get tested, please call
                                    our Hotline 123456.We will be at your home.</p>
                                <button><a href="registration.php">Book Serial</a></button>

                            </div>
                        </div>

                        <div class="col-4">
                            <div class="web">
                                <img src="img/four.jpg" alt="">
                                <h2>DIGITAL ULTRASONOGRAM</h2>
                                <p>If you or any of your loved ones think you are infected
                                    by the coronavirus and want to get tested, please call
                                    our Hotline 123456.We will be at your home.</p>
                                <button><a href="registration.php">Book Serial</a></button>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="web">
                                <img src="img/x.jpg" alt="">
                                <h2>DIGITAL X-RAY</h2>
                                <p>If you or any of your loved ones think you are infected
                                    by the coronavirus and want to get tested, please call
                                    our Hotline 123456.We will be at your home.</p>
                                <button><a href="registration.php">Book Serial</a></button>
                            </div>
                        </div>
                        <span id="dotso"></span><span id="moreo">
                            <div class="col-4 four" id="four">
                                <div class="web">
                                    <img src="img/e.jpg" alt="ELECTROCARDIOGRAM">
                                    <h2>Electrocardiogram</h2>
                                    <p>If you or any of your loved ones think you are infected
                                        by the coronavirus and want to get tested, please call
                                        our Hotline 123456.We will be at your home.</p>
                                    <button><a href="registration.php">Book Serial</a></button>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="web">
                                    <img src="img/dental.jpg" alt="Radiology and Imaging">
                                    <h2>DENTAL X-RAY</h2>
                                    <p>If you or any of your loved ones think you are infected
                                        by the coronavirus and want to get tested, please call
                                        our Hotline 123456.We will be at your home.</p>
                                    <button><a href="registration.php">Book Serial</a></button>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="web">
                                    <img src="img/test.jpg" alt="GCC MEDICAL TEST">
                                    <h2>GCC MEDICAL TEST</h2>
                                    <p>If you or any of your loved ones think you are infected
                                        by the coronavirus and want to get tested, please call
                                        our Hotline 123456.We will be at your home.</p>
                                    <button><a href="registration.php">Book Serial</a></button>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="web">
                                    <img src="img/ee.jpg" alt="Radiology and Imaging">
                                    <h2>RADIOLOGY AND IMAGING</h2>
                                    <p>If you or any of your loved ones think you are infected
                                        by the coronavirus and want to get tested, please call
                                        our Hotline 123456.We will be at your home.</p>
                                    <button><a href="registration.php">Book Serial</a></button>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="web">
                                    <img src="img/nine.jpg" alt="BIOCHEMISTRY">
                                    <h2>COMPUTRIZED PATHOLOGY </h2>
                                    <p>If you or any of your loved ones think you are infected
                                        by the coronavirus and want to get tested, please call
                                        our Hotline 123456.We will be at your home.</p>
                                    <button><a href="registration.php">Book Serial</a></button>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="web">
                                    <img src="img/12.jpg" alt="BIOCHEMISTRY">
                                    <h2>MEDICAL CHECKUP </h2>
                                    <p>If you or any of your loved ones think you are infected
                                        by the coronavirus and want to get tested, please call
                                        our Hotline 123456.We will be at your home.</p>
                                    <button><a href="registration.php">Book Serial</a></button>
                                </div>
                            </div>
                        </span>
                        <div> <button class="btn" onclick="oFunction()" id="myBtno">View more</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!--End Services-->
    
<!-- Link of Footer page -->
<?php include_once 'footer.php';?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- JS link -->
<script src="js/java.js"></script>
</body>
</html>