<html>
    <head>
        <link href="{{ url('payment.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <h1 class="payTitle">Payment Page</h1>
        </header>
        <section class="section1">
            <h1 class='sectionTitle'>Fill out the payment form to continue</h1>
            <form class='form1'>
                <h1 class="cardTitle">Card</h1><br><br>
                <input type="radio" name="card" value="Credit">Credit
                <input type="radio" name="card" value="Debit">Debit<br><br><br>
                <label for="cardNumber">Card Number: </label>
                <input type="text" name="cardNum"><br><br>
                <label for="expireDate">Expiration Date: </label>
                <input type="date" name="expDate"><br><br>
                <label for="cvc"> CVC: </label>
                <input type="number" name="cvc"><br><br>
                <label for="zip"> Zip Code: </label>
                <input type="number" name="zipCode"><br><br><br>
                <input class="cardSubmit" type="submit" value="Continue to Checkout" name="submit">
            </form>
            <form class="form2">
                <h1 class="paypalTitle">Paypal</h1><br><br>
                <label for="payUser">Username: </label>
                <input type="text" name="user"><br><br><br>
                <input class="paypalSubmit" type="submit" value="Continue to Checkout" name="submit">
            </form>
            <div class=theForm>
            </div>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>