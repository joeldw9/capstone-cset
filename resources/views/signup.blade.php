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
        <form action="/api/signup" method="POST">
        <h3>Insert Username:</h3>
        <input name="username" type="username">
        <h3>Insert Password:</h3>
        <input name="password" type="password">
        <h3>Confirm Password:</h3>
        <input name="confirmpassword" type="confirmpassword">
        <h3>Insert Email:</h3>
        <input name="email" type="email">
        <h3>Insert Role:</h3>
        <input name="role" type="role">
        <input type=submit value="Create Account (Customer or Employee)">
        <input type=button value="Cancel" onclick=location.href='/'>
        </form>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>