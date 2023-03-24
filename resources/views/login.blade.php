<?php
use App\Http\Controllers\loginlogout;
?>
<html>
    <head>
        <title>Login</title>
        <link href="{{ url('login.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <h1 class="title">Login</h1>
        </header>
        <section class="section1">
            <form class="form1" action="/api/login" method="POST">
                <label for='username'>Username: </label>
                <input type="text" id="username" name="username" autocomplete="off"><br><br>
                <label for='password'>Password: </label>
                <input type="password" id='password' name="password">

                <input type="submit" class='enter' name="login"></h1>
                <input type=button class='enter' value="Cancel" onclick=location.href='/'>
            </form>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>

</html>