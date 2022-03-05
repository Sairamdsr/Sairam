<?php

$db = mysqli_connect("localhost","root","Sairam","my_db");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>