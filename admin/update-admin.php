<?php include ('menu.php'); ?>
<?php include('constants.php'); ?>

    <div class = "menu text-center">
        <div class = "wrapper">
            <h1>Update username</h1>

            <br></br>

            <?php
                $new_username = $_GET['username'];

                $sql = "SELECT * FROM tbl_admin WHERE user_name = $new_username";

                $res = mysqli_query($conn, $sql);

                if ($res==true)
                {
                $count = mysqli_num_rows($res);

                    if ($count==1)
                    {
                        $row = mysqli_fetch_assoc($res);

                        $username = $row['user_name'];
                    }

                    else
                    {
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
            ?>

            <form action="" method = "POST">

                <table>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name = "username" value = "<?php echo $new_username; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan = "2">
                            <input type="submit" name = "submit" value = "Update Admin" class = "btn-primary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

<?php
    if (isset($_POST['submit']))
    {   
        $new_username = $_POST['username'];

        $sql = "UPDATE tbl_admin SET user_name='$new_username' WHERE user_name='$username'";

        $res = mysqli_query($conn, $sql);

        if ($res==true)
        {
            $_SESSION['update'] = "<div class='success'>Admin Updated</div>";

            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            $_SESSION['update'] = "<div class='success'>Error</div>";

            header('location:'.SITEURL.'admin/manage-admin.php');
        }
    }
?>

<?php include ('footer.php'); ?>