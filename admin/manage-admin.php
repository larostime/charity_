<?php include('menu.php');?>

        <!-- Main Content 1 -->
        <div class = "main-content">
            <div class = "wrapper">
                <h1>Керувати списком адміністраторів</h1>

                <?php
                    if (isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset ($_SESSION['add']);
                    }

                    if (isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset ($_SESSION['delete']);
                    }

                    if (isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset ($_SESSION['update']);
                    }
                ?>
                <br></br>

                <!-- Button to add admin -->
                <a href="add-admin.php" class = "btn-primary">Додати адміністратора</a>
                <br></br>

                <table class = "tbl-full">
                    <tr>
                        <th>Користувацьке ім'я адміна</th>
                        <th>Пароль</th>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM tbl_admin";

                        $res = mysqli_query($conn, $sql);

                        if($res==TRUE)
                        {
                            $rows = mysqli_num_rows($res);

                            if($rows > 0)
                            {
                                while ($rows = mysqli_fetch_assoc($res))
                                {
                                    $username = $rows ['user_name'];
                                    $password = $rows ['password'];

                                    ?>

                                        <tr>
                                            <td><?php echo $username; ?></td>
                                            <td><?php echo $password; ?></td>
                                            <td>
                                            <a href="update-admin.php?username=<?php echo $username; ?>" class = "btn-primary">Редагувати ім'я</a>
                                            <a href="change-pass.php?username=<?php echo $username; ?>" class = "btn-primary">Редагувати пароль</a>
                                            <a href="delete-admin.php?username=<?php echo $username; ?>" class = "btn-red">Видалити</a>
                                            </td>
                                        </tr>

                                    <?php
                                }
                            }

                            else
                            {

                            }
                        }

                    ?>

                </table>

            </div>
        </div>
        <!-- Main Content 2 -->

<?php include('footer.php'); ?>