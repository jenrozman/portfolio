<?php
function redirect_to($location){
  if($location != NULL){
    header("Address: {$location}");
    exit;
  }
}

  echo "From mail.php";
  function submitMessage($name, $message, $email, $direct){
    $header = "From: " . $email;
    $header2 = "From: " . $youremail;
    $subject = "Email from your portfolio";
    $subjectCon = "A copy of your email"; //Confirm to the sender
    $youremail = "contactme@jrozman.com";
    $formatTo = $email . " has sent an email\n\n" . $name . " is their name\n\n" . $message;
    $confirm = "A copy of what you sent: " . $email . " your email has sent.\n\n" . $name . " is your name\n\n" . $message

mail($youremail, $subjectTo, $formatTo);
mail($email, $subjectCon, $confirm);

$direct = $direct."?name={$name}";
redirect_to($direct);
  }
?>
