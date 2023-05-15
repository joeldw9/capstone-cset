<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
    use App\Http\Controllers\payment;
?>
<html>
    <head>
        <link href="{{ url('payment.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <a href="/orderview" style="position: absolute; font-weight: bold; color: red; text-decoration: none; font-size: 30px; background-color: black; padding: 10px;">Back</a>
            <h1 class="payTitle">Payment Page</h1>
            <div>
                <img style="height: 75px; width: 75px; margin-left: 30%; border-radius: 50%;" src="images/payment.jpg">
                <img style="height: 75px; width: 75px; margin-left: 30%; border-radius: 50%;" src="images/payment.jpg">
            </div>
        </header>
        <section class="section1">
            <h1 class='sectionTitle'>Fill out the payment form to continue</h1>
            <div class='wholeForm'>
                <form class='form1' action="/api/payment" method="POST">
                    <h1 class="cardTitle">Card</h1><br><br>
                    <h3>Username: <h3 style="color: red; position: relative;"> <?php echo $_SESSION["username"]; ?></h3></h3><br><br>
                    <select name="payment_method">
                        <option value="credit">credit</option>
                        <option value="debit">debit</option>
                    </select><br><br><br>
                    {{-- <input type="radio" name="card" value="Credit" required>Credit
                    <input type="radio" name="card" value="Debit" required>Debit<br><br><br> --}}
                    <label for="card_number">Card Number: </label>
                    <input type="text" name="card_number" required><br><br>
                    <label for="expireDate">Expiration Year: </label>
                    <input type="number" name="exp_date" min="1000" max="9999" required><br><br>
                    <label for="cvc"> CVC: </label>
                    <input type="number" name="CVC" min="100" max="999" required><br><br>
                    <label for="zip"> Zip Code: </label>
                    <input type="number" name="zip_code" required><br><br>
                    <label for="Order_ID">Order ID: </label>
                    <input type="text" name="Order_ID" required><br><br><br>
                    <input class="cardSubmit" type="submit" value="Submit payment" name="submit">
                </form>
                <form class="form2" action="/api/paypal_payment" method="POST">
                    <h1 class="paypalTitle">Paypal</h1><br><br>
                    <h3>Username: <h3 style="color: red; position: relative;"> <?php echo $_SESSION["username"]; ?></h3></h3><br><br>
                    <label for="Order_ID">Order ID: </label>
                    <input type="text" name="Order_ID" required><br><br><br>
                    <input class="paypalSubmit" type="submit" value="Submit payment" name="submit"><br><br>
                    <img style="width: 200px; height: 100px; margin-left: 30%;" src="images/paypal.png">
                </form>
            </div>
            <img style="width: 300px; height: 75px; position: relative; left: 350px; bottom: 100px;" src="images/cards.png">
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>