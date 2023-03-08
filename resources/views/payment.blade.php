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
                <input type="radio" name="card" value="Credit">Credit
                <input type="radio" name="card" value="Debit">Debit<br><br><br>
                <label for="cardNumber">Card Number: </label>
                <input type="text" name="cardNum" value="0000-0000-0000-0000">
            </form>


            <div class=theForm>
            </div>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>