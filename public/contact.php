<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<?php $title='Fresheat Food & Restaurant PHP Template'?>
<?php include './partials/head.php'?>

<body class="bg-color2">

     <!-- Preloader Start -->
     <?php include './partials/preloader.php'?>

    <!-- Back To Top Start -->
    <?php include './partials/scroll-up.php'?>

    <!--<< Mouse Cursor Start >>-->  
    <?php include './partials/mouse-cursor.php'?>

    <!-- Offcanvas Area Start -->
    <?php include './partials/sidebar.php'?>

    <!-- Header Section Start -->
    <?php include './partials/header.php'?>

    <!-- Search Area Start -->
    <?php include './partials/search.php'?>  

    <!-- Breadcumb Section   S T A R T -->

    <?php 
        $mainTitle='Contact us';
        $Title='Home';
        $Title2 = 'Contact us';
    ?>
    <?php include './partials/page-header.php'?>


    <!-- Contact Us Section    S T A R T -->
    <div class="contact-us-section section-padding fix">
        <div class="contact-box-wrapper style1">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/location.png" alt="icon"></div>
                            <h3 class="title">Our Address</h3>
                            <p>Unit 915,  130 Columbia street west. Waterloo. Ontario. Postal code N2L 0G6</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/gmail.png" alt="icon"></div>
                            <h3 class="title">Email</h3>
                            <p>naijatasteekitchen@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/phone.png" alt="icon"></div>
                            <h3 class="title">2266061719</h3>
                            <p>24/7/365 priority Live Chat and ticketing support.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/clock.png" alt="icon"></div>
                            <h3 class="title">Opening Hour</h3>
                            <p>Sunday-Fri: 9 AM – 6 PM Saturday: 9 AM – 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section    S T A R T -->
    <div class="contact-form-section section-padding pt-0 fix">
        <div class="contact-form-wrapper style2">
            <div class="container">
                <div class="row gx-60 gy-5">
                    <div class="col-xl-6">
                        <div class="contact-form-thumb">
                            <img src="assets/img/food/menu/contact.png" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form style2">
                            <h2>Get in Touch</h2>
                            <form class="row" id="contact-form" action="mailer.php" method="POST">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea id="message" name="message"  class="form-control" placeholder="Write your message here..."
                                        rows="5"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                    <label for="reviewcheck">Collaboratively formulate principle capital. Progressively
                                        evolve user<span class="checkmark"></span></label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button type="submit" class="theme-btn w-100">SUBMIT NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i></button>
                                </div>
                            </form>
                            <div id="form-messages"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Section Start -->
    <?php include './partials/footer.php'?>

    <!-- all js files -->
    <?php include './partials/script.php'?>   
</body>

</html>