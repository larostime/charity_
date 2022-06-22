<!DOCTYPE html>
<html lang="en">
<?php include('admin/constants.php'); ?>
    <head>
        <meta charset="utf-8">
        <title>AidUAippt</title>
        <link rel="icon" href="img/favicon1.png"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+12121212121212</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>нашаскринька@гмейл.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">AidUA</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">

<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'index.php') !== false) {
    ?>
                        <a href="index.php" class="nav-item nav-link active">Головна</a>
    <?php
}
else {
    ?>
                        <a href="index.php" class="nav-item nav-link">Головна</a>
    <?php
} ?>

<?php
if (strpos($url,'causes.php') !== false) {
    ?>
                        <a href="causes.php" class="nav-item nav-link active">Допомогти</a>
    <?php
}
else {
    ?>
                        <a href="causes.php" class="nav-item nav-link">Допомогти</a>
    <?php
} ?>

<?php
if (strpos($url,'ask_for_aid.php') !== false) {
    ?>
                        <a href="ask_for_aid.php" class="nav-item nav-link active">Попросити про допомогу</a>
    <?php
}
else {
    ?>
                        <a href="ask_for_aid.php" class="nav-item nav-link">Попросити про допомогу</a>
    <?php
} ?>
                        <div class="nav-item dropdown">


<?php




if (strpos($url,'about.php' !== false)){
    ?> <a href="#" class="nav-item nav-link active">Інші сторінки</a> <?php
}
else {
    if (strpos($url,'blog.php' !== false)){
        ?> <a href="#" class="nav-item nav-link active" data-toggle="dropdown">Інші сторінки</a> <?php
    }
    else {
        if (strpos($url,'contact.php' !== false)){
            ?> <a href="#" class="nav-item nav-link active" data-toggle="dropdown">Інші сторінки</a> <?php
        }
        else {
            if (strpos($url,'single.php' !== false)){
                ?> <a href="#" class="nav-item nav-link active" data-toggle="dropdown">Інші сторінки</a> <?php
            }
            else {
                ?> <a href="#" class="nav-item nav-link" data-toggle="dropdown">Інші сторінки</a> <?php
            }
        }
    }
}
?>




                            <div class="dropdown-menu">
                                <a href="about.php" class="dropdown-item">Про нас</a>
                                <a href="blog.php" class="dropdown-item">Новини</a>
                                <a href="contact.php" class="dropdown-item">Контакти</a>
                                <a href="single.php" class="dropdown-item">Дізнатись більше про благодійність</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->