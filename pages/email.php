<?php
	$recipients = 'hello@sqsinger.com';
	$name = "Name Unknown";
    $email = "unknown_sender@sqsinger.com";
	$text = " Unknown Text";
	$subject = "SQSINGER Contact Form Submitted - Unknown Subject";

    // Grab fields from post, if there.
    if($_REQUEST != NULL) {
		$name = ($_REQUEST["name"]);
        $email = ($_REQUEST["email"]);
        $text = nl2br(($_REQUEST["text"]));
		$subject = ($_REQUEST["subject"]);
	}
    
    
    //Mail the request to the site webmasters.
    //First prepare the message.
    $message = "Hi Sam,<br/><br/>$name ($email) has sent you a message via your contact form. ";
    $message .= "You should be able to contact <b>$name</b> simply by responding to this email.";
    $message .= "The message text follows<br/>----------------<br/><br/>";
    $message .= "<br/><br/>$text<br/><br/>";
    
    $headers = 'From: $name <$email>\r\n ';
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\n";
    $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n" . "Content-Transfer-Encoding: 8bit\r\n\r\n";
    
    $message = nl2br($message);
    
    mail($recipients, $subject, $message, $headers);
    
	
?>