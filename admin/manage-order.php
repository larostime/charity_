<?php include('menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>

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
                        <th>Number</th>
                        <th>Ware</th>
                        <th>Qty.</th>
                        <th>Price</th>
                        <th>Order Date</th>
                        <th>Customer id</th>
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
                                $qty = $row['qty'];
                                $total_price = $row['total_price'];
                                $order_date = $row['order_date'];
                                $customer_id = $row['customer_id'];
                                
                                ?>

                                    <tr>
                                        <td><?php echo $id; ?>. </td>
                                        <td><?php echo $ware; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo $total_price; ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo $customer_id; ?></td>
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