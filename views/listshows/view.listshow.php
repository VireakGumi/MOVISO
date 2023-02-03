<?php
require_once('views/partials/navbar.php');
?>


    <div class="list">
        <div class="d-flex ms-5">
            <h5 class="text-white">CATEGROY</h5>
            <div class="d-flex flex-column w-100" id="search-blog">
                <div class="d-flex">
                    <form action="" method="get" id="search" class="w-100">
                        <input type="search" placeholder="Search" id="fname" name="fname"
                            onkeyup="showHint(this.value)">
                        <label for="fname" class="cursor-pointer text-white"><i
                                class="material-icons">search</i></label>
                    </form>
                </div>
                <div id="product" class="text-white d-flex flex-column mx-3">

                </div>
            </div>
        </div>
        <div class="choose">
            <button class="hover-zoom"><i class="material-icons">chevron_left</i></button>
            <button>ALL MOVIES</button>
            <button>ACTION</button>
            <button>COMEDY</button>
            <button>CRIME</button>
            <button>SHOW</button>
            <button><i class="material-icons">chevron_right</i></button>
        </div>
        <div class="card-container">
            <?php
            $row = 16;

            require('views/createCard.php');
            ?>
        </div>
    </div>

    <?php
    require_once('views/partials/footer.php');

    ?>