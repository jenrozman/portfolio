<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function redirect_to($location){ //ITS THE LOCATION _FIX THIS SHIT
echo "WORK OR I END YOU";
  if($location != NULL){
    header("Address: {$location}");
    exit;
  }
}
  function submitMessage($name, $message, $email, $subject, $direct){
    $header = "From: " . $email;
    $header2 = "From: " . $youremail;
    $subject = "Email from your portfolio";
    //$subjectCon = "A copy of your email"; Confirm to the sender
    $youremail = "contactme@jrozman.com";
    $formatTo = $email . " has sent an email\n\n" . $name . " is their name\n\n" . $message;
    //$confirm = "A copy of what you sent: " . $email . " your email has sent.\n\n" . $name . " is your name\n\n" . $message

//mail($youremail, $subjectTo, $formatTo);
 mail($youremail,$subject,$formatTo,$header);

$direct = $direct."?name={$name}";
redirect_to($direct);
  }
?>
