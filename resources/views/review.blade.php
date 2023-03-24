<!DOCTYPE html>
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
                <p class="starRating">
                    <i class="my-star star1" data-star="1"></i>
                    <i class="my-star star2" data-star="2"></i>
                    <i class="my-star star3" data-star="3"></i>
                    <i class="my-star star4" data-star="4"></i>
                    <i class="my-star star5" data-star="5"></i>
                </p>
                <div class="squareRate"></div>
                <p class="rateWords">Poor Excellent</p>
                <div class="commentMain">
                    <h4 class="commentR">Add your comment</h4>
                    <form>
                        <textarea class="comText" name="commentText" required></textarea><br>
                        <input class="comButton" type="submit" value="Send Feedback">
                    </form>
                </div>

            </div>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>