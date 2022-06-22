<?php include('menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Керувати користувачами</h1>

        <br /><br />
        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        
        ?>
        <br><br>

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-user.php" class="btn-primary">Додати користувача</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>Номер користувача</th>
                        <th>Ім'я</th>
                        <th>Прізвище</th>
                        <th>Номер телефону</th>
                        <th>Еmail</th>
                    </tr>

                    <?php 

                        //Query to Get all CAtegories from Database
                        $sql = "SELECT * FROM tbl_user";

                        //Execute Query
                        $res = mysqli_query($conn, $sql);

                        //Count Rows
                        $count = mysqli_num_rows($res);

                        //Create Serial Number Variable and assign value as 1
                        $sn=1;

                        //Check whether we have data in database or not
                        if($count>0)
                        {
                            //We have data in database
                            //get the data and display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $id = $row['id'];
                                $name = $row['name'];
                                $second_name = $row['second_name'];
                                $phone_number = $row['phone_number'];
                                $user_email = $row['user_email'];

                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $second_name; ?></td>
                                        <td><?php echo $phone_number; ?></td>
                                        <td><?php echo $user_email; ?></td>


                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-category.php?id=<?php echo $id; ?>" class = "btn-primary">Редагувати</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class = "btn-red">Видалити</a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //WE do not have data
                            //We'll display the message inside table
                            ?>

                            <tr>
                                <td colspan="6"><div">No Category Added.</div></td>
                            </tr>

                            <?php
                        }
                    
                    ?>

                    

                    
                </table>
    </div>
    
</div>

<?php include('footer.php'); ?>