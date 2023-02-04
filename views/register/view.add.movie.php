<?php require("views/partials/header.php"); ?>
<img src="../../assets/istockphoto-915697084-170667a.jpg" alt="" class="background">
<form action="/" method="post" class="list_movie">
    <!-- <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="40%"> -->
    <h2 class="text-center contain-movie ">UPLOAD MOVIE  </h2>
        <div class="form-movie">
            <div class="movie-left">
                <div class="movies">
                        <div id="title-field">
                            <input type="text" id="title_value" class="form-control" placeholder="Movie title *" name="title"
                                onkeyup="movieTitle()" onclick="normal('title-field')">
                            <span id="icons">
                                <i class="fa fa-check-circle"></i>
                                <i class="fa fa-exclamation-circle"></i>
                            </span>
                            <!-- <small class="text-danger">
                                <?php echo $title_error; ?>
                            </small> -->
                        </div>
                        <div id="price-field">
                            <input type="text" id="price_value" class="form-control" placeholder="Price *" name="price"
                                onkeyup="moviePrice()" onclick="normal('price-field')">
                            <span id="icons">
                                <i class="fa fa-check-circle"></i>
                                <i class="fa fa-exclamation-circle"></i>
                            </span>
                            <!-- <small class="text-danger">
                                <?php echo $price_error; ?>
                            </small> -->
                        </div>
                </div>

                <div class="movies">
                    <div id="genre-field">
                        <input type="text" id="genre_value" class="form-control" placeholder="Genre *" name="genre"
                            onkeyup="movieGenre()" onclick="normal('genre-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $genre_error; ?>
                        </small> -->
                    </div>
                    <div id="duration-field">
                        <input type="text" id="price_value" class="form-control" placeholder="Duration *" name="duration"
                            onkeyup="movieDuration()" onclick="normal('duration-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $duration_error; ?>
                        </small> -->
                    </div>
                </div>

                <div class="movies">
                    <div id="released-field">
                        <input type="text" id="released_value" class="form-control" placeholder="Released *" name="released"
                            onkeyup="movieReleased()" onclick="normal('released-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $released_error; ?>
                        </small> -->
                    </div>
                    <div id="country-field">
                        <input type="text" id="country_value" class="form-control" placeholder="Country *" name="country"
                            onkeyup="movieCountry()" onclick="normal('country-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $country_error; ?>
                        </small> -->
                    </div>
                </div>

                <div class="movies">
                    <div id="date-field">
                        <input type="date" id="date_value" class="form-control" placeholder="Date *" name="date"
                            onkeyup="movieDate()" onclick="normal('date-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $date_error; ?>
                        </small> -->
                    </div>
                    <div id="time-field">
                        <input type="time" id="time_value" class="form-control" placeholder="Time *" name="time"
                            onkeyup="movieTime()" onclick="normal('time-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $country_error; ?>
                        </small> -->
                    </div>
                </div>

                <div class="movies">
                    <div id="cinemaname-field">
                        <input type="text" id="cinema_name_value" class="form-control" placeholder="Cinema name *" name="cinemaname"
                            onkeyup="cinemaName()" onclick="normal('cinemaname-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $date_error; ?>
                        </small> -->
                    </div>
                    <div id="production-field">
                        <input type="text" id="production_value" class="form-control" placeholder="Production *" name="production"
                            onkeyup="movieProduction()" onclick="normal('production-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">
                            <?php echo $production_error; ?>
                        </small> -->
                    </div>
                </div>
 
            </div>
            
            <div class="movie-right">
                

                <div id="trailer-field">
                    <input type="text" id="trailer_value" class="form-control" placeholder="Link trailer *"
                        name="trailer" onkeyup="movieTrailer()" onclick="normal('trailer-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <!-- <small class="text-danger">
                        <?php echo $trailer_error; ?>
                    </small> -->
                </div>

                
                <div class="img">
                    <label for="inputImg" id="image">
                        Select Image <br/>
                        <i class="material-icons">add_a_photo</i>
                        <input id="inputImg" type="file" accept=""/>
                        <br/>
                        <span id="imageName"></span>
                    </label>
                </div>
                <div id="description-field">
                    <textarea name="description" id="description_value" class="form-control" cols="30" rows="4" 
                     onkeyup="moviewDescription()" onclick="normal('description-field')" placeholder="Descriptions...."></textarea>
            
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <!-- <small class="text-danger">
                        <?php echo $description_error; ?>
                    </small> -->
                </div>
            </div>

        </div>
        <div class="movie-btn">
            <button class="btn"><a href="/">back</a></button>
            <button class="btn text-center">Add now</button>

        </div>
    </form>

