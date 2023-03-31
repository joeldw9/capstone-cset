<?php
use App\Http\Controllers\signup;
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <link href="{{ url('main.css') }}" rel="stylesheet" type="text/css" >
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
        <form action="/api/edit" method="POST">
        <h3>Insert Old Password:</h3>
        <input name="password" type="password">
        <h3>New Password:</h3>
        <input name="newpassword" type="password">
        <h3>Confirm New Password:</h3>
        <input name="confirmpassword" type="password">
        <h3>Insert Email:</h3>
        <input name="email" type="email">
        <input type=submit value="Edit Account">
        <input type=button value="Cancel" onclick=location.href='/'>
        </form>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>