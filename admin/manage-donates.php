<?php include('menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Управління донатами</h1>

        <br><br>
        <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
        ?>
<br><br>

            <table class="tbl-full">
                    <tr>
                        <th>Номер</th>
                        <th>Номер запиту</th>
                        <th>Пожертвовано</th>
                        <th>Ім'я</th>
                        <th>E-mail</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_order"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $ware = $row['ware'];
                                $total_price = $row['total_price'];
                                $name = $row['name'];
                                $email = $row['email'];

                                
                                ?>

                                    <tr>
                                        <td><?php echo $id; ?>. </td>
                                        <td><?php echo $ware; ?></td>
                                        <td><?php echo $total_price; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email; ?></td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>

    </div>
</div>

<?php include('footer.php'); ?>