<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\editanddeletion;
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
      <a href="/admin" style="position: absolute; font-weight: bold; color: red;">Back</a>
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
        <p>This is the account deletion page</p>
        <h1><?php echo $_SESSION["username"]; ?></h1>
        <form class="form1" action="/api/logout" method="POST">
          <input type="submit" class='enter' name="logout" value="Log Out"></h1>
        </form>
        <h2><?php $users = DB::select("
          SELECT * FROM accounts WHERE role = 3");
          foreach($users as $user){
          $_SESSION["username"] = $user->username;
          $_SESSION["email"] = $user->email;
          echo "Username: ",$_SESSION["username"], '<br>';
          echo "E-Mail: ",$_SESSION["email"], '<br>';
          echo "Role: Admin",'<br> <br>';
          }
          ?></h1>

        <h1>Customer Accounts Requesting Deletion:</h1>
        <h2><?php $users = DB::select("
            SELECT * FROM accounts WHERE role = 1 AND requestingdeletion = 'Yes'");
            foreach($users as $user){
            $_SESSION["username"] = $user->username;
            $_SESSION["email"] = $user->email;
            $_SESSION["ID"] = $user->User_ID;
            echo "Username: ",$_SESSION["username"], '<br>';
            echo "E-Mail: ",$_SESSION["email"], '<br>';
            echo "ID: ",$_SESSION["ID"], '<br> <br>';
            }
            ?></h1>


        <h1>Employee Accounts Requesting Deletion:</h1>
        <h2><?php $users = DB::select("
            SELECT * FROM accounts WHERE role = 2 AND requestingdeletion = 'Yes'");
            foreach($users as $user){
            $_SESSION["username"] = $user->username;
            $_SESSION["email"] = $user->email;
            $_SESSION["ID"] = $user->User_ID;
            echo "Username: ",$_SESSION["username"], '<br>';
            echo "E-Mail: ",$_SESSION["email"], '<br>';
            echo "ID: ",$_SESSION["ID"], '<br> <br>';
            }
            ?></h1>

    <h3>Enter the Username of the account into the box below you wish to delete:</h3>
    <form class="form1" action="/api/deleteaccount" method="POST">
      <input type="text" id="username" name="username" autocomplete="off"><br><br>
      <input type="submit" class='enter' name="deleteaccount"></h1>
    </form>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>