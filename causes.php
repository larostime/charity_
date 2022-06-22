<?php include ('header.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Активні запити</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
            <div class="section-header text-center">
                    <h2>Допоможіть тим, хто цього найбільше потребує</h2>
                </div>

                <div class="owl-carousel causes-carousel">
            <?php
                //Display that are Active
                $sql = "SELECT * FROM tbl_ware";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the are availalable or not
                if($count>0)
                {
                    //Foods Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $reached = $row['reached'];
                        $image_name = $row['image_name'];
            ?>
                    <div class="causes-item">
                        <div>
                                <?php 
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                ?>
                                        <img src="img/causes-1.11.jpg" alt="Image" width="400" height="250">
                                <?php
                                    }
                                    else
                                    {
                                        //Image Available
                                ?>
                                        <img src="<?php echo SITEURL; ?>img/<?php echo $image_name; ?>" alt="#" width="400" height="250"/>
                                <?php
                                    }
                                ?>
                        </div>

                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <?php $percent=$reached/$price*100; ?>
                                    <span><?php echo $percent ?> %</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Зібрано:</strong> <?php echo $reached; ?> грн.</p>
                                <p><strong>Ціль:</strong> <?php echo $price; ?> грн.</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3><?php echo $title; ?></h3>
                            <p><?php $part = substr($description, 0,35); echo $part; ?>...</p>
                        </div>
                        <div class="causes-btn">
                            <a href="<?php echo SITEURL; ?>donate.php?ware_id=<?php echo $id; ?>" class="btn btn-custom">Дізнатись більше</a>
                            <a href="<?php echo SITEURL; ?>donate.php?ware_id=<?php echo $id; ?>" class="btn btn-custom">Задонатити</a>
                        </div>
                    </div>
            <?php
                    }
                }
            else
            {
                // not Available
                echo "<div class='error'>not found.</div>";
            }
            ?>
                </div>
            </div>
        </div>
        <!-- Causes End -->


        <?php include ('footer.php'); ?>
