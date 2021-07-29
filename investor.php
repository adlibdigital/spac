<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "Investor Request Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$name = stripslashes($_REQUEST['name']); // sender's name
$lastname = stripslashes($_REQUEST['lastname']); // sender's email
$address = stripslashes($_REQUEST['address']); 
$city = stripslashes($_REQUEST['city']); 
$state = stripslashes($_REQUEST['state']); 
$postalcode = stripslashes($_REQUEST['postalcode']); 
$country = stripslashes($_REQUEST['country']); 
$phone = stripslashes($_REQUEST['phone']); 
$email = stripslashes($_REQUEST['email']); 
$comment = stripslashes($_REQUEST['comment']); 




// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "Name: ".$name."\r\n";  // add sender's name to the message
$msg .= "LastName: ".$lastname."\r\n";  
$msg .= "address: ".$address."\r\n";  
$msg .= "city: ".$city."\r\n";  
$msg .= "state: ".$state."\r\n";  
$msg .= "postalcode: ".$postalcode."\r\n";  
$msg .= "country: ".$country."\r\n";  
$msg .= "phone: ".$phone."\r\n";  
$msg .= "email: ".$email."\r\n";  
$msg .= "comment: ".$comment."\r\n";  




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