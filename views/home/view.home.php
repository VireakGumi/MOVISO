<?php
require_once('views/partials/navbar.php');
require_once('slideshow.php');
?>

<section class="page-section container-fluid portfolio bg-dark" id="portfolio">
    <h2 class="page-section-heading text-center text-uppercase text-secondary py-5 pb-5 text-white">Movies</h2>
    <div class="card-container ms-3">
        <?php
        $row = 8;
        require('views/createCard.php');
        ?>
    </div>
</section>
<section class="page-section bg-dark text-white mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-white pb-5">About</h2>
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">This website had built in 2023 by students 2023 generation of PNC. In this website you
                    can find a lot of famouse movies with many kind of movies. We will provide good services to you.
                </p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">We build MOVISO website in purpose to increase the convenience for customers in booking
                    movie tickets. With MOVISO you can booking tickets quickly and choose a seat which you prefer.</p>
            </div>
        </div>
    </div>
</section>
<?php
require_once('views/partials/footer.php');

?>