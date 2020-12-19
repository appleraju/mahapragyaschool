<?php

include "Connection.php"; // Using database connection file here

$title = $_GET['title']; // get id through query string

$del = mysqli_query($conn,"delete from noticeboard where title = '$title'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:noticeboard.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>