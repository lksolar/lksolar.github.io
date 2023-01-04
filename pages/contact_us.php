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
$to_email = "lukeamk@gmail.com";
$subject = "Test email to send from XAMPP";
$body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
$headers = "From: sender email";
ini_set('SMTP','smtp.gmail.com');
ini_set('smtp_port',587);
ini_set('sendmail_from','lukekellysws@gmail.com');
ini_set('auth_username','lukekellysws@gmail.com');
ini_set('auth_password','sflhmgesrfpdpaei');
 
if (mail($to_email, $subject, $body, $headers))
 
{
    echo "Email successfully sent to $to_email...";
}
 
else
 
{
    echo "Email sending failed!";
}