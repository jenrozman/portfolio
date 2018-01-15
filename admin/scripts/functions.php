<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('connect.php');

$myQuery = "SELECT * FROM tbl_portfolio";
$result = mysqli_query($link, $myQuery);
$rows = array();

while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}






echo json_encode($rows);

// get a portPiece
if (isset($_GET["portImg"])) { // check to see if a query parameter exists
  $port = $_GET["portImg"];

  $myQuery = "SELECT * FROM tbl_portfolio WHERE portfolio_img = '$port'";
  // send the query
  $result = mysqli_query($conn, $myQuery);
  // get the result
  $row = mysqli_fetch_assoc($result);
  echo json_encode($row);
}

// get the video thumbs
if (isset($_GET['getVideos'])) {
  $myQuery = 'SELECT * FROM video';
  // send the query
  $result = mysqli_query($conn, $myQuery);
  // get the result
  $rows = array();

  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }}
 ?>
