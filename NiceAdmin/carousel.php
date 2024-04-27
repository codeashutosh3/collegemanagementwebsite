<?php
 include "../connection.php";
if(isset($_POST['submit'])){
    $file_name = $_FILES['imgs']['name'];
    $temp_name = $_FILES['imgs']['tmp_name'];
    $path = "./image/".$file_name;
    if(move_uploaded_file($temp_name, $path)){
        $query = "INSERT INTO carsoler (images) VALUES ('$file_name') ";
        $result = mysqli_query($conn , $query);
        if($result == 1){
            echo "<script>alert('image successfully')</script>";
            echo "<script>setTimeout(()=>{window.location.href='forms-elements.php'},0)</script>";
        }else{
            echo "<script>alert('somethings error')</script>";
        }
    }
}
?>