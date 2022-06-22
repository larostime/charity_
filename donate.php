<?php include ('header.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Задонатити</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Donate Start -->
        <div class="container">

    <?php 
    //CHeck whether  id is set or not
    if(isset($_GET['ware_id']))
    {
        //Get the  id and details of the selected food
        $ware_id = $_GET['ware_id'];

        //Get the DEtails of the SElected 
        $sql = "SELECT * FROM tbl_ware WHERE id=$ware_id";
        //Execute the Query
        $mysqli_result = mysqli_query($conn, $sql);
        //Count the rows
        $count = mysqli_num_rows($mysqli_result);
        //CHeck whether the data is available or not
        if($count==1)
        {
            //WE Have DAta
            //GEt the Data from Database
            $row = mysqli_fetch_assoc($mysqli_result);

            $title = $row['title'];
            $description = $row['description'];
            $price = $row['price'];
            $reached = $row['reached'];
            $image_name = $row['image_name'];

            $left = $price-$reached;
        }
        else
        {
            // not Availabe
            //REdirect to Home Page
        }
    }
    else
    {
        //Redirect to homepage
    }
                                    //CHeck whether image available or not
                                    if($image_name=="")
                                    {
                                ?>
                                        <div class="donate" data-parallax="scroll" data-image-src="<?php echo SITEURL; ?>img/causes-1.13.jpg">
                                <?php
                                    }
                                    else
                                    {
                                        //Image Available
                                ?>
                                        <div class="donate" data-parallax="scroll" data-image-src="<?php echo SITEURL; ?>img/<?php echo $image_name; ?>">
                                <?php
                                    }
                                ?>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Залишилось зібрати: <?php echo $left; ?> грн.</p>
                                <h2><?php echo $title; ?></h2>
                            </div>
                            <div class="donate-text">
                                <p><?php echo $description; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form action=""  method="POST">
                                <div class="control-group">
                                    <input type="text" name ="name" class="form-control" placeholder="Ваше ім'я" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name ="email" class="form-control" placeholder="Ваш email" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="number" name ="amount" class="form-control" placeholder="Скільки готові пожертувати" required="required" />
                                </div>
                                <div>
                                    <button type="submit" name ="submit" class="btn btn-custom" >Задонатити</button>
                                </div>
                                <br>
                            </form>
<?php 

//CHeck whether submit button is clicked or not
if(isset($_POST['submit']))
{
    // Get all the details from the form

    $ware_id = $_GET['ware_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    //Save the Order in Databaase
    //Create SQL to save the data
    $sql3 = "INSERT INTO tbl_order SET
        ware = '$ware_id',
        total_price = '$amount',
        name = '$name',
        email = '$email'
    ";

    //echo $sql2; die();

    //Execute the Query
    $res3 = mysqli_query($conn, $sql3);

    //Check whether query executed successfully or not
    if ($res3==TRUE)
    { ?>
        <h2>Всі дані прийнято</h2>
        <?php
    }
    else
    {?>
        <h2>Помилка запису даних</h2>
        <?php
    }

$sql4 = "UPDATE tbl_ware SET
reached = reached + $amount
WHERE id='$ware_id'
";

//echo $sql2; die();

//Execute the Query
$res4 = mysqli_query($conn, $sql4);

//Check whether query executed successfully or not
if ($res4==TRUE)
{ ?>
    <h2>Донат успішний</h2>
    <?php
}
else
{?>
    <h2>Донат не вдався</h2>
    <?php
}
}

?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->


        <?php include ('footer.php'); ?>