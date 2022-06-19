<?php
    session_start();

    define('SITEURL', 'http://phpstack-791023-2701771.cloudwaysapps.com/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'sfjaxgyxdt');
    define('DB_PASSWORD', 'QjgC894XGq');
    define('DB_NAME', "sfjaxgyxdt");

    $conn = mysqli_connect (LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db ($conn, DB_NAME) or die (mysqli_error());
?>