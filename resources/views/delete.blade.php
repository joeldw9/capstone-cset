<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\editanddeletion; 
?>
<html>
    <head>
        <link href="{{ url('template.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <h2>Fill out the form to request account deletion</h2>
            <h3 style="margin-left: 300px;"><?php echo $_SESSION["username"]; ?></h3>
      <h3 style="margin-left: 50px;"><?php echo $_SESSION["email"]; ?></h3>
      <h3 style="margin-left: 50px;"><?php if($_SESSION["role"]==1){
        echo "Customer";
      }
      else if($_SESSION["role"]==2){
        echo "Employee";
      }
        ?></h3>
        </header>
        <section class="section1">
            <form action="/api/deletionrequest" method="POST">
                    <label for='username'>Username: </label>
                    <input type="text" id="username" name="username" autocomplete="off"><br><br>
                    <label for='password'>Password: </label>
                    <input type="password" id='password' name="password"><br><br>
                    <textarea required placeholder="Please give a reason to deleting your account."></textarea><br><br>
                    <input type="submit" value="deletionrequest" style=margin:right>
            </form>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>