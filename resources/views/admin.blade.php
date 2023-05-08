<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\admin;
    use App\Http\Controllers\loginlogout;
    $hostname = "localhost";
    $username = 'root';
    $password = "";
    $databaseName = "capstone_cset";
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    $query = "SELECT * FROM accounts where role = 2 and approvalstatus = 'Approved'";
    $orderquery = "SELECT * FROM orders WHERE Status = 'Ordered'";
    $result1=mysqli_query($connect, $query);
    $result2=mysqli_query($connect, $orderquery)
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Repair Shop</title>
    <link href="{{ url('main.css') }}" rel="stylesheet" type="text/css" >
    <script>
      function userchange() {
    
      $user = document.getElementById("ausername").value; document.getElementById("eusername").value = $user; 
      console.log(document.getElementById("eusername").value)
    
      } 
      function orderchange() {
        
        $order = document.getElementById("aOrder_ID").value; document.getElementById("Order_ID").value = $order;
        console.log(document.getElementById("Order_ID").value)

      } 
      </script>
  </head>
  <body>
    <header>
      {{-- <a href="/login" style="position: absolute; font-weight: bold; color: red;">Back</a> --}}
      <section style="display: flex; justify-content: space-between">
        <h1>Computer Repair Shop</h1>
        <h3 style="margin-left: 300px;"><?php echo $_SESSION["username"]; ?></h3>
        <h3 style="margin-left: 50px;"><?php echo $_SESSION["email"]; ?></h3>
        <h3 style="margin-left: 50px;"><?php if ($_SESSION["role"] = 2){
          echo "Admin";
          }?></h3>
        </section>
    </header>
    <main>
        <h2><?php $users = DB::select("
          SELECT * FROM accounts WHERE role = 3");
          foreach($users as $user){
          $_SESSION["username"] = $user->username;
          $_SESSION["email"] = $user->email;
          }
          ?></h1>
        <input type=button class='enter' value="Account Deletion Page" onclick=location.href='/admindelete'>
        <h1>Employee Accounts Requesting Approval:</h1>
        <h2><?php $users = DB::select("
            SELECT * FROM accounts WHERE role = 2 AND approvalstatus = 'Pending'");
            foreach($users as $user){
            $_SESSION["username"] = $user->username;
            $_SESSION["email"] = $user->email;
            $_SESSION["ID"] = $user->User_ID;
            echo "Username: ",$_SESSION["username"], '<br>';
            echo "E-Mail: ",$_SESSION["email"], '<br>';
            echo "ID: ",$_SESSION["ID"], '<br> <br>';
            }
            ?></h1>
    <h3>Enter the Username of the employee into the box below to approve their account:</h3>
    <form class="form1" action="/api/admin" method="POST">
      <input type="text" id="username" name="username" autocomplete="off"><br><br>
      <input type="submit" class='enter' name="approve"></h1>
    </form>
    <h1>Orders Requesting Approval:</h1>
            <h2><?php $users = DB::select("
                SELECT * FROM orders WHERE Status = 'Ordered'");
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
            <h3>Enter the Username of the employee and the Order_ID in their respective boxes to assign an order:</h3>
            <form class="form1" action="/api/admin2" method="POST">
              <select id="ausername" required onchange="userchange()">
                <option selected hidden value="0">Please select an employee</option>
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
    
                <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
    
                <?php endwhile;?>
            </select>
            <select id="aOrder_ID" required onchange="orderchange()">
              <option selected hidden value="0">Please select an Order</option>
              <?php while($row1 = mysqli_fetch_array($result2)):;?>
  
              <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

              <?php endwhile;?>

          </select>
              <input type='hidden' value="", name="eusername", id="eusername"><br><br>
              <input type='hidden' value="", name="Order_ID", id="Order_ID"><br><br>
              <input type="submit" class='enter' name="approve"></h1>
            </form>
            <br>
            <br>
            <h3>Enter the Order ID of the order you wish to cancel:</h3>
            <form class="form1" action="/api/cancel" method="POST">
              <input type="text" id="Order_IDcancel" name="Order_IDcancel" autocomplete="off"><br><br>
              <input type="submit" class='enter' name="cancel"></h1>
            </form>
            <br>
            <br>
            <br>
            <form class="form1" action="/api/logout" method="POST">
              <input type="submit" class='enter' name="logout" value="Log Out"></h1>
            </form>
    </main>
    <footer>
      <p>&copy; 2023 Computer Repair Shop. All rights reserved.</p>
    </footer>
  </body>
</html>