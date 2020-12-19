<?php

include "Connection.php"; // Using database connection file here

 if (isset($_POST['submit']))
    {
      $title = $_POST['title'];
      $link = $_POST['link'];

      require 'Connection.php';
      $query1 = mysqli_query($conn, "INSERT INTO noticeboard(title,link)
                                     VALUES ('$title','$link')");


    }// get id through query string

if($query1)
{
    mysqli_close($conn); // Close connection
    header("location:noticeboard.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error adding record"; // display error message if not delete
}
?>
