<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
?>
<html>
    <head>
        <link href="{{ url('orderview.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <a href="/customers" style="position: absolute; font-weight: bold; color: red; font-size: 30px; background-color: black; text-decoration: none; padding: 5px;">Back</a>
            <h1 class="theTitle">Your Orders</h1>
            <h3 class="theTitle2">Copy the Order ID for payment</h3>
        </header>
    
        <section class="section1">
            <form class="container" action="/payment" method="GET">
                <?php
                $users = DB::select("
                SELECT * FROM orders WHERE User_ID = '".$_SESSION["User_ID"]."' AND status = 'Ordered'"
            );
                foreach($users as $user){
                    $_SESSION["Order_ID"] = $user->Order_ID;
                    $_SESSION["Type"] = $user->Type;
                    $_SESSION["Description"] = $user->Description;
                    $_SESSION["Status"] = $user->Status;
                    $_SESSION["Price"] = $user->Price;
                    echo "Order_ID: ",$_SESSION["Order_ID"],"<br>";
                    echo "Type: ",$_SESSION["Type"], "<br>";
                    echo "Description: ",$_SESSION["Description"], "<br>";
                    echo "Status: ",$_SESSION["Status"],"<br>";
                    echo "Price: ",$_SESSION["Price"],"<br><br>";
                }
            ?>
            <input class="button1" type="submit" value="Pay here!">
            </form>    
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>