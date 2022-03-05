<?php
include "connection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    date = $_POST['date'];
    time = $_POST['time'];

    $insert = mysqli_query($db,"INSERT INTO 'users'('name', 'location') VALUES ('$name', '$location', '$email', '$date', '$time')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>