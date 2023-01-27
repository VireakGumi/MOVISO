<?php

require_once('views/partials/navbar.php');


?>

<header class=" masthead text-white text-center pb-5">
    <img src="" alt="" style="background: url(../../assets/poster.jpg) no-repeat; background-size: cover; position: fixed;
    left: 0px;
    top: 0px;
    z-index: -1;
    width: 100%;
    height: 70%;
    -webkit-filter: blur(3px);
    filter: blur(3px);">
    <div class="container d-flex align-items-center flex-column ">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar" src="../../assets/moviso-logo1.png" alt="..." width="50%" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Booking Now</h1>

        <p class="masthead-subheading font-weight-light mb-0">Action - Romantic - Adventure</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section container-fluid portfolio bg-dark " id="portfolio">
    <div class="container py-5">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary py-2 pb-5 text-white">Movies</h2>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center text-white text-left">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-3 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <img class="img-fluid" src="../../assets/images.jfif" alt="..." width="300px" height="200px" />
                    <h4>heheh</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quia.</p>
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-3 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                    <img class="img-fluid" src="../../assets/home_antman3.jfif" alt="..." width="300px" height="200px" />
                    <h4>heheh</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quia.</p>
                </div>
            </div>
            <!-- Portfolio Item 3--> 
            <div class="col-md-6 col-lg-3 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                    <img class="img-fluid" src="../../assets/00.jpg" alt="..." width="300px" height="200px" />
                    <h4>heheh</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quia.</p>
                </div>
            </div>
            <!-- Portfolio Item 4-->
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                    <img class="img-fluid" src="../../assets/0x0.jpg" alt="..." width="300px" height="200px" />
                    <h4>heheh</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quia.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-start text-white ">
            <div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                    <img src="../../assets/Rectangle 31.png" alt="" width="100%">
                </div>
            </div>
            <div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                    <img src="../../assets/Rectangle 31.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section-->
<section class="page-section bg-dark text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white py-4">About</h2>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes
                    the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets
                    for easy customization.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers,
                    and add your email address to the contact form to make it fully functional!</p>
            </div>
        </div>
        <!-- About Section Button-->

    </div>
</section>


<?php
require_once('views/partials/footer.php');

?>