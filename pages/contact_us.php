<form class="form-horizontal" action="" id="contact-form" method="post">
                    <fieldset>
                        <legend class="text-center colheader">Email Us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="name" name="name" type="text" placeholder="Full Name" class="form-control" required>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phonenumber" type="text" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="messag" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
<?php 
if(isset($_POST['submit'])) {
    
    $to = 'lukekellyphotos5@gmail.com'; 
    $from = $_POST['email']; 
    $subject ='Adlivetech Contact Form';
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phonenumber'];
    $subject = $_POST['subject']; 
    $messag = $_POST['messag']; 
   

$message = '<html><body>';

$message .='<table>';
$message .='<tr><td>Name:</td><td>'. $name .'</td></tr>';

$message .='<tr><td>Email:</td><td>'. $email .'</td></tr>';

$message .='<tr><td>Phone:</td><td>'. $phone .'</td></tr>';

$message .='<tr><td>Subject:</td><td>'. $subject .'</td></tr>';

$message .='<tr><td>Message:</td><td>'. $messag .'</td></tr>';

$message .='</table>';

$message .='</body></html>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "To: {$to}\r\n";
$headers .= "From: {$name} <{$from}>\r\n";
$headers .= "Reply-To: <{$to}>\r\n";
$headers .= "Subject: {$subject}\r\n";
$headers .= "X-Mailer: PHP/".phpversion()."\r\n";

mail($from, $subject, $message, $headers);
 
}

?>