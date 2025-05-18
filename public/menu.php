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

    <!-- Search Area Start -->
    <?php include './partials/search.php'?>  

    <!-- Header Section Start -->
    <header class="header-section">
        <div class="black-bg"></div>
        <div class="red-bg"></div>
        <div class="container-fluid">
            <div class="main-header-wrapper">
                <div class="logo-image">
                    <a href="index.php">
                        <img src="assets/img/logo/logo.png" alt="img">
                    </a>
                </div>
                <div class="main-header-items">
                    <div class="header-top-wrapper">
                        <span><i class="fa-regular fa-clock"></i>Tueusdays - Sundays (11:00 am - 08:00 pm)</span>
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div id="header-sticky" class="header-1">
                        <div class="mega-menu-wrapper">
                            <div class="header-main">
                                <div class="logo">
                                    <a href="index.php" class="header-logo">
                                        <img src="assets/img/logo/logo.png" alt="img">
                                    </a>
                                </div>
                                <div class="header-left">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li class="has-dropdown active menu-thumb">
                                                        <a href="index.php">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="has-dropdown active d-xl-none">
                                                        <a href="index.php" class="border-none">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.php">
                                                            Contact Us
                                                        </a>
                                                        
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="header-right d-flex justify-content-end align-items-center">
                                    <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>

                                    <div class="header__cart">
                                        <a href="#"> <i class="fa-sharp fa-regular fa-cart-shopping"></i> </a>
                                        <div class="header__right__dropdown__wrapper">
                                            <div class="header__right__dropdown__inner">
                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="assets/img/blog/blogRecentThumb3_1.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.php">Fried Chicken</a>
                                                        <p>1 x <span class="price">$ 80.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="assets/img/blog/blogRecentThumb3_2.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.php">Fried Noodles</a>
                                                        <p>1 x <span class="price">$ 60.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="assets/img/blog/blogRecentThumb3_3.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.php">Special Pasta</a>
                                                        <p>1 x <span class="price">$ 70.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="dropdown__price">Total: <span>$1,100.00</span>
                                            </p>
                                            <div class="header__right__dropdown__button">
                                                <a href="cart.php" class="theme-btn mb-2">View Cart</a>
                                                <a href="checkout.php" class="theme-btn style3">Checkout</a>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="theme-btn" href="menu.php">ORDER NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <div class="header__hamburger d-xl-block my-auto">
                                        <div class="sidebar__toggle">
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcumb Section   S T A R T -->    
    <?php 
    $mainTitle='FOOD MENU ';
    $Title='Home';
    $Title2 = 'FOOD MENU ';
    ?>
    <?php include './partials/page-header.php'?>

    <!-- Food Menu section  S T A R T -->
    <section class="food-menu-section fix section-padding">
        <div class="burger-shape">
            <img src="assets/img/shape/burger-shape.png" alt="img">
        </div>
        <div class="fry-shape">
            <img src="assets/img/shape/fry-shape.png" alt="img">
        </div>
        <div class="food-menu-wrapper style1">
            <div class="container">
                <div class="food-menu-tab-wrapper style-bg">
                    <div class="title-area">
                        <div class="sub-title text-center wow fadeInUp" data-wow-delay="0.5s">
                            <img class="me-1" src="assets/img/icon/titleIcon.svg" alt="icon">FOOD MENU<img class="ms-1"
                                src="assets/img/icon/titleIcon.svg" alt="icon">
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Naija Tastee Kitchen Foods Menu
                        </h2>
                    </div>


                    <div class="food-menu-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-drinkJuice-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-drinkJuice" type="button" role="tab"
                                    aria-controls="pills-drinkJuice" aria-selected="false"><img
                                        src="assets/img/food/lil fish.jpg" alt="icon">Fried Fish</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-chickenPizza-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-chickenPizza" type="button" role="tab"
                                    aria-controls="pills-chickenPizza" aria-selected="false"><img
                                        src="assets/img/food/lil turk.jpg" alt="icon">Fried Turkey</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-freshPasta-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-freshPasta" type="button" role="tab"
                                    aria-controls="pills-freshPasta" aria-selected="false"><img
                                        src="assets/img/food/lilchick.jpg" alt="icon">Fried Chicken</button>
                            </li>
                        </ul>
    <div class="row gx-60">
        <div class="col-lg-6">
            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/agege.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3 class="active">Jollof rice and chicken or turkey</h3>
                        </a>
                        <p>Flavour-packed tomato rice served with juicy chicken or turkey.</p>
                    </div>
                </div>
                <h6>$18.90</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/amayase.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Rice and Ayamase sauce with assorted protein</h3>
                        </a>
                        <p>Spicy green pepper sauce served with white rice and assorted meats.</p>
                    </div>
                </div>
                <h6>$21.50</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/egusi.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Egusi soup with swallow</h3>
                        </a>
                        <p>Rich melon seed soup with tender meats and your choice of swallow.</p>
                    </div>
                </div>
                <h6>$15.90</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/ogbono.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Ogbono soup with swallow</h3>
                        </a>
                        <p>Draw soup made with ground wild mango seeds and assorted meats.</p>
                    </div>
                </div>
                <h6>$15.90</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/fisherman.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Fisherman soup with swallow</h3>
                        </a>
                        <p>Seafood-rich soup with fresh fish, prawns, and spices served with swallow.</p>
                    </div>
                </div>
                <h6>$15.90</h6>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/fried rice.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Special fried rice with chicken or turkey/fish</h3>
                        </a>
                        <p>Seasoned rice with veggies, paired with fried chicken, scrambled eggs, shrimps, turkey or grilled fish.</p>
                    </div>
                </div>
                <h6>$19.20</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/moi moi.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Moi moi</h3>
                        </a>
                        <p>Steamed bean pudding made with peppers, onions, and a hint of spice.</p>
                    </div>
                </div>
                <h6>$5.30</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/vegetable.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Vegetable soup with swallow</h3>
                        </a>
                        <p>Nutrient-rich leafy green soup cooked with meats and served with swallow.</p>
                    </div>
                </div>
                <h6>$15.90</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/whiterice.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>White rice and stew with beef, chicken or turkey</h3>
                        </a>
                        <p>Classic white rice paired with flavorful tomato stew and your choice of meat.</p>
                    </div>
                </div>
                <h6>$17.50</h6>
            </div>

            <div class="single-menu-items">
                <div class="details">
                    <div class="menu-item-thumb"><img src="assets/img/food/menu/spag.jpg" alt="thumb"></div>
                    <div class="menu-content">
                        <a href="menu.php">
                            <h3>Assorted Jollof spaghetti</h3>
                        </a>
                        <p>Spaghetti cooked in rich Jollof sauce with assorted meat toppings.</p>
                    </div>
                </div>
                <h6>$17.20</h6>
            </div>
        </div>
    </div>
</>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Gallery Section    S T A R T -->
    <div class="gallery-section">
        <div class="gallery-wrapper style1">
            <div class="container">
                <div class="slider-area">
                    <div class="swiper gallerySliderOne">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/387.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/388.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/386.png" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/385.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/384.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/383.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/382.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="https://www.instagram.com/naija_tastee_kitchen?igsh=OGZidG53a3pweWNz&utm_source=qr">
                                        <img src="assets/img/food/menu/381.jpg" alt="thumb">
                                        <div class="icon"><img src="assets/img/icon/camera.svg" alt="icon"></div>
                                    </a>
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