<?php
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "saturday";

$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);
if (!$con)
{
  die("<script>alert('Connection Failed')</script>");
}
