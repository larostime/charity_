<?php include('menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Керувати запитами</h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-ware.php" class="btn-primary">Створити запит</a>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>Номер запиту</th>
                        <th>Назва</th>
                        <th>Опис</th>
                        <th>Ціль</th>
                        <th>Зібрано</th>
                        <th>Зображення</th>
                        <th>Статус</th>
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all
                        $sql = "SELECT * FROM tbl_ware";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have foods or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have in Database
                            //Get the from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $id = $row['id'];
                                $title = $row['title'];
                                $description = $row['description'];
                                $price = $row['price'];
                                $reached = $row['reached'];
                                $image_name = $row['image_name'];
                                $status = $row['status'];
                                ?>

                                <tr>
                                    <td width="50"><?php echo $sn++; ?>. </td>
                                    <td width="100"><?php echo $title; ?></td>
                                    <td width="450"><?php echo $description; ?></td>
                                    <td>грн.<?php echo $price; ?></td>
                                    <td><?php echo $reached; ?></td>
                                    <td>
                                        <?php  
                                            //CHeck whether we have image or not
                                            if($image_name=="")
                                            {
                                                //WE do not have image, DIslpay Error Message
                                                echo "<div>Image not Added.</div>";
                                            }
                                            else
                                            {
                                                //WE Have Image, Display Image
                                                ?>
                                                <img src="<?php echo SITEURL; ?>img/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $status; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/change_status.php?id=<?php echo $id; ?>" class = "btn-primary">Підтвердити</a>
                                        <a href="<?php echo SITEURL; ?>admin/update-ware.php?id=<?php echo $id; ?>" class = "btn-primary">Редагувати</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-ware.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class = "btn-red">Видалити</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //Food not Added in Database
                            echo "<tr> <td colspan='7'> Ware not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

<?php include('footer.php'); ?>