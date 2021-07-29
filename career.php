<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "Career Application Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$name = stripslashes($_REQUEST['name']); // sender's name
$lastname = stripslashes($_REQUEST['lname']); // sender's email
$email = stripslashes($_REQUEST['email']); 
$homenumber = stripslashes($_REQUEST['homenumber']); 
$mobilenumber = stripslashes($_REQUEST['mobilenumber']); 
$postcode = stripslashes($_REQUEST['postcode']); 
$position = stripslashes($_REQUEST['position']); 
$location = stripslashes($_REQUEST['location']); 


// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "Name: ".$name."\r\n";  // add sender's name to the message
$msg .= "LastName: ".$lastname."\r\n";  
$msg .= "email: ".$email."\r\n";  

$msg .= "homenumber: ".$homenumber."\r\n";  
$msg .= "mobilenumber: ".$mobilenumber."\r\n";  
$msg .= "postcode: ".$postcode."\r\n";  
$msg .= "position: ".$position."\r\n";  
$msg .= "location: ".$location."\r\n";  




$msg .= "Subject: ".$subject."\r\n\n"; // add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "---Message--- \r\n";
$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("Location:index.html");	
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
}

?>