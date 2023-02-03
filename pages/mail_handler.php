


<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


if(isset($_POST['submit'])){ 
    $panelKit = $_POST["submit"];
    if($panelKit == "Learn More about our 6 Panel Kit"){
        header("Location: /pages/solar-kits/6_panels.php");
        send_email("6 Panel Kit");
        die();
    }
    if($panelKit == "Learn More About our 14 Panel kit"){
        header("Location: /pages/solar-kits/14_panels.php");
        send_email("14 Panel Kit");
        die();
    }
    if($panelKit == "Learn More about our 16 Panel kit options"){
        header("Location: /pages/solar-kits/16_panels.php");
        send_email("16 Panel Kit");
        die();
    }
} else {
    header("Location: /pages/solar-kits/6_panels.php");
    die();
}


function send_email($panel_kit) {
try {
    $mail = new PHPMailer();

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->Port = 465;
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lukekellysws@gmail.com';                 // SMTP username
    $mail->Password = $password;                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );
    $mail->SMTPDebug = True;

    // $mail->From = 'lukeamk@gmail.com';
    $mail->FromName = 'Quote form!';
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
        
        $houseType = $_POST["house-type"];
        $houseHours = $_POST["house-hours"];
        $ElectricityBill = $_POST["elec-bill"];
        $fName = $_POST["form-name"];
        $address = $_POST["form-address"];
        $eircode = $_POST["form-eircode"];
        $email = $_POST["form-email"];
        $number = $_POST["form-phone"];
        $panelKit = $_POST["submit"];
        $mail->FromName = 'Quote form!' . $fname . " " . $email;
        

        $mail->Subject = $fName . " for " . $panel_kit;
        $mail->Body    = "House Type: " . $houseType . "\r\n<br />" . "House Hours: " . $houseHours . "\n\r<br />" . "Electricty Bill: " . $ElectricityBill . "\r\n<br />" . "Address: " . $address . "\r\n<br />" . "Eircode: " . $eircode . "\r\n<br />" . "Email: " . $email . "\r\n<br />" . "Phone Number: " . $number . "\r\n<br />" . "Clicked on: " . $panelKit;
    }
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
    print("function end");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}{$e}";
}

}


?>