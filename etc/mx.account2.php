<?php
	# konfiguracja dla konta
	$this->mail->Host = "smtp.gmail.com";					//Set the hostname of the mail server
	$this->mail->SMTPSecure = 'tls';				// Enable TLS encryption, `ssl` also accepted
	$this->mail->Port = 25;						//Set the SMTP port number - likely to be 25, 465 or 587
	$this->mail->SMTPAuth = false;					//Whether to use SMTP authentication
	$this->mail->Username = 'damianpeczak2003@gmail.com';		//Username to use for SMTP authentication
	$this->mail->Password = 'barney2003';				//Password to use for SMTP authentication
	$this->mail->setFrom('damianpeczak2003@gmail.com', 'Damian');	//Set who the message is to be sent from
#	$this->mail->addReplyTo('', 'Administrator');		//Set an alternative reply-to address
?>