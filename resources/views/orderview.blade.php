<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    use App\Http\Controllers\loginlogout; 
?>
<html>
    <head>
        <link href="{{ url('orderview.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <header class="topSection">
            <h1 class="theTitle">Your Order</h1>
        </header>
        <section class="section1">
            <?php
            $hostName = "localhost";
            $userName = "root";
            $password = "";
            $databaseName = "capstone_cset";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            include ("database.php");

            $db = $conn;
            $tableName = "orders";
            $columns = ['Order_ID', 'User_ID', 'Description', 'Type', 'Price', 'Status'];
            $fecthData = fetch_data($db, $tableName, $columns);

            function fetch_data($db, $tableName, $columns){
                if(empty($db)){
                    $msg= "Database connection error";
                }
                elseif(empty($columns) || !is_array($columns)){
                    $msg="columns Name must be defined in an indexed array";
                }
                elseif(empty($tableName)) {
                    $msg="Table name is empty";
                }
                else {
                }

                $columnName = implode(", ", $columns);
                // $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY Order_ID WHERE User_ID = $_SESSION['User_ID']"; // syntax error, unexpected string content "", expecting "-" or identifier or variable or number
                $result = $db->query($query);
            }
            ?>
        </section>
        <footer class="bottomSection">
        </footer>
    </body>
</html>