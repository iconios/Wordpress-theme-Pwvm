<?php
// define variables and set to empty values
$name = $email = $message = $answer = "";
$nameErr = $emailErr = $messageErr = $answerErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["answer"])) {
		$answerErr = "You must have an answer";
	} else {
			$answer = test_input($_POST["answer"]);
    
			if ($answer == "9") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} else {
					$name = test_input($_POST["name"]);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
						$nameErr = "Only letters and white space allowed"; 
					}
				}
  
				if (empty($_POST["email"])) {
					$emailErr = "Email is required";
				} else {
					$email = test_input($_POST["email"]);
					// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format"; 
					}
				}
 
				if (empty($_POST["message"])) {
					$messageErr = "You must have a message";
				} else {
					$message = test_input($_POST["message"]);
					}
			}
		}
	}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

	$to = "info@pwvm-services.com, admin@primewaterviewholdings.com";
	$subject = "New Form Submission";
	$email_from = "webmaster@pwvm-services.com";
	$email_body = "You have received a new message from the user $name through www.pwvm-services.com\n". "Here is the message:\n $message". "And his/her email address is: $email";
	$headers = "From: $email_from\n";
	$headers .= "Reply-To: $email \r\n";
	$user = "$email";
	$usersubject = "Thank You";
	$userheaders = "From: webmaster@pwvm-services.com\n";
	$usermessage = "Thank you for the mail. If need be, we will get back to you very soon";
	mail($to,$subject,$email_body,$headers);
	mail($user,$usersubject,$usermessage,$userheaders);
	
	

?>