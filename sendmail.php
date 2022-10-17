<?php

$email=$_POST['email']??false;
$message=$_POST['message']??false;
$noms=$_POST['name']??false;
$subject=$_POST['subject']??false;
if($email AND $message AND $noms){
         $to = "contact@grouplualabaservice.org";
         $subject = "$subject, << $noms,$email";
         
         $message = "<p>$message</p>";
         
         $header = "From:$email \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "OK";
            return;
         }
}
echo "Une erreur s'est produite lors du traitement de votre requete, veuillez reessayer!";