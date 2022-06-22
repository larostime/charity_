<?php include ('header.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Worldwide non-profit charity organization</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae pellentesque turpis. Donec in hendrerit dui, vel blandit massa. Ut vestibulum suscipit cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum. Phasellus et felis sed purus tristique dignissim. Morbi sit amet leo at purus accumsan pellentesque. Vivamus fermentum nisi vel dapibus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
            <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                            <?php 
                //Sql Query 
                $sql = "SELECT * FROM tbl_user";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);
            ?>
                                <h3 class="facts-plus" data-toggle="counter-up"><?php echo $count; ?></h3>
                                <p>Донорів</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
            <?php 
                //Sql Query 
                $sql2 = "SELECT * FROM tbl_ware";
                //Execute Query
                $res2 = mysqli_query($conn, $sql2);
                //Count Rows
                $count2 = mysqli_num_rows($res2);
            ?>
                                <h3 class="facts-plus" data-toggle="counter-up"><?php echo $count2; ?></h3>
                                <p>Запитів</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                            <?php 
                //Creat SQL Query to Get Total Revenue Generated
                //Aggregate Function in SQL
                $sql4 = "SELECT SUM(price) AS Total FROM tbl_ware";

                //Execute the Query
                $res4 = mysqli_query($conn, $sql4);

                //Get the VAlue
                $row4 = mysqli_fetch_assoc($res4);
                
                //GEt the Total REvenue
                $total_revenue1 = $row4['Total'];

            ?>
                                <h3 class="facts-plus" data-toggle="counter-up"><?php echo $total_revenue1; ?></h3>
                                <p>Гривень зараз потрібно</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
            <?php 
                $sql5 = "SELECT SUM(total_price) AS Total FROM tbl_order";

                //Execute the Query
                $res5 = mysqli_query($conn, $sql5);

                //Get the VAlue
                $row5 = mysqli_fetch_assoc($res5);
                
                //GEt the Total REvenue
                $total_revenue2 = $row5['Total'];
            ?>
                                <h3 class="facts-plus" data-toggle="counter-up"> <?php echo $total_revenue2; ?></h3>
                                <p>Гривень вже зібрано</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <?php include ('footer.php'); ?>
