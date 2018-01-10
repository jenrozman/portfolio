<?php
require_once("admin/scripts/config.php");

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $robot = $_POST['notrobot'];
  $direct = "thanks.php";

  if($robot == ""){
    $mail = submitMessage($name, $email, $message, $direct);
  }else{
    die("Get out of here Terminator!");
    exit();
  }
}
?>



<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jen Rozman: Portfolio</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
   <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  </head>
  <body>
    <header class="head">
      <div class="row top">
    	<div class="small-4 large-4 columns">
        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
        </div>
        <div class="small-8 large-8 columns">
          <img src="images/name.png" alt="Jen Rozman">
          </div>
          <nav class="small-12 medium-12 large-8 large-push-1 nav columns">
            <h2 class="hide">Main Navigation</h2>
                <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
               <button class="menu-icon float-right" type="button" data-toggle></button>
                </div>
                <div id="main-menu">
                  <ul id="mainNav">
                        <li><a href="about.html">About Me</a></li>
                        <li><a href="skills.html">Skills</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a class="active" href="contact.php">Contact Me</a></li>
                    </ul>
                </div>
           </nav>
        </div>
      </header>
   <section class="row tree" id="contact">
	  	    <div class="small-11 small-centered large-8 large-centered columns">
            <div class="contactinfo">
                <h2 class="hide">Interested in my work? Contact me.</h2>
                <div class="small-12 large-8 large-centered columns">
                  <p>Interested in my work or have a question?</p>
                  <p>Feel free to shoot me a message!</p>
                </div>
            </div>
          </div>
         <h2 class="hide">Contact information</h2>
        <div class="small-12 medium-8 medium-centered large-6 columns">
          <section id="Form">
            <h2 class="hide">Form</h2>
          <form action="form.php" id="contactForms" method="post" >
              <input name='name' type="text" required id="contname" placeholder="Name">
              <input name='email' type="email" required id="email" placeholder="Email">
              <input name='notrobot' class="hide" type="text" required id="robot" placeholder="Address">
              <input name='message' type="text" required id="message" placeholder="Message">
              <input id="submit" type="submit" value="Submit">
            </form>
          </section>
       </div>
       <div class="row medium-push-2">
         <div class="small-3  medium-2 social large-1 large-offset-2 columns"><a href="https://www.linkedin.com/jenrozman"><img src="images/linkedred.svg" alt="LinkedIn"></a></div>
         <div class="small-3  medium-2 social large-1 columns"><a href="https://www.github.com/jenrozman"><img src="images/gitred.svg" alt="GitHub"></a></div>
         <div class="small-3 medium-2 social large-1 columns"><a href="https://www.flickr.com/jenrozman"><img src="images/flkred.svg" alt="Flickr"></a></div>
         <div class="small-3  medium-2 social large-1 end columns"><a href="https://instagram.com/jenrozman"><img src="images/instared.svg" alt="Instagram"></a></div>
       </div>
     </section>

    <footer class="row">
    	<div class="small-12 small-centered large-12 columns">
        	<p class="copy">&copy;2017-JenRozman</p>
        </div><!--nav?-->
    </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script> <!--detects if the user is click an input, or using the keyboard to input, if using keyboard, probably visually impared and highlights things, not a huge deal right now but good to know-->
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
