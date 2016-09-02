<?php 

	if(isset($_POST["name"])){
		$name = strip_tags($_POST["name"]);
		$email = strip_tags($_POST["email"]);
		$question = strip_tags($_POST["message"]);
		
		$to = "info@kmbgroup.in";
		$subject = "KMB - Contact Form";
		$message = "Name : $name\n\nEmail : $email\n\nQuestion : $question";
		$headers = "From: ".$email."\r\n";
		
		$ok = mail($to, $subject, $message, $headers);
		if($ok)
			echo '<script>alert("Thank you for contacting us!"); location.href = "http://kmbgroup.in/contact_us.html"; </script>';
		else
			echo  '<script>alert("Error while sending information! Please try again"); history.go(-1);</script>';
		}
?>