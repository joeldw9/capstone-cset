<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" type="text/javascript"></script>
    <link href="{{ asset('main.css') }}" rel="stylesheet" type="text/css" >
    <script>
      function pricingView() {
        var e = document.getElementById("servicePrice");
        var option = document.getElementById("serviceType");
        var value = option.value;
        if (value == 0) {
          e.innerHTML = "Please select an option for pricing."
        }
        if (value == 1) {
          e.innerHTML = "Price: $49.99"
        }
        if (value == 2) {
          e.innerHTML = "Price: $24.99"
        }
        if (value == 3) {
          e.innerHTML = "Price: $74.99"
        }
        if (value == 4) {
          e.innerHTML = "Price: $99.99"
        }
      }
      $(document).ready(function () {
        pricingView();
      });
    </script>

  </head>
  <body>
    <header>
      <h1>Computer Repair Shop</h1>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#pricing">Pricing</a></li>
          <li><a href="/#contact">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="services">
        <h2>Order</h2>
        <form class="orderForm">
        <ul style="margin-left: 25%; margin-right: 25%; width: 50%;">
          <li><textarea required placeholder="Please describe the device you need repaired, as well as your issue."></textarea></li>
          <li><select id="serviceType" required onchange="pricingView()">
            <option selected hidden value="0">Please Select One</option>
            <option value="1">Physical Repair</option>
            <option value="2">Tune-Up</option>
            <option value="3">Virus Removal</option>
            <option value="4">Data Recovery</option>
          </select></li>
          <br>
          <p id="servicePrice"></p>
          <br>
          <li><input type="submit" style="width: 50%; margin-left: 25%; margin-right: 25%;"></li>
        </ul>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>
