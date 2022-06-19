<?php include('menu.php'); ?>

        <!-- Main Content 1 -->
        <div class = "main-content">
            <div class = "wrapper">
                <h1>Add admin</h1>
                <br></br>
                
                <form action="" method ="POST">

                    <table class = "tbl-50">
                        <tr>
                           <td>Username:</td>
                           <td>
                               <input type="text" name = "username" placeholder = "Enter Username">
                            </td>
                        </tr>

                        <tr>
                            <td>Password:</td>
                            <td>
                                <input type="text" name = "password" placeholder = "Enter Password">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name = "submit" value = "Add Admin" class="btn-primary">
                            </td>
                        </tr>
                    </table>

                    <?php
                        if(isset($_POST['submit']))
                        {
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $sql = "INSERT INTO tbl_admin SET user_name = '$username', password = '$password'";

                            $res = mysqli_query($conn, $sql);

                            if ($res==TRUE)
                            {
                                echo "Admin Succesfully added";
                            }
                            else
                            {
                                echo "-";
                            }
                        }
                    ?>
                </form>

            </div>
        </div>
        <!-- Main Content 2 -->

<?php include('footer.php'); ?>