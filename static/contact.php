<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password ="";
$con = mysqli_connect($server, $username, $password);
 
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
$name =$_POST['name'];
$age =$_POST['age'];
$address =$_POST['address'];
$phone =$_POST['phone'];
$email =$_POST['email'];
 $sql ="INSERT INTO `ashutoshdatabase`.`ashutosh` ( `name`, `age`, `address`, `phone`, `email`, `dt`) VALUES (  '$name', '$age', '$address', '$phone', '$email', current_timestamp());";
  
if ($con->query($sql) == true) {
    echo " ";
} 
else {
    echo "Error: $sql <br> $con->error";
} 
}
?> 
 <div class="div" style="background: linear-gradient(to bottom, #336699 0%, #ccffcc 100%);">
 <h1 class="h1">CONTACT PAGE</h1>
<div class="container" style="border 2px solid red;">
    <div class="row">
        <div class="col-md-8">
        <div class="form"  >
        <form action="index.php" method="post"   >
             
            <div class="index-box">
            
             Your Name :  <input type="text" name="name" id="name" placeholder="Your Name">
                
            </div>
            <br>

            <div class="index-box">
            
              Age:  <input type="age " name="age" id="age" placeholder="Your age">
                 
            </div>
            <br>
            <div class="index-box">
             
              Address  <input type="addres" name="address" id="address" placeholder="Your address">
                
            </div>
            <br>
            <div class="index-box">
             
              Number:  <input type="phone" name="phone" placeholder="7380******" id="phone" >
                 
            </div>
            <br>
            <div class="index-box">
            
              Email:  <input type="Email" name="email" placeholder="Your Email" id="email">
                 
            </div>
            
              
        </form>
        </div>
        </div>
        <div class="col-md-4">
                <img src=" data:image/jpeg;base64,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" alt="">

        </div>
    </div>
</div>
<div class="container">
    <div class="row my-3">
        <div class="col-md-12 p-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.4559213647535!2d81.85852197539577!3d25.62298967743935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399ac800d1bf966d%3A0xcf5964f1d89b0ab4!2sLDC%20Institute%20of%20Technical%20Studies!5e0!3m2!1sen!2sin!4v1703924349180!5m2!1sen!2sin" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
</div>
 </div>