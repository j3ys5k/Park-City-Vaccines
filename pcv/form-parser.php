<?php


$EmailFrom = "info@parkcityvaccines.com";
$EmailTo = "shanae@snowcreekmed.com";
$Subject = "Parkcityvaccines.com Form Fillout";
$firstname = Trim(stripslashes($_POST['firstname'])); 
$lastname = Trim(stripslashes($_POST['lastname'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone'])); 
$destination = Trim(stripslashes($_POST['destination'])); 
$appnttype = Trim(stripslashes($_POST['appnttype'])); 
$departuredate = Trim(stripslashes($_POST['departuredate']));
$lengthofstay = Trim(stripslashes($_POST['length-of-stay']));

$Message = Trim(stripslashes($_POST['Message'])); 


/* Modification by Toni for Windows servers  */
ini_set("sendmail_from", "info@parkcityvaccines.com");

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lastname;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Destination: ";
$Body .= $destination;
$Body .= "\n";
$Body .= "Appointment Type: ";
$Body .= $appnttype;
$Body .= "\n";
$Body .= "Departure Date: ";
$Body .= $departuredate;
$Body .= "\n";
$Body .= "Length of Stay: ";
$Body .= $lengthofstay;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you/\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\"> the form is having errors";
}
?>