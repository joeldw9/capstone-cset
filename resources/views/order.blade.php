<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <link href="{{ asset('main.css') }}" rel="stylesheet" type="text/css" >
    <script>
    function pricingView() {

    $price = document.getElementById("serviceType").value; document.getElementById("servicePrice").innerHTML = "Price: $" + $price; document.getElementById("price").value = $price; 
    
    document.getElementById("type").value = $type;} 
    </script>
  </head>
  <body>
    <header>
      <a href="/customers" style="position: absolute; font-weight: bold; color: red;">Back</a>
      <h1>Computer Repair Shop</h1>
    </header>
    <main>
      <section id="services">
        <h2>Order</h2>
        <form class="orderForm" action="/api/order" method="POST">
        <ul style="margin-left: 25%; margin-right: 25%; width: 50%;">
          <li><textarea required placeholder="Please describe the device you need repaired, as well as your issue." name="description"></textarea></li>
          <li><select id="serviceType" required onchange="pricingView()">
            <option selected hidden value="0">Please Select One</option>
            <option value="254.99" data-type="Physical Repair">Physical Repair</option>
            <option value="149.99" data-type="Tune-Up">Tune-Up</option>
            <option value="99.99" data-type="Virus Removal">Virus Removal</option>
            <option value="599.99" data-type="Data Recovery">Data Recovery</option>
          </select></li>
          <input type='hidden', value="", name="price", id="price">
          <input type='hidden', value="", name="type", id="type">
          <br>
          <p id="servicePrice">Please select an option to view pricing.</p>
          <p id="serviceType2">Please select an option to view type.</p>
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