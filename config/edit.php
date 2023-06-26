<?php
include '../config.php';

$id_kegiatan = $_POST['id_kegiatan'];
$judul = $_POST['judul'];
$isi_kegiatan = $_POST['isi_kegiatan'];
//$file_img=$_FILES['gambar'];

//Taking the files from input
    $file = $_FILES['uploadfile'];
    //Getting the file name of the uploaded file
    $fileName = $_FILES['uploadfile']['name'];
    //Getting the Temporary file name of the uploaded file
    $fileTempName = $_FILES['uploadfile']['tmp_name'];
    //Getting the file size of the uploaded file
    $fileSize = $_FILES['uploadfile']['size'];
    //getting the no. of error in uploading the file
    $fileError = $_FILES['uploadfile']['error'];
    //Getting the file type of the uploaded file
    $fileType = $_FILES['uploadfile']['type'];

    //Getting the file ext
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    //Array of Allowed file type
    $allowedExt = array("jpg","jpeg","png","pdf");

    //Checking, Is file extentation is in allowed extentation array
    if(in_array($fileActualExt, $allowedExt)){
        //Checking, Is there any file error
        if($fileError == 0){
            //Checking,The file size is bellow than the allowed file size
            if($fileSize < 10000000){
                //Creating a unique name for file
                $fileNemeNew = uniqid('',true).".".$fileActualExt;
                //File destination
                $fileDestination = './../src/images/kegiatan/'.$fileName;
                //function to move temp location to permanent location
                move_uploaded_file($fileTempName, $fileDestination);
                //Message after success
                echo "File Uploaded successfully";
            }else{
                //Message,If file size greater than allowed size
                echo "File Size Limit beyond acceptance";
            }
        }else{
            //Message, If there is some error
            echo "Something Went Wrong Please try again!";
        }
    }else{
        //Message,If this is not a valid file type
        echo "You can't upload this extention of file";
    }

$query = "UPDATE kegiatan set judul_kegiatan='$judul',isi_kegiatan='$isi_kegiatan', gambar='$fileName' WHERE id_kegiatan='$id_kegiatan'";
mysqli_query($koneksi, $query);
header('location:../pages/administrator.php');
?>