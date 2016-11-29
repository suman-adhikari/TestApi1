<?php
/**
 * Created by PhpStorm.
 * User: Suman
 * Date: 11/29/2016
 * Time: 3:58 PM
 */

?>

<?php
$filename = "colors.txt";
$target_dir = "uploads/".$filename;
$target_file = $target_dir;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if ($_FILES['fileToUpload']['type'] == 'text/plain')
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not Text File.";
        $uploadOk = 0;
    }
}
?>