<?php

require_once('views/partials/navbar.php');
?>

<header class="masthead text-white text-center pb-5" style="height: 450px ;">
    <div id="slideshow">
        <div>
            <img src="../../assets/0x0.jpg">
        </div>
        <div>
            <img src="../../assets/avatar( the blockebuster).png">
        </div>
        <div>
            <img src="../../assets/background_seller_or_customer_register.jpg">
        </div>
        <div>
            <img src="../../assets/poster.jpg">
        </div>
    </div>
    <div class="parallelogram"></div>
    <div class="parallelogram2"></div>
    <div class="container d-flex align-items-center flex-column mt-5 heading-text">
        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar" src="../../assets/moviso-logo1.png" alt="..." width="50%" />
        <!-- Masthead Heading -->
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

<!-- <script>
    $("#slideshow > div:gt(0)").hide();

    setInterval(function () {
        $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
    }, 6000);

    dateCheck()
</script> -->

<?php
require_once('views/partials/footer.php');

?>