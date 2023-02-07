<?php

require_once('views/partials/navbar.php');


?>

<header class=" masthead text-white text-center pb-5">
    <img src="../../assets/poster.jpg" class='background' alt="" style=" position: absolute;
    left: 0px;
    top: 30px;
    z-index: -1;
    -webkit-filter: blur(3px);
    filter: blur(3px);">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar" src="../../assets/moviso-logo1.png" alt="..." width="50%" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Booking Now</h1>

        <p class="masthead-subheading font-weight-light mb-0">Action - Romantic - Adventure</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section container-fluid portfolio bg-dark" id="portfolio">
    <!-- Portfolio Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary py-5 pb-5 text-white">Movies</h2>
    <!-- Portfolio Grid Items-->
    <div class="card-container ms-3">
        <?php
        $row = 8;
        require('views/createCard.php');
        ?>
    </div>
</section>

<!-- About Section-->
<section class="page-section bg-dark text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white pb-5">About</h2>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">This website had built in 2023 by students 2023 generation of PNC. In this website you can find a lot of famouse movies with many kind of movies. We will provide good services to you. </p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">We build MOVISO website in purpose to increase the convenience for customers in booking movie tickets. With MOVISO you can booking tickets quickly and choose a seat which you prefer.</p>
            </div>
        </div>
        <!-- About Section Button-->

    </div>
</section>


<?php
require_once('views/partials/footer.php');

?>