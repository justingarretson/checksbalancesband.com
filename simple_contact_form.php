<?php

/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

if (array_key_exists('email', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('subject', $_POST)) {
        $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
        $subject = 'No subject given';
    }
    //Apply some basic validation and filtering to the query
    if (array_key_exists('query', $_POST)) {
        //Limit length and strip HTML tags
        $query = substr(strip_tags($_POST['query']), 0, 16384);
    } else {
        $query = '';
        $msg = 'No query provided!';
        $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
    
    $to = 'justingarretson@gmail.com';
    
    //Make sure the address they provided is valid before trying to use it
    if (PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= 'Error: invalid email address provided';
        $err = true;
    }
    if (!$err) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->From = 'website@checksbalancesband.com';
        $mail->FromName = 'Website Contact Form';
        $mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'website@checksbalancesband.com';                 // SMTP username
        $mail->Password = '[K0dv=GE0';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->Port = 587;
        $mail->CharSet = PHPMailer::CHARSET_UTF8;
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Contact form: ' . $subject;
        $mail->Body = "Contact form submission\n\n" . $query;
        if (!$mail->send()) {
            $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $msg .= 'Message sent!';
        }
    }
} ?>

<?php if (empty($msg)) { ?>
    
    <form method="post">
        <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                    <textarea name="query" class="form-control" name="query" id="query" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
            </div>
             <div class="col-12 text-center">
                <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
            </div>
	    </div>   
        
    </form>
<?php } else {
    echo $msg;
} ?>
</body>
</html>
