<?php include ('header.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Напишіть нам</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2></h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form action=""  method="POST" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" name="name" class="form-control" placeholder="Ваше ім'я" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email"  name="email" class="form-control" placeholder="Електронна скринька" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea type="text" name="message" class="form-control" placeholder="Повідомлення" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button type="submit" name="submit" class="btn btn-custom">Надіслати повідомлення</button>
                            </div>
                        </form>
<?php 
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yurii.stadnyk.knm.2018@lpnu.ua';
    $mail->Password = '12.05.2001';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('yurii.stadnyk.knm.2018@lpnu.ua');
    $mail->addAddress('warmaster007228@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php include ('footer.php'); ?>
