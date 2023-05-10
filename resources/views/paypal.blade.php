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
            <a href="/customers" style="position: absolute; font-weight: bold; color: red; font-size: 30px; background-color: black; text-decoration: none; padding: 5px;">Back</a>
            <h1 class="mainTitle">Paypal</h1>
        </header>
        <section class="section1">
            <form class="form1" action="/api/paypal" method="POST">
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
                <input class="cardSubmit" type="submit" value="Submit payment" name="submit">
            </form>
                <img style="width: 200px; height: 100px; z-index: 1; position: relative; left: 45%; top: -25%;"src="images/paypal.png" alt="Paypal Logo">
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>