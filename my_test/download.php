<?php 
$server ="localhost";
$username ="root";
$password ="";
$database ="god";

$conn =mysqli_connect($server,$username,$password,$database);
if(!empty($_GET['file'])){ 
    // Define file name and path 
    $fileName = basename($_GET['file']); 
    $filePath = 'files/'.$fileName; 
 
    if(!empty($fileName) && file_exists($filePath)){ 
        // Define headers 
        header("Cache-Control: public"); 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$fileName"); 
        header("Content-Type: application/zip"); 
        header("Content-Transfer-Encoding: binary"); 
         
        // Read the file 
        readfile($filePath); 
        exit; 
    }else{ 
        echo 'The file does not exist.'; 
    } 
} 
?>