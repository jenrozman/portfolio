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
 ?>
