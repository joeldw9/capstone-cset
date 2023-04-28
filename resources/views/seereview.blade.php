<?php
    use App\Http\Controllers\review; 
?>
<html>
    <head>
        <link href="{{ url('orderview.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <a href="/" style="position: absolute; font-weight: bold; color: red;">Back</a>
            <h1 class="theTitle">Reviews</h1>
        </header>
        
        <section class="section1">
                            <?php
                $users = DB::select("
                SELECT * FROM review"
            );
                foreach($users as $user){
                    // $_SESSION["Order_ID"] = $user->Order_ID;
                    // $_SESSION["Type"] = $user->Type;
                    // $_SESSION["Description"] = $user->Description;
                    // $_SESSION["Status"] = $user->Status;
                    // $_SESSION["Price"] = $user->Price;
                    echo "User: ",$user->username;
                    echo"</br>";
                    echo "Review: ",$user->Review;
                    echo"</br>";
                    echo "Rating: ",$user->Rating,"/5";
                }
            ?>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>