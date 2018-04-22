<?php

$link = mysqli_connect("localhost", "admin", "password", "fpsnz");

$error = mysqli_connect_error();

if($error)
{
  die ("Failed to connect to database");
}

?>
