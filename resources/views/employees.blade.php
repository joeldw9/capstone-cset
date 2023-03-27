<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
?>
<!DOCTYPE html>
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
    <main>
        <p>This is employee home page</p>
        <h1><?php echo $_SESSION["username"]; ?></h1>
        <form class="form1" action="/api/logout" method="POST">
          <input type="submit" class='enter' name="logout" value="Log Out"></h1>
        </form>
        <h2><?php $users = DB::select("
          SELECT * FROM accounts WHERE role = 2 AND username=\"" . $_SESSION["username"] . "\"");
          foreach($users as $user){
          $_SESSION["username"] = $user->username;
          $_SESSION["email"] = $user->email;
          echo "Username: ",$_SESSION["username"], '<br>';
          echo "E-Mail: ",$_SESSION["email"], '<br>';
          echo "Role: Employee",'<br> <br>';
          }
          ?></h1>

    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>