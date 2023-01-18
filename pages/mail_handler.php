


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
$mail = new PHPMailer(true);

echo $password;

// sleep(30);
// if(isset($_POST['submit'])){ 
//     $panelKit = $_POST["submit"];
//     if($panelKit == "Learn More about our 6 Panel Kit"){
//         header("Location: /pages/solar-kits/6_panels.php");
//         die();
//     }
//     if($panelKit == "Learn More About our 14 Panel kit"){
//         header("Location: /pages/solar-kits/14_panels.php");
//         die();
//     }
//     if($panelKit == "Learn More about our 16 Panel kit options"){
//         header("Location: /pages/solar-kits/16_panels.php");
//         die();
//     }
// } else {
//     header("Location: /pages/solar-kits/6_panels.php");
//     die();
// }
// try {

//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//     $mail->Port = 465;
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'lukekellysws@gmail.com';                 // SMTP username
//     $mail->Password = $password;                           // SMTP password
//     $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
//     // $mail->SMTPOptions = array(
//     //     'ssl' => array(
//     //         'verify_peer' => false,
//     //         'verify_peer_name' => false,
//     //         'allow_self_signed' => true
//     //     )
//     // );
//     $mail->SMTPDebug = False;

//     $mail->From = 'lukeamk@gmail.com';
//     $mail->FromName = 'Mailer';
//     // $mail->addAddress('lukeamk@gmail.com', 'Joe User');     // Add a recipient
//     $mail->addAddress('lukekellysws@gmail.com');               // Name is optional
//     $mail->addAddress('info@visionsolar.ie');
//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     // $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//     $mail->isHTML(true);         
//     if(isset($_POST['submit'])){                         // Set email format to HTML
        
//         $houseType = $_POST["house-type"];
//         $houseHours = $_POST["house-hours"];
//         $ElectricityBill = $_POST["elec-bill"];
//         $fName = $_POST["fname"];
//         $lName = $_POST["lname"];
//         // $panelKit = $_POST["submit"];
        

//         $mail->Subject = $fName . "" . $lName . "for" . $panelKit;
//         $mail->Body    = "House Type: " . $houseType . "\n\n" . "House Hours: " . $houseHours . "\n\n" . "Electricty Bill: " . $ElectricityBill . "\n\n" . "Clicked on: " . $panelKit;
//         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//     }
//     $mail->send();
//     if($panelKit == "Learn More about our 6 Panel Kit"){
//         header("Location: /pages/solar-kits/6_panels.php");
//         die();
//     }
//     if($panelKit == "Learn More About our 14 Panel kit"){
//         header("Location: /pages/solar-kits/14_panels.php");
//         die();
//     }
//     if($panelKit == "Learn More about our 16 Panel kit options"){
//         header("Location: /pages/solar-kits/16_panels.php");
//         die();
//     }

// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}{$e}";
// }

?>