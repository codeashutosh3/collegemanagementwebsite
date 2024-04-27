<?php
include "../connection.php";
if(isset($_GET['id'])){
    $userid = $_GET['id'];
 $query = "SELECT * FROM carsoler WHERE id= $userid ";

 $result = mysqli_query($conn , $query);
 $row = mysqli_fetch_assoc($result);
//  print_r($row);
}
 
if(isset($_POST['btn-update'])){
    $id = $_POST['id'];
    $file_name = $_FILES['imgs']['name'];
    $temp_name = $_FILES['imgs']['tmp_name'];
    $path = "./image/".$file_name;
    if(move_uploaded_file($temp_name, $path)){
        $query = "UPDATE carsoler SET images ='$file_name' WHERE id = $id";
        $result = mysqli_query($conn , $query);
        if($result == 1){
            echo "<script>alert('image successfully')</script>";
            echo "<script>setTimeout(()=>{window.location.href='tables-data.php'},0)</script>";
        }else{
            echo "<script>alert('somethings error')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="edit.php" method="post" enctype="multipart/form-data" >
    <div>
             <input type="file" name="imgs">
             </div>
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <div>
            <button type="Submit" name="btn-update" >Update</button>
        </div>
    </form>
            </div>
        </div>
    </div>
</body>
</html>