<?php
//connects you to the db
$user = "root";//locally only, unless we go in and change it
$pass = "";//windows
$url = "localhost"; //where is the server running, for both mac/pc
$db = "db_portfolio";//the db you wantafter this, everything else should stay the same!
$conn = mysqli_connect($url, $user, $pass, $db);
//Shouldn't have to touch anything below here.
//Ticket to access our db, calling it
$link = mysqli_connect($url, $user, $pass, $db); //holds our access token, for PC
//$link = mysqli_connect($url, $user, $pass, $db, "8889"); - for mac the # are the ports
//check connection if it fails, and will tell what fails
if(mysqli_connect_errno()){
	printf("Connect Failed: %s\n", mysqli_connect_error()); //echo spits out anything, printf has to be a string
	//the %s\n
	exit();//so it doesnt crash someones browser.
}
?>
