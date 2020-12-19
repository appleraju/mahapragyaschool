<?php

include "Connection.php"; // Using database connection file here

 if (isset($_POST['submit']))
    {
      $tname = $_POST['tname'];
      $tpos = $_POST['tpos'];
      $tmessage = $_POST['tmessage'];
      $sname = $_POST['sname'];
      $sclass = $_POST['sclass'];
      $smessage = $_POST['smessage'];

      require 'Connection.php';
      $query1 = mysqli_query($conn, "INSERT INTO testimonial(tname,tpos,tmessage,sname,sclass,smessage)
                                     VALUES ('$tname','$tpos','$tmessage','$sname','$sclass','$smessage')");


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
