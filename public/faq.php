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
        $mainTitle='Faq';
        $Title='Home';
        $Title2 = 'Faq';
    ?>
    <?php include './partials/page-header.php'?>


    <!-- Faq Section    S T A R T -->
    <div class="faq-section fix section-padding">
        <div class="container">
            <div class="title-area mb-45">
                <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                    <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">Faq<img class="ms-1"
                        src="assets/img/icon/titleIcon.svg" alt="icon">
                </div>
                <div class="title wow fadeInUp" data-wow-delay="0.7s">
                    frequently ask question
                </div>
            </div>
            <div class="row gx-60">
                <div class="col-xl-5">
                    <div class="faq-thumb w-100 h-100 fix rounded-3">
                        <img class="w-100 h-100 rounded-3" src="assets/img/dishes/burger.png" alt="thumb">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="faq-content style-1 mt-5">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                            aria-controls="faq1">
                                            What types of cuisines do you cover on this blog?
                                        </button>
                                    </h5>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            We explore a wide range of cuisines including, but not limited to,
                                            traditional regional dishes, modern culinary innovations, street food, and
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            How do you choose the restaurants you review?
                                        </button>
                                    </h5>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes,Restaurants that have recently opened often generate buzz, and reviewing
                                            them can provide timely content.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Do you get paid to review restaurants?
                                        </button>
                                    </h5>
                                    <div id="faq3" class="accordion-collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes,Restaurants that have recently opened often generate buzz, and reviewing
                                            them can provide timely content.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            How can I find the best restaurants in my area ?
                                        </button>
                                    </h5>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            For press-related inquiries, you typically want to contact the Public
                                            Relations (PR) or Communications department of the organization you're
                                            interested in.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            Can I subscribe to your newsletter?
                                        </button>
                                    </h5>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, You can Subscribe our newsletter.
                                        </div>
                                    </div>
                                </div>
                            </div>
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