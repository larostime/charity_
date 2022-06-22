<?php include ('header.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Створення запиту</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>
        
        <!-- Contact Start -->
        <tr><tr>
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2></h2>
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form action=""  method="POST" name="sentMessage" enctype="multipart/form-data">
                            <div class="control-group">
                                <input type="text" name="name" class="form-control" placeholder="Ваше ім'я" required="required" data-validation-required-message="Будь ласка, введість ваше ім'я" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" name="second_name" class="form-control" placeholder="Ваше прізвище" required="required" data-validation-required-message="Будь ласка, введість ваше прізвище" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="tel" name="phone_number" class="form-control" placeholder="Ваш номер телефону" required="required" data-validation-required-message="Будь ласка, введість ваш номер телефонуe" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email"  name="email" class="form-control" placeholder="Електронна скринька" required="required" data-validation-required-message="Будь ласка, введість ваш email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="title"  name="title" class="form-control" placeholder="Назва запиту" required="required" data-validation-required-message="Будь ласка, введість назву запиту" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="number" name="price" class="form-control" placeholder="Скільки потрібно (max 3400 грн.)" max="3400" required="required" data-validation-required-message="Будь ласка, введість необхідну суму" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea type="text" name="message" class="form-control" placeholder="Повідомлення" required="required" data-validation-required-message="Будь ласка, введість опис запиту"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <td>Виберіть зображення: </td>
                            <div class="control-group">
                                <input type="file" name="img"></input>
                            </div>
                            <br>
                            <div>
                                <button type="submit" name="submit" class="btn btn-custom">Надіслати запит</button>
                            </div>
                            <br>
                        </form>
                        <?php 

//CHeck whether the button is clicked or not
if(isset($_POST['submit']))
{
    //Add the in Database
    //echo "Clicked";
    
    //1. Get the DAta from Form
    $name = $_POST['name'];
    $second_name = $_POST['second_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $price = $_POST['price'];


    //2. Upload the Image if selected
    //Check whether the select image is clicked or not and upload the image only if the image is selected
    if(isset($_FILES['img']['name']))
    {
        //Get the details of the selected image
        $image_name = $_FILES['img']['name'];

        //Check Whether the Image is Selected or not and upload image only if selected
        if($image_name!="")
        {
            // Image is SElected
            //A. REnamge the Image
            //Get the extension of selected image (jpg, png, gif, etc.)
            $tmp = explode('.', $image_name);
            $ext = end($tmp);

            // Create New Name for Image
            $image_name = "Request-".rand(0000,9999).".".$ext; //New Image Name May Be "Request-Name-657.jpg"

            //B. Upload the Image
            //Get the Src Path and DEstinaton path

            // Source path is the current location of the image
            $src = $_FILES['img']['tmp_name'];

            //Destination Path for the image to be uploaded
            $dst = "img/".$image_name;

            //Finally Uppload the food image
            $upload = move_uploaded_file($src, $dst);

            //check whether image uploaded of not
            if ($upload==TRUE)
            { ?>
                <h2>Зображення завантажене</h2>
                <?php
            }
            else
            {?>
                <h2>Зображення не завантажене</h2>
                <?php
            }

        }

    }
    else
    {
        $image_name = ""; //SEtting DEfault Value as blank
    }

    //3. Insert Into Database

    //Create a SQL Query to Save or Add food
    // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
    $sql2 = "INSERT INTO tbl_ware SET
        title = '$title',
        description = '$message',
        price = '$price',
        reached = '0',
        image_name = '$image_name',
        status = 'Unchecked'
    ";

    //Execute the Query
    $res2 = mysqli_query($conn, $sql2);

    //CHeck whether data inserted or not
    //4. Redirect with MEssage to Manage Food page
    if ($res2==TRUE)
    { ?>
        <h2>Запит надіслано</h2>
        <?php
    }
    else
    {?>
        <h2>Невдале надсилання запиту</h2>
        <?php
    }

    $sql3 = "INSERT INTO tbl_user SET
        name = '$name',
        second_name = '$second_name',
        phone_number = '$phone_number',
        user_email = '$email'
    ";

    //Execute the Query
    $res3 = mysqli_query($conn, $sql3);

    //CHeck whether data inserted or not
    //4. Redirect with MEssage to Manage Food page
    if ($res3==TRUE)
    { ?>
        <h2>Дані користувача додано</h2>
        <?php
    }
    else
    {?>
        <h2>Невдале додавання користувача</h2>
        <?php
    }


    
}

?>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php include ('footer.php'); ?>
