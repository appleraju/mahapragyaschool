<?php 
if(isset($_POST['submit'])){ 
    // Include the database configuration file 
    include_once 'Connection.php'; 
 
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
                    $insertValuesSQL .= "('".$fileName."', NOW(),(SELECT id FROM gallerytitle WHERE title ='$title'))"; 
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
            $insert = $conn->query("INSERT INTO images (file_name, uploaded_on,title_id) VALUES $insertValuesSQL"); 
           
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 


     
    echo $statusMsg; 




if($insert)
{
    mysqli_close($conn); // Close connection
    header("location:addimages.php"); // redirects to all records page
    exit;   
}
else
{
    echo "Error entering record. Pls enter one file at a time"; // display error message if not delete
}} 

?>