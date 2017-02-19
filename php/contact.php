<?php
if ($_POST) {
	// Download class.phpmailer.php from https://github.com/PHPMailer/PHPMailer
	require_once ('class.phpmailer.php');

	// An example to send email from a contact form
	$mail = new PHPMailer();
	$mail->setFrom('messagefrom@ontee.cz', 'Portfolio page'); // Do not put user's email there, just your
	$mail->addAddress('natalie.mikesova@gmail.com', 'Portfolio page');
	$mail->addReplyTo($_POST['email'], $_POST['name']);

	$mail->Subject = 'Portfolio page message';
	$mail->Body = 'This message came from your portfolio page: ' . $_POST['message'];

	if(!isset($_POST['message'])){

	} // how to stay on page, include submitted data


//filter messages without proper format of email
//filter messages without content
?>

<section class="nm-contact-form" id="CONTACTS">
    	<div class="nm-line-contact"></div>

			<div class="nm-container-small">
				<h2 class="nm-heading2">Contact</h2>
                <a href="#HOME" class="backToTop">Back to top</a>
                
                
                <div class="nm-form pull-right">

                <?php 
                	if(!$mail->send()) {
	                echo '<h4 class="nm-red">Message could not be sent.</h4>';
	                echo '<h4 class="nm-red">Mailer Error: ' . $mail->ErrorInfo.'</h4>';
	                } else {
	                echo '<h4 class="nm-green">Message has been sent</h4>';
	                }
					
					header('Location: index.html'); //doesn't resend on reload
                }
                ?>
                    <form class="nm-contact-form" method="post" action="">
                        Your name:<br> <input type="text" class="nm-input" name="name"><br>
                        Your email:<br><input type="text" class="nm-input" name="email"><br>
                        <textarea name="message" rows="5" cols="30"class="nm-input-textarea" placeholder="Write your message here"></textarea><br>
                        <input type="submit" value="Send Message" class="nm-submit">
                    </form>
                </div>

			</div>
</section>

	