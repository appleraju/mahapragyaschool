<?php

include "Connection.php"; // Using database connection file here

 if (isset($_POST['submit']))
    {
      $title = $_POST['title'];
      $id = $_POST['id'];
     

      require 'Connection.php';
      $query1 = mysqli_query($conn, "INSERT INTO gallerytitle(title,id)
                                     VALUES ('$title','$id')");


    }// get id through query string

if($query1)
{
    mysqli_close($conn); // Close connection
    header("location:viewtestimony.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error adding record"; // display error message if not delete
}
?>
