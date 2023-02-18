<?php
require_once('views/partials/navbar.php');
$movies = getMoives();
require_once('slideshow.php');
?>

<div class="d-flex flex-wrap justify-content-between p-3 gap-2 z-index-1"
    style="margin-top:100px; background-color:#212529;">
    <?php
    foreach ($movies as $movie):
        ?>
        <a href="/detail?id=<?= $movie['movies_id'] ?>" class="card text-decoration-none text-dark"
            style="width:30%; height: 300px ;">
            <div class="bg-image hover-overlay ripple h-100 cursor-pointer" data-mdb-ripple-color="light">
                <iframe src="<?= $movie['trailer'] ?>" frameborder="0" class="w-100 video "
                    style="height:100% ;" allowfullscreen></iframe>
            </div>

            <div class="card-body m-0">
                <h4 class="card-title m-0 p-0">
                    <?= $movie['movie_title'] ?>
                </h4>
                <p class="card-text m-0 p-0">
                    <?= $movie['released'] ?>
                </p>
            </div>
        </a>
        <?php
    endforeach;
    ?>
</div>
<!-- <script src="views/js/main.js"></script> -->
<?php
require_once('views/partials/footer.php');
?>