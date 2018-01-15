<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
/*
function redirect_to($location){//The issue is in here!
   echo "works";
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}*/
function submitMessage($name, $email, $message){//, $direct
  //$subject = "Email from portfolio site";
  $youremail = "contactme@jrozman.com";
  //$formatTo = $email . " has sent you an email \n\n" . $name . " is their name \n\n" . $message;
  $confirm = " The message: \n\n" . $message . " \n\n Sent by" . $name . " at" . $email;//WORKING

  @mail($subject, $youremail, $confirm);

// $direct = $direct."?name={$name}";
//  redirect_to($direct);
}
 ?>
