<?php
require_once('views/partials/header.php');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Secondary navigation">
    <div class="container-fluid">
        <a class="navbar-brand mx-4" href="/"><img src="../../assets/moviso-logo2.png" alt="" width="85px"></a>
        <div class="collapse navbar-collapse px-4 d-flex justify-content-lg-between flex-lg-row align-items-md-start flex-md-column align-items-sm-start flex-sm-column" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="/"
                    class="<?= urls("/") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link px-0 pb-1 mx-3"
                    aria-current="page">Home</a>
                <a href="/explore"
                    class=" <?= urls("/explore") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">Explore</a>
                <a href="/trailer"
                    class=" <?= urls("/trailer") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">Trailer</a>
            </div>
            <div class="navbar-nav">
                <a href="/login"
                    class=" <?= urls("/login") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> border-bottom border-4 nav-link mx-3 px-0 pb-1">Login</a>
                <a href="/register"
                    class=" <?= urls("/register") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> border-bottom border-4 nav-link px-0 pb-1 mx-3"
                    aria-disabled="true">Register</a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>