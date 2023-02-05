


<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
include '../.secrets/secrets.php';

//Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);
// $mail = new PHPMailer();

try {
    $mail = new PHPMailer();

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->Port = 465;
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lukekellysws@gmail.com';                 // SMTP username
    $mail->Password = $password;                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
    
    $mail->SMTPDebug = False;

    // $mail->From = 'lukeamk@gmail.com';
    $mail->FromName = 'Contact Us';
    // $mail->addAddress('lukeamk@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('lukekellysws@gmail.com');               // Name is optional
    $mail->addAddress('info@visionsolar.ie');
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);         


    if(isset($_POST['submit'])){                         // Set email format to HTML
        
        $fName = $_POST["fname"];
        $email = $_POST["form-email"];
        $message = $_POST["form-message"];
        // $panelKit = $_POST["submit"];
        

        $mail->Subject = $fName;
        $mail->Body    = "Email: " . $email . "\r\n<br />" . "Message: " . $message;
    }
    
    header("Location: /pages/contact_us.php");
    $mail->send();
    // if($panelKit == "Learn More about our 6 Panel Kit"){
    //     header("Location: /pages/solar-kits/6_panels.php");
    //     die();
    // }
    // if($panelKit == "Learn More About our 14 Panel kit"){
    //     header("Location: /pages/solar-kits/14_panels.php");
    //     die();
    // }
    // if($panelKit == "Learn More about our 16 Panel kit options"){
    //     header("Location: /pages/solar-kits/16_panels.php");
    //     die();
    // }
    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}{$e}";
}

die();

?>