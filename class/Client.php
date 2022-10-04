<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require dirname(__FILE__).'/../lib/phpmailer/Exception.php';
    require dirname(__FILE__).'/../lib/phpmailer/PHPMailer.php';
    require dirname(__FILE__).'/../lib/phpmailer/SMTP.php';

    class Client {
        private $msg;
        private $mail;

        private function pickSender($account) {
            $conf = false;
            if(is_string($account) && $account!='') {
                $conf = dirname(__FILE__).'/../etc/mx.'.$account.'.php';
                var_dump($conf);
                if(file_exists($conf)) {
                    $this->mail = new PHPMailer;
                    // var_dump($this->mail);
                    $this->mail->isSMTP();			// Tell PHPMailer to use SMTP
                    //Enable SMTP debugging			// 0 = off (for production use)
                    $this->mail->SMTPDebug = 0;		// 1 = client messages	// 2 = client and server messages
                    $this->mail->Debugoutput = 'html';	//Ask for HTML-friendly debug output
                    require($conf);			// file exists - so include it
                } else {  }
            } else { }
            return $conf;
        }

        public function sendMail($account, $address, $subject, $body, $attachment) {
            $conf = $this->pickSender($account);
            // do opracowania używając metod:
            $this->mail->addAddress($address, 'TEST');
            $this->mail->CharSet = "utf-8";
            $this->mail->Subject = $subject;	//Set the subject line
            //Read an HTML message body from an external file, convert referenced images to embedded,
            // $this->mail->msgHTML($mxBody);	//convert HTML into a basic plain-text alternative body
            //Replace the plain text body with one created manually
            $this->mail->Body = $body;
            $this->mail->AltBody = 'Alt Body';
            //Attach an image file
            foreach ($attachment as $value) {
                $this->mail->addAttachment($value['tmp_name'], $value['name']);
            }
            //send the message, check for errors
            if (!$this->mail->send()) {
                echo 'Mailer Error: ' . $this->mail->ErrorInfo;
            } else {
                echo 'Message sent!';
            }
        }
    }
?>