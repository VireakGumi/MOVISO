<?php
    require_once('views/partials/navbar.php');
    $row = 16;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.nav-tabs>li.active>a,
.nav-tabs>li.active>a:focus,
.nav-tabs>li.active>a:hover {
    border: none;
}
</style>

<div class="list">
    <div class="d-flex ms-5">
        <h3 class="text-white">CATEGROY</h3>
        <div class="d-flex flex-column w-100" id="search-blog">
            <div class="d-flex">
                <form action="" method="get" id="search" class="w-100">
                    <input type="search" class="form-control" placeholder="Search" id="fname" name="fname"
                        onkeyup="showHint(this.value)">
                    <label for="fname" class="cursor-pointer text-white"><i class="material-icons">search</i></label>
                </form>
            </div>
            <div id="product" class="text-white d-flex flex-column mx-3">

            </div>
        </div>
    </div>
    <ul class="section-of-movies  nav nav-tabs d-flex mt-5 mx-4 border-none">
        <li class="active  m-3"><a data-toggle="tab" href="#allMovies" class="fw-bold text-white">ALL MOVIES</a>
        </li>
        <li class=" m-3"><a data-toggle="tab" href="#action" class="fw-bold text-white">ACTION</a></li>
        <li class=" m-3"><a data-toggle="tab" href="#comedy" class="fw-bold text-white">COMEDY</a></li>
        <li class=" m-3"><a data-toggle="tab" href="#crime" class="fw-bold text-white">CRIME</a></li>
    </ul>

    <div class="tab-content">
        <div id="allMovies" class="tab-pane fade in active">
            <div class="card-container mt-5">
                <?php
                    $movies = getMoives();
                    require('views/createCard.php');
                    ?>
            </div>
        </div>
        <div id="action" class="tab-pane fade">
            <div class="card-container mt-5">
                <?php
                        $movies = sectionMovies('action');
                        require('views/createCard.php');
                    ?>
            </div>
        </div>
        <div id="comedy" class="tab-pane fade">
            <div class="card-container mt-5">
                <?php
                        $movies = sectionMovies('comedy');
                        require('views/createCard.php');
                    ?>
            </div>
        </div>
        <div id="crime" class="tab-pane fade">
            <div class="card-container mt-5">
                <?php
                        $movies = sectionMovies('crime');
                        require('views/createCard.php');
                    ?>
            </div>
        </div>
    </div>

    <?php require_once('views/partials/footer.php');?>
</div>