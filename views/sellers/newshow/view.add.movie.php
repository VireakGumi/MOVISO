<?php require("views/partials/header.php"); ?>
<img src="../../assets/background/istockphoto-915697084-170667a.jpg" alt="" class="bg">
<form method="POST" action="" enctype="multipart/form-data" class="list_movie">

    <h2 class="text-center contain-movie ">UPLOAD MOVIE </h2>
        <div class="form-movie">
            <div class="movie-left">
                <div class="movies">
                        <div id="title-field">
                            Movie Title<input type="text" id="title_value" class="form-control" name="title"
                                onkeyup="movieTitle()" onclick="normal('title-field')">
                            <span id="icons">
                                <i class="fa fa-check-circle"></i>
                                <i class="fa fa-exclamation-circle"></i>
                            </span>
                            <small class="text-danger"><?= !empty($title_error)? $title_error : "<p>.</p>"?></small>

                        </div>
                        
                        <div id="price-field">
                            Price<input type="text" id="price_value" class="form-control"  name="price"
                                onkeyup="moviePrice()" onclick="normal('price-field')">
                            <span id="icons">
                                <i class="fa fa-check-circle"></i>
                                <i class="fa fa-exclamation-circle"></i>
                            </span>
                            <small class="text-danger"><?= !empty($price_error)? $price_error : "<p>.</p>"?></small>

                        </div>
                </div>

                <div class="movies">
                    <div id="genre-field">
                        Genre<input type="text" id="genre_value" class="form-control"  name="genre"
                            onkeyup="movieGenre()" onclick="normal('genre-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($genre_error)? $genre_error : "<p>.</p>"?></small>
                        
                    </div>
                    <div id="duration-field">
                        Duration<input type="text" id="duration_value" class="form-control" name="duration"
                            onkeyup="movieDuration()" onclick="normal('duration-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($duration_error)? $duration_error : "<p>.</p>"?></small>

                    </div>
                </div>

                <div class="movies">
                    <div id="released-field">
                        Released<input type="date" id="released_value" class="form-control" name="released"
                            onkeyup="movieReleased()" onclick="normal('released-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($duration_error)? $duration_error : "<p>.</p>"?></small>

                    </div>
                    <div id="country-field">
                        Country<input type="text" id="country_value" class="form-control"  name="country"
                            onkeyup="movieCountry()" onclick="normal('country-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($country_error)? $country_error : "<p>.</p>"?></small>

                    </div>
                </div>

                <div class="movies">
                   <div id="date-field">
                        Date Time<input type="datetime-local" id="date_value" class="form-control"  name="datetime"
                            onkeyup="movieDate()" onclick="normal('date-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($dateTime_error)? $dateTime_error : "<p>.</p>"?></small>

                    </div>
                    <div id="numberticket-field">
                         Number Ticket<input type="number" id="numberticket_value" class="form-control"  name="numberticket"
                            onkeyup="movieTime()" onclick="normal('numberticket-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($numberTicket_error)? $numberTicket_error : "<p>.</p>"?></small>

                    </div>
                </div>

                <div class="movies">
                    <div id="cinemaname-field">
                        Cinema Name<input type="text" id="cinema_name_value" class="form-control"  name="cinemaname"
                            onkeyup="cinemaName()" onclick="normal('cinemaname-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($cinemaName_error)? $cinemaName_error : "<p>.</p>"?></small>

                    </div>
                    <div id="production-field">
                        Production<input type="text" id="production_value" class="form-control"  name="production"
                            onkeyup="movieProduction()" onclick="normal('production-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($production_error)? $production_error : "<p>.</p>"?></small>


                    </div>
                </div>
 
            </div>
            
            <div class="movie-right">
            
                    <div id="addres-field">
                        Address<input type="text" id="address_value" class="form-control" name="address"
                            onkeyup="movieAddress()" onclick="normal('address-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($address_error)? $address_error : "<p>.</p>"?></small>

                    </div>
                    <div id="trailer-field">
                        Link Trailer<input type="text" id="trailer_value" class="form-control" placeholder="Link trailer *"
                            name="linktrailer" onkeyup="movieTrailer()" onclick="normal('trailer-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <small class="text-danger"><?= !empty($linkTrailer_error)? $linkTrailer_error : "<p>.</p>"?></small>
    
                            
                    </div>
               


                
                <div class="img">
                    <label for="inputImg" id="image">
                        Select Image <br/>
                        <i class="material-icons">add_a_photo</i>
                        <input  id="inputImg"  type="file" name="image">
                        <br/>
                        <span id="imageName"></span>
                    </label>
                </div>
                <small class="text-danger"><?= !empty($image_error)? $image_error : "<p>.</p>"?></small>

                <div id="description-field">
                    Description<textarea name="description" id="description_value" class="form-control" cols="30" rows="4" 
                     onkeyup="moviewDescription()" onclick="normal('description-field')" placeholder="Descriptions...."></textarea>
            
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger"><?= !empty($description_error)? $description_error : "<p>.</p>"?></small>


                </div>
            </div>
                
        </div>
        <div class="movie-btn">
            <button class="btn"><a href="/seller">back</a></button>
            <button class="btn text-center">Create</button>

        </div>
    </form>
