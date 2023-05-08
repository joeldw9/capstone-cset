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
            <button onclick="history.back()" style="position: absolute; font-weight: bold; color: red; font-size: 30px; background-color: black;">Back</button><br>
            <h2 style="text-align: center; margin-top: 30px; font-size: 30px;">Fill out the form to request account deletion</h2>
        </header>
        <section class="section1">
            <form style="margin: 20px;" action="/api/deletionrequest" method="POST">
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