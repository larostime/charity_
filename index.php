<?php include ('header.php'); ?>


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Долучайтеся, допомагайте</h1>
                            <div class="carousel-btn">
                                <a href="causes.php" class="btn btn-custom">Зробити пожертву</a>
                                <a href="ask_for_aid.php" class="btn btn-custom">Створити запит</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Будьмо добрими до дітей</h1>
                            <div class="carousel-btn">
                                <a href="causes.php" class="btn btn-custom">Зробити пожертву</a>
                                <a href="ask_for_aid.php" class="btn btn-custom">Створити запит</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Даруйте посмішки</h1>
                            <div class="carousel-btn">
                                <a href="causes.php" class="btn btn-custom">Зробити пожертву</a>
                                <a href="ask_for_aid.php" class="btn btn-custom">Створити запит</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Дізнайся про нас</p>
                            <h2>Некомерційна благодійна організація</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Ідея</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                Основною ідеєю є реалізація доступної системи благодійності задоволення маленьких потреб, простих людей, які б змогли швидко і без значних складнощів попросити допомоги в небайдужих
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Ми віримо, що разом з вами зможемо допомогти багатьом людям</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Якісна їжа</h3>
                                <p>Після початку війни часто воду набирали в лісі. Їжу готували на вогнищах, гуманітарної допомоги не отримувала велика кількість нужденних</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Доступні ліки</h3>
                                <p>Російське вторгнення 2022 року спровокувало в Україні чимало соціальних проблем, зокрема гостру нестачу медикаментів у фармацевтичних мережах</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Інші потреби</h3>
                                <p>Часто стається так, що потрібно купити якусь термінову річ, а грошей зовсім не залишилось</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
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
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Термінові запити</p>
                    <h2>Допоможіть тим, хто цього найбільше потребує</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                <?php
                //Display that are Active
                $sql = "SELECT * FROM tbl_ware WHERE status = 'Aproved'";

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
                        $status = $row['status'];
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
