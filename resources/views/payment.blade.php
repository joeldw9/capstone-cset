<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
?>
<html>
    <head>
        <link href="{{ url('payment.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <a href="/order" style="position: absolute; font-weight: bold; color: red; text-decoration: none; font-size: 30px; background-color: black; padding: 10px;">Back</a>
            <h1 class="payTitle">Payment Page</h1>
        </header>
        <section class="section1">
            <h1 class='sectionTitle'>Fill out the payment form to continue</h1>
            <div class='wholeForm'>
                <form class='form1'>
                    <h1 class="cardTitle">Card</h1><br><br>
                    <h3>Username: <h3 style="color: red; position: relative;"> <?php echo $_SESSION["username"]; ?></h3></h3><br><br>
                    <input type="radio" name="card" value="Credit" required>Credit
                    <input type="radio" name="card" value="Debit" required>Debit<br><br><br>
                    <label for="cardNumber">Card Number: </label>
                    <input type="text" name="cardNum" required><br><br>
                    <label for="expireDate">Expiration Year: </label>
                    <input type="number" name="expDate" min="1000" max="9999" required><br><br>
                    <label for="cvc"> CVC: </label>
                    <input type="number" name="cvc" min="100" max="999" required><br><br>
                    <label for="zip"> Zip Code: </label>
                    <input type="number" name="zipCode" required><br><br><br>
                    <input class="cardSubmit" type="submit" value="Submit payment" name="submit">
                </form>
                <form class="form2">
                    <h1 class="paypalTitle">Paypal</h1><br><br>
                    <h3>Username: <h3 style="color: red; position: relative;"> <?php echo $_SESSION["username"]; ?></h3></h3><br><br>
                    <input class="paypalSubmit" type="submit" value="Submit payment" name="submit">
                </form>
            </div>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>