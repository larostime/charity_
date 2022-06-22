<?php
    session_start();

    define('SITEURL', 'https://phpstack-791338-2703049.cloudwaysapps.com/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'ugvpfzpvwk');
    define('DB_PASSWORD', '8EXrsVCQ7R');
    define('DB_NAME', "ugvpfzpvwk");

    $conn = mysqli_connect (LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db ($conn, DB_NAME) or die (mysqli_error());
?>