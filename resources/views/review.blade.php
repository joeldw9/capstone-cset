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
            <form class="form1">
                <h2 class="shipRate">Rate your shipping experience</h2>
                <label>1</label>
                <input type="radio" name="oneFive">
                <label>2</label>
                <input type="radio" name="twoFive">
                <label>3</label>
                <input type="radio" name="threeFive">
                <label>4</label>
                <input type="radio" name="fourFive">
                <label>5</label>
                <input type="radio" name="fiveFive">
            </form>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>