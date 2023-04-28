<?php
use App\Http\Controllers\review;
?>
<!DOCTYPE html>
<script>
    function One() {
    $rating = 1;
    document.getElementById("Rating").value = $rating
    }
    function Two() {
    $rating = 2;
    document.getElementById("Rating").value = $rating
    }
    function Three() {
    $rating = 3;
    document.getElementById("Rating").value = $rating
    }
    function Four() {
    $rating = 4;
    document.getElementById("Rating").value = $rating
    }
    function Five() {
    $rating = 5;
    document.getElementById("Rating").value = $rating
    console.log($rating)
    }
    </script>
<html>
    <head>
        <title>Review Page</title>
        <link href="{{ url('review.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <h2 class="reviewTitle">Help us improve by filling out the review information!</h2>
        </header>
        <section class="section1">
            <div class="rateCover">
                <h2 class="rateTitle">Rate our shipping experience</h2>
                <p class="starRating" id="RatingType">
                    <i class="my-star star1" data-star="1" value="1" id="One" onclick=One()></i>
                    <i class="my-star star2" data-star="2" value="2" id="Two" onclick=Two()></i>
                    <i class="my-star star3" data-star="3" value="3" id="Three" onclick=Three()></i>
                    <i class="my-star star4" data-star="4" value="4" id="Four" onclick=Four()></i>
                    <i class="my-star star5" data-star="5" value="5" id="Five" onclick=Five()></i>
                </p>
                <div class="squareRate"></div>
                <p class="rateWords">Poor Excellent</p>
                <div class="commentMain">
                    <form action="/api/review" method="POST">
                        <h4 class="commentR">Enter your username</h4>
                        <input type="text" id='username' name="username"><br><br>
                        <h4 class="commentR">Enter the ID of the completed order</h4>
                        <input type="text" id='Order_ID' name="Order_ID"><br><br>
                        <h4 class="commentR">Add your review</h4>
                        <input type="text" id='Review' name="Review"><br><br>
                        <input type='hidden', value="", name="Rating", id="Rating">
                        <input class="comButton" type="submit" value="Send Feedback">
                    </form>
                </div>

            </div>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>