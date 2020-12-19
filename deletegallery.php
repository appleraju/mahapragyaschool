<?php

include "Connection.php"; // Using database connection file here

$id = $_GET['id'];
 // get id through query string
$del = mysqli_query($conn,"Delete from gallerytitle where id ='$id' ON DELETE CASCADE  "); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:viewgallerytitle.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>