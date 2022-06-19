<?php

    include ('constants.php');

    $username = $_GET['username'];

    $sql = "DELETE FROM tbl_admin WHERE user_name = $username";

    $res = mysqli_query($conn, $sql);

    if ($res==true)
    {
        $_SESSION['delete'] = "Admin deleted";

        header('location:'.SITEURL.'admin/manage-admin.php');
    }

    else
    {
        $_SESSION['delete'] = "Error";

        header('location:'.SITEURL.'admin/manage-admin.php');
    }

?>