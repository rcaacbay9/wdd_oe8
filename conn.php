<?php

$db = mysqli_connect("localhost","root","","it15_database");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>