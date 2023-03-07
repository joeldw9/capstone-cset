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
            <form class="form1">
                <label for='username'>Username: </label>
                <input type="text" id="user" name="user" autocomplete="off"><br><br>
                <label for='password'>Password: </label>
                <input type="password" id='pass' name="pass">

                <h1 class='enter'>Enter</h1>
                <h1 class='back'>Back</h1>
            </form>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>

</html>