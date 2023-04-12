<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <link href="{{ asset('main.css') }}" rel="stylesheet" type="text/css" >
    <script>
    function pricingView() {$price = document.getElementById("serviceType").value; document.getElementById("servicePrice").innerHTML = "Price: $" + $price; document.getElementById("price").value = $price} </script>
  </head>
  <body>
    <header>
      <a href="/login" style="position: absolute; font-weight: bold; color: red;">Back</a>
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
        <form class="orderForm" action="/api/order" method="POST">
        <ul style="margin-left: 25%; margin-right: 25%; width: 50%;">
          <li><textarea required placeholder="Please describe the device you need repaired, as well as your issue."></textarea></li>
          <li><select id="serviceType" required onchange="pricingView()">
            <option selected hidden value="0">Please Select One</option>
            <option value="254.99">Physical Repair</option>
            <option value="149.99">Tune-Up</option>
            <option value="99.99">Virus Removal</option>
            <option value="599.99">Data Recovery</option>
          </select></li>
          <input type='hidden', value="", name="price", id="price">
          <br>
          <p id="servicePrice">Please select an option to view pricing.</p>
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