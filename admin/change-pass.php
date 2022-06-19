<?php include ('menu.php'); ?>
<?php include('constants.php'); ?>

    <div class = "menu text-center">
        <div class = "wrapper">
            <h1>Change pass</h1>

            <br></br>

            <?php
                if (isset($_GET['username']))
                {
                    $username=$_GET['username'];
                }
            ?>

            <form action="" method = "POST">

                <table>
                    <tr>
                        <td>Current password:</td>
                        <td>
                            <input type="password" name = "current_password" placeholder="Current password">
                        </td>
                    </tr>

                    <tr>
                        <td>New password:</td>
                        <td>
                            <input type="password" name = "new_password" placeholder="New password">
                        </td>
                    </tr>

                    <tr>
                        <td>Confirm password:</td>
                        <td>
                            <input type="password" name = "confirm_password" placeholder="Confirm password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan = "2">
                            <input type="hidden" name = "username" value="<?php echo $username; ?>">
                            <input type="submit" name = "submit" value = "Change password" class = "btn-primary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php

        if (isset($_POST['submit']))
        {
            $username=$_POST['username'];
            $current_password = $_POST['current_password'];
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];

            $sql = "SELECT * FROM tbl_admin WHERE user_name=$username AND password='$current_password'";

            $res = mysqli_query($conn, $sql);

            if ($res==true)
            {
                $count = mysqli_num_rows($res);

                if ($res==true)
                {
                    if($new_password==$confirm_password)
                    {
                        $sql1 = "UPDATE tbl_admin SET password='$new_password' WHERE user_name=$username";

                        $res1 = mysqli_query($conn, $sql1);

                        if ($res1==true)
                        {
                            $_SESSION['update'] = "<div class='success'>success</div>";

                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                        else
                        {
                            $_SESSION['update'] = "<div class='success'>error</div>";

                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                    }
                    else
                    {
                        $_SESSION['update'] = "<div class='success'>error</div>";

                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
                else
                {
                    $_SESSION['update'] = "<div class='success'>error</div>";

                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
        }

    ?>

<?php include ('footer.php'); ?>