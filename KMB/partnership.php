<?php

 	$name=ucfirst($_REQUEST["name"]);
    $company=ucfirst($_REQUEST["company"]);
    $email=$_REQUEST["email"];
	$information=ucfirst($_REQUEST["message"]);

    $uploaded_name=$_FILES["uploaded"]["name"];
    $uploaded_type=$_FILES["uploaded"]["type"];
    $uploaded_size=$_FILES["uploaded"]["size"];
    $uploaded_temp=$_FILES["uploaded"]["tmp_name"];
	
	$fileatt 		=  	$uploaded_temp; // Path to the file
	$fileatt_type 	= 	$uploaded_type; // File Type
	$fileatt_name 	= 	$uploaded_name; // Filename that will be used for the file as the attachment

	
	$email_subject = "KMB Group - KMB Partnership Form"; // The Subject of the email
	$email_message = '<table width="417" border="0" cellpadding="1" cellspacing="3" class="contact">
  <tr>
    <td width="90" height="27" align="left"><strong>Name</strong></td>
    <td width="314"><strong>:</strong> '.$name.'</td>
  </tr>  
  <tr>
    <td height="37" align="left"><strong>Company</strong></td>
    <td><strong>:</strong> '.$company.'</td>
  </tr>
  <tr>
    <td height="26" align="left"><strong>Email</strong> </td>
    <td><strong>:</strong> '.$email.'</td>
  </tr>
  <tr>
    <td height="40" align="left"><strong>Information</strong></td>
    <td><strong>:</strong> '.$information.'</td>
  </tr>  
</table>'; // Message that the email has in it

$email_to = "info@kmbgroup.in"; // Who the email is too

$headers = "From: ".$email."\r\n";



$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

$headers .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";

$email_message .= "This is a multi-part message in MIME format.\n\n" .
"--{$mime_boundary}\n" .
"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$email_message . "\n\n";



/********************************************** First File ********************************************/


$fileatt 		=  	$uploaded_temp; // Path to the file
$fileatt_type 	= 	$uploaded_type; // File Type
$fileatt_name 	= 	$uploaded_name; // Filename that will be used for the file as the attachment

$file = fopen($fileatt,'rb');
$data = fread($file,filesize($fileatt));
fclose($file);


$data = chunk_split(base64_encode($data));

$email_message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatt_type};\n" .
" name=\"{$fileatt_name}\"\n" .
//"Content-Disposition: attachment;\n" .
//" filename=\"{$fileatt_name}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"--{$mime_boundary}\n";
unset($data);
unset($file);
unset($fileatt);
unset($fileatt_type);
unset($fileatt_name);


/********************************************** End of File Config ********************************************/

// To add more files just copy the file section again, but make sure they are all one after the other! If they are not it will not work!


$ok = @mail($email_to, $email_subject, $email_message, $headers);

if($ok) {
echo "<script type=\"text/JavaScript\"> alert('Successfully Sent'); window.location.href=\"http://kmbgroup.in/\";</script>";
} else {
die("<script type=\"text/JavaScript\"> alert('Unsuccessfull operation'); history.go(-1);</script>");
}
?>