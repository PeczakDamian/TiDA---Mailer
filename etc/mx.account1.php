<?php
	# konfiguracja dla konta
	$this->mail->Host = "zsegw.pl";					//Set the hostname of the mail server
	$this->mail->SMTPSecure = 'tls';				// Enable TLS encryption, `ssl` also accepted
	$this->mail->Port = 25;						//Set the SMTP port number - likely to be 25, 465 or 587
	$this->mail->SMTPAuth = true;					//Whether to use SMTP authentication
	$this->mail->Username = 'debug@zsegw.pl';		//Username to use for SMTP authentication
	$this->mail->Password = 'P@ssword';				//Password to use for SMTP authentication
	$this->mail->setFrom('debug@zsegw.pl', 'Debug Bot');	//Set who the message is to be sent from
#	$this->mail->addReplyTo('', 'Administrator');		//Set an alternative reply-to address
?>