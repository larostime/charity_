        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Офіс</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Чорнобаївська 666, Львів</p>
                            <p><i class="fa fa-phone-alt"></i>+1212121221121212</p>
                            <p><i class="fa fa-envelope"></i>нашаскринька@гмейл.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Корисні посилання</h2>
                            <a href="about.php">Про нас</a>
                            <a href="contact.php">Контакти</a>
                            <a href="">Термінові запити</a>
                            <a href="">Популярні статті</a>
                            <a href="blog.php">Останні новини</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Ще трохи Корисних посиланнь</h2>
                            <a href="">Кукіси</a>
                            <a href="">Відповіді на питання</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Новини, важливі запити</h2>
                            <form action=""  method="POST">
                                <input type="text" name = "usermail" class="form-control" placeholder="Ваша електронна скринька">
                                <button type="submit1" name = "submit1" class="btn btn-custom">Надіслати</button>

                                <?php
                                    if(isset($_POST['submit1']))
                                    {
                                    $useremail = $_POST['usermail'];

                                    $sql = "INSERT INTO tbl_user SET user_email = '$useremail'";

                                    $res = mysqli_query($conn, $sql);

                                    if ($res==TRUE)
                                    { ?>
                                        <h2>Успіх!</h2>
                                        <?php
                                    }
                                    else
                                    {?>
                                        <h2>Невдача :-(</h2>
                                        <?php
                                    }
                                    }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">AidUA</a>, Всі права захищені.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>