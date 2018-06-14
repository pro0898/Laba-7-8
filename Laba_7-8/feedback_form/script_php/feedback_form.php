<?php
	//declare our assets 
	$name = stripcslashes($_POST['name']);
	$emailAddr = stripcslashes($_POST['email']);
	$comment = stripcslashes($_POST['message']);
	$subject = stripcslashes($_POST['subject']);
        $page = stripcslashes($_POST['page']);
        $headers = "From: \"$name\" <$emailAddr>\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$contactMessage =  
"E-mail sender - $emailAddr
The name of the sender - $name 
A letter sent from the page - $page
IP sender - $_SERVER[REMOTE_ADDR]

---Start of message---

$comment

---End of message---";
	
		//send the email
		mail('YourEmail', $subject, $contactMessage, $headers);
		echo('success'); //return success callback
?>