<?php

include "Connection.php"; // Using database connection file here

 if (isset($_POST['submit']))
    {
      $title = $_POST['title'];


    // File upload configuration
      $title = $_POST['title'];


    $targetDir = "upload/";
    $allowTypes = array('jpg','png','jpeg','gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    $fileNames = array_filter($_FILES['files']['name']);
    if(!empty($fileNames)){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image conn insert sql
                    $insertValuesSQL .= "('".$fileName."','$title')";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].' | ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].' | ';
            }
        }

        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL, ',');
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO gallerytitle(file_name,title) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;

            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }

    // Display status message
    echo $statusMsg;
}
 // get id through query string
if($insert)
{
    mysqli_close($conn); // Close connection
    header("location:addimages.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error adding record"; // display error message if not delete
}

?>