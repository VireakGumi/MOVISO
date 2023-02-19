<?php
$slides = ['0x0.jpg','avatar( the blockebuster).png','background_seller_or_customer_register.jpg','poster.jpg']
?>
<header class="masthead text-white text-center pb-5" style="height: 450px ;">
    <div id="slideshow">
        <?php
            foreach($slides as $slide):
        ?>
        <div>
            <img src="../../assets/slide/<?=$slide?>">
        </div>
        <?php
            endforeach;
        ?>
    </div>
    <div class="parallelogram"></div>
    <div class="parallelogram2"></div>
    <div class="container d-flex align-items-center flex-column mt-5 heading-text">
        <img class="masthead-avatar" src="../../assets/logo/moviso-logo1.png" alt="..." width="50%" />
        <h1 class="masthead-heading text-uppercase mb-0">Booking Now</h1>
        <p class="masthead-subheading font-weight-light mb-0">Action - Romantic - Adventure</p>
    </div>
</header>