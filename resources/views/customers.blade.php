<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
?>
<!DOCTYPE html>
<html lang="en">
  <style>
    table, th, td {
      border:1px solid black;
    }
    </style>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <link href="{{ url('main.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <header>
      <section style="display: flex; justify-content: space-between">
      <h1>Computer Repair Shop </h1>
      {{-- <a href="/login" style="position: absolute; font-weight: bold; color: red;">Back</a> --}}
      <h3 style="margin-left: 300px;"><?php echo $_SESSION["username"]; ?></h3>
      <h3 style="margin-left: 50px;"><?php echo $_SESSION["email"]; ?></h3>
      <h3 style="margin-left: 50px;"><?php if ($_SESSION["role"] = 1){
        echo "Customer";
        }?></h3>
      </section>
      <nav>
        {{-- <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#pricing">Pricing</a></li>
          <li><a href="/#contact">Contact Us</a></li>
        </ul> --}}
      </nav>
    </header>
    <main>
        <form class="form1" action="/order" method="GET">
          <input type="submit" class='enter' value="Make an Order">
        </form>
        <form class="form1" action="/orderview" method="GET">
          <input type="submit" class='enter' value="View Orders">
        </form>
        <form action="/paypal" method="GET">
          <input type="submit" class='enter' value="Link your Paypal">
        </form>
        <form action="/review" method="GET">
          <input type="submit" class='enter' value="Review our Products">
        </form>
        <input type=button class='enter' value="Edit Your Account" onclick=location.href='/edit'>
        <input type=button class='enter' value="Request Account Deletion" onclick=location.href='/delete'>
        <form class="form1" action="/api/logout" method="POST">
          <input type="submit" class='enter' name="logout" value="Log Out"></h1>
        </form>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>