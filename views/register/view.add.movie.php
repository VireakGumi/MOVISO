<?php require("views/partials/header.php"); ?>
<img src="../../assets/istockphoto-915697084-170667a.jpg" alt="" class="bg">
<form action="/" method="post" class="list_movie">
    <!-- <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="40%"> -->
    <h2 class="text-center contain-movie ">UPLOAD MOVIE  </h2>
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
                            <!-- <small class="text-danger">darath</small> -->

                        </div>
                        <div id="price-field">
                            Price<input type="text" id="price_value" class="form-control"  name="price"
                                onkeyup="moviePrice()" onclick="normal('price-field')">
                            <span id="icons">
                                <i class="fa fa-check-circle"></i>
                                <i class="fa fa-exclamation-circle"></i>
                            </span>
                            <!-- <small class="text-danger">darath</small> -->

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
                        <!-- <small class="text-danger">darath</small> -->

                    </div>
                    <div id="duration-field">
                        Duration<input type="text" id="duration_value" class="form-control" name="duration"
                            onkeyup="movieDuration()" onclick="normal('duration-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">darath</small> -->

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
                        <!-- <small class="text-danger">darath</small> -->

                    </div>
                    <div id="country-field">
                        Country<input type="text" id="country_value" class="form-control"  name="country"
                            onkeyup="movieCountry()" onclick="normal('country-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">darath</small> -->

                    </div>
                </div>

                <div class="movies">
                   <div id="date-field">
                        Date Time<input type="datetime-local" id="date_value" class="form-control"  name="date"
                            onkeyup="movieDate()" onclick="normal('date-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">darath</small> -->

                    </div>
                    <div id="time-field">
                         Number Ticket<input type="number" id="time_value" class="form-control"  name="time"
                            onkeyup="movieTime()" onclick="normal('time-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                        <!-- <small class="text-danger">darath</small> -->

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
                        <!-- <small class="text-danger">darath</small> -->

                    </div>
                    <div id="production-field">
                        Production<input type="text" id="production_value" class="form-control"  name="production"
                            onkeyup="movieProduction()" onclick="normal('production-field')">
                        <span id="icons">
                            <i class="fa fa-check-circle"></i>
                            <i class="fa fa-exclamation-circle"></i>
                        </span>
                    <!-- <small class="text-danger">darath</small> -->

                    </div>
                </div>
 
            </div>
            
            <div class="movie-right">
                

                <div id="trailer-field">
                    Link Trailer<input type="text" id="trailer_value" class="form-control" placeholder="Link trailer *"
                        name="trailer" onkeyup="movieTrailer()" onclick="normal('trailer-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <!-- <small class="text-danger">darath</small> -->
                        
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
                <!-- <small class="text-danger">darath</small> -->
                <div id="description-field">
                    Description<textarea name="description" id="description_value" class="form-control" cols="30" rows="4" 
                     onkeyup="moviewDescription()" onclick="normal('description-field')" placeholder="Descriptions...."></textarea>
            
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <!-- <small class="text-danger">darath</small> -->

                </div>
            </div>

        </div>
        <div class="movie-btn">
            <button class="btn"><a href="/">back</a></button>
            <button class="btn text-center">Add now</button>

        </div>
    </form>

