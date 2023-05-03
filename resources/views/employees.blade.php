<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout;
    use App\Http\Controllers\employee; 
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
      {{-- <a href="/login" style="position: absolute; font-weight: bold; color: red;">Back</a> --}}
      <section style="display: flex; justify-content: space-between">
      <h1>Computer Repair Shop</h1>
      <h3 style="margin-left: 300px;"><?php echo $_SESSION["username"]; ?></h3>
      <h3 style="margin-left: 50px;"><?php echo $_SESSION["email"]; ?></h3>
      <h3 style="margin-left: 50px;"><?php if ($_SESSION["role"] = 2){
        echo "Employee";
        }?></h3>
      </section>
    </header>
    <main>
        <h1><?php echo $_SESSION["username"]; ?></h1>
        <input type=button class='enter' value="Edit Your Account" onclick=location.href='/edit'>
        <input type=button class='enter' value="Request Account Deletion" onclick=location.href='/delete'>
        <form class="form1" action="/api/logout" method="POST">
          <input type="submit" class='enter' name="logout" value="Log Out"></h1>
        </form>
        <h2><?php $users = DB::select("
          SELECT * FROM accounts WHERE role = 2 AND username=\"" . $_SESSION["username"] . "\"");
          foreach($users as $user){
          $_SESSION["username"] = $user->username;
          $_SESSION["email"] = $user->email;
          }
          ?></h1>
          <h1>Your Orders:</h1>
          <h2><?php 
              $_SESSION["username"] = $user->username;
              $users = DB::select("
              SELECT * FROM orders WHERE Status = 'Approved' and Employee_ID = \"". $_SESSION["username"] ."\"");
              foreach($users as $user){
              $_SESSION["Description"] = $user->Description;
              $_SESSION["User_ID"] = $user->User_ID;
              $_SESSION["Order_ID"] = $user->Order_ID;
              echo "Description: ",$_SESSION["Description"], '<br>';
              echo "User_ID: ",$_SESSION["User_ID"], '<br>';
              $x=$user->Price;
              if($x==254.99&&$x!=149.99&&$x!=99.99&&$x!=599.99){
                echo "Physical Repair", '<br>';
              };
              if($x==149.99&&$x!=254.99&&$x!=99.99&&$x!=599.99){
                echo 'Tune-Up', '<br>';
              };
              if($x==99.99&&$x!=149.99&&$x!=254.99&&$x!=599.99){
                echo 'Virus Removal', '<br>';
              };
              if($x==599.99&&$x!=149.99&&$x!=99.99&&$x!=254.99){
                echo 'Data Recovery', '<br>';
              };
              echo "Order_ID: ",$_SESSION["Order_ID"], '<br> <br>';
              }
              ?></h1>
          <h3>Enter the Order_ID of the order and press Submit to set status to Finished:</h3>
          <form class="form1" action="/api/employee" method="POST">
            <input type="text" id="Order_ID" name="Order_ID" autocomplete="off"><br><br>
            <input type="submit" class='enter' name="approve"></h1>
          </form>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>