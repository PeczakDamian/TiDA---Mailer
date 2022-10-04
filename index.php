<?php
    require_once("./views/demo.php");
    require_once(dirname(__FILE__).'/class/Client.php');

    if(isset($_POST['send'])) {
        send();
    }

    function send() {
        $mailfrom = isset($_POST['mailfrom']) ? $_POST['mailfrom'] : null;
        $mailto = isset($_POST['mailto']) ? $_POST['mailto'] : null;
        $subject = isset($_POST['subject']) ? $_POST['subject'] : null;
        $body = isset($_POST['body']) ? $_POST['body'] : null;
        $files = isset($_FILES['files']) ? $_FILES['files'] : null;

        $mx = new Client;
        if( !empty($mx) ) {	// jest biblioteka poczty e-mail - wysyłka możliwa
            $snd = $mx->sendMail($mailfrom, $mailto, $subject, $body, $files);
        }
    }
?>

