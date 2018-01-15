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
//echo "works";
  //$header = "From: " . $email;
  //$header2 = "From: " . $youremail;
  $subject = "Email from portfolio site";
  $youremail = "contactme@jrozman.com";
  $formatTo = $email . " has sent you an email \n\n" . $name . " is their name \n\n" . $message;
  $confirm = " Copy of the message: ". $name . " has sent you an email \n\n" . $email . " is their email. \n\n";

  // mail($youremail,$subject,$formatTo,$header);

// $direct = $direct."?name={$name}";
//  redirect_to($direct);
}
 ?>
