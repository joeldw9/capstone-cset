<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
    use App\Http\Controllers\payment;
?>
<html>
    <head>
        <link href="{{ url('paypal.css') }}" rel="stylesheet" type="text/css" >
        <title>PayPal Page</title>
    </head>
    <body>
        <header class="topSection">
            <h1 class="mainTitle">Paypal</h1>
        </header>
        <section class="section1">
            <form class="form1">
                <h1 class="formPaypal">Paypal Information</h1><br><br>
                <p class="cardType">Card Type: </p>
                <select name="payment_method">
                    <option value="credit">credit</option>
                    <option value="debit">debit</option>
                </select><br><br>
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
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>