<?php
session_start();
if(isset($_SESSION['authentication'])){
  echo "<script>setTimeout(()=>{window.location.href ='login.php'},0)</script>"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LDC Institue of Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/9be339f98c.js" crossorigin="anonymous"></script>
      
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="style.css">
     
       
    
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
</head>
<body>
  
 
<?php
 include('./static/navbar.php')
  ?> 
  <?php
  include "connection.php";
  $query = "SELECT * FROM carsoler";
  $result = mysqli_query($conn , $query);
  
  ?> 
 <div class="container-fluid">
  <div class="row ">
    <div class="col-md-12">
     
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          
          <img id="op2A9583"src="./images/_DSC2271.JPG" alt="...">
           
        </div>
        <?php
        while ($row = mysqli_fetch_array($result)){
      ?>
           <div class="carousel-item" data-bs-interval="10000">
          
          <img id="op2A9583"src="./NiceAdmin/image/<?php echo $row['images'];?>" alt="...">
           
        </div>
          <?php }?>
        </div>
         
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
 </div>
 

<div class="container">
  <div class="row my-3">
    <div class="col-md-6 text-center p-2">
      <img class="img-fluid mx-auto" src="https://educlever.beplusthemes.com/university/wp-content/uploads/2019/05/forma1.png" alt="">
      <h5 class="mt-3">
        Start online Inverstment on your Business
      </h5>
      <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper lebero, sit amet adipiscing sem neque sed ipsum with this albeit. Maecenas tempus, tellus eget condimentum rhoncus,sem quam semper libero, sit amet adipiscing.</p>

    </div>
    <div class="col-md-6 text-center">
       
      <img style="height: 400px;"  class="img-fluid" src="images/WhatsApp Image 2023-12-27 at 22.02.51.jpeg" alt="">

    </div>
  
  </div>
</div>

  

 <div class="container">
  <div class="row my-3">
    <div class="col-md-12 p-3 px-3">
       
      <div class="card-group">
        <div class="card ">
                
                 <img src="https://cdn.pixabay.com/photo/2015/06/22/08/37/children-817365__340.jpg" class="card-img-top " alt="...">
              
                <div class="card-body h ">
                  <h5 class="card-title">Card title</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
             </div>
            <div class="card  ">
              <img src="https://cdn.pixabay.com/photo/2015/01/08/18/24/children-593313_960_720.jpg" class="card-img-top " alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card  ">
              <img src="https://cdn.pixabay.com/photo/2016/01/19/17/22/children-1149671__340.jpg" class="card-img-top  " alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>

<div class="container">
  <div class="row my-3">
    <div class="col-md-12 text-center p-3">
      <h1 style="color: brown;"><b> OUR EXPERIENCED STAFF</b></h1>
      <P>Films can shape the destiny of talented youngesters, course</P>
      <img  sr alt="">
    </div>
  </div>
</div>

<div class="container">

  <div class="col-md-12 p-2">
    
      <div class="row my-3 row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img id="imgsize" class="h-100" src="images/chairman_img.jpeg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
                  <h4 class="card-title">Chairman</h4>
                  <p class="card-text">Instructor</p> 
              
                
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-google"></i>
                  <i class="fa-brands fa-twitter"></i>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img  class="h-100" src="images/director.jpeg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <h4 class="card-title">Director</h4>
              <p class="card-text">HEAD DEPARTMENT</p>
              
            
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-twitter"></i>
             
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img  class="h-100" src="https://cdn.pixabay.com/photo/2016/11/29/01/34/man-1866574__340.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <h5 class="card-title">JOHN DEO</h5>
              <p class="card-text">Professor</p>
              
              
                
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-twitter"></i>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img class="h-100" src="images/1.png " alt="...">
            <div class="card-body text-center">
              
                <h5 class="card-title">ADEN HEZARD</h5>
                <p class="card-text">HEAD DEPARTMENT</p>
                
                
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-google"></i>
                  <i class="fa-brands fa-twitter"></i>
                  
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
  </div>
</div>
</div>




<div class="w3-container">
  <div class="container">
      <div class="row my-3">
          <div class="col-md-12 text-center p-2">
              <button onclick="myFunction('Demo1')" class="w3-button text-center " style="color: blue;"> <h1><b>  Recent Events </b></h1></button>
              <p>
                Film can shape the destiny of talent youngster, Courses.

              </p>
              <img src="./image/seprater.png" alt="">
              <div id="Demo1" class="w3-hide w3-container">
                  <div class="container">
<div class="row my-3">
  <div class="col-md-12 p-2">
     <div class="row row-cols-1 row-cols-md-3 ">
        <div class="col">
          <div class="card h-100">
            <img h-100 src="https://media.istockphoto.com/photos/excited-little-funny-african-girl-running-exploring-big-modern-house-picture-id1126384427?s=612x612" class="card-img-top " alt="...">
            <div class="card-body">
              <p class="p">29 march</p>
              <h5 class="card-title">Light Box Paper Cut Dioramas</h5>
              <p class="card-text"> 9:00-18:00 <b>By KENY WHITE</b><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nostrum optio officia ipsam autem necessitatibus rem eligendi earum architecto sunt! Provident aut sequi minima voluptas doloribus consequuntur quae unde omnis.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img h-100 src="https://media.istockphoto.com/photos/girl-hands-opening-an-envelope-on-a-desk-at-home-picture-id1217019016?s=612x612" class="card-img-top " alt="...">
            <div class="card-body">
              <p class="p">29 march</p>
              <h5 class="card-title">Build Education Website</h5>
            
              <p class="card-text">8.00-17:00 <b>BY KENY WHITE</b> <br> This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 ">
            <img h-100 src="https://media.istockphoto.com/photos/girl-hands-opening-an-envelope-on-a-desk-at-home-picture-id1217019016?s=612x612" class="card-img-top " alt="...">
            <p class="p">29 march</p>
            <div class="card-body">
              <h5 class="card-title">Eshkool study Tour 2019</h5>
              <p class="card-text">       8:00-19:00  <b>BY KENY WHITE</b> <BR></BR> This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
  </div>
</div>
</div>
              </div>
              
               
              </div>
          </div>
      </div>
  </div>
   
  
  
  </div>
   


<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
     

      <button> <a href="">MORE EVENTS </a></button>
    
    </div>
  </div>
</div> <br> <br>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      

        <div>
          
          <div class="card bg-dark text-white ">
            <img src="images/1.png " class="card-img" alt="...">
            <div class="card-img-overlay">
              
                
                  <!-- <div class="row">
                    <div class="col-md-12">

                      <h3>FREE TRAIL FOR 2 MONTHS</h3>
                      <h1 class="card-title">WEB DESIGN & PROGRAMMING</h1>
                      <button>JOIN FOR FREE</button>
                    </div>
                  </div> -->
                 
               
             </div>
           </div>
         </div>
       </div>
        
       <div>
    </div>
  </div>
</div>

 <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModal1Label">Student Register</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="myform" >
        <div class="mb-3">
        <i class="fas fa-user" ></i><label for="exampleInputname" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputname" name="name" >
     
  <div class="mb-3">
   <i class="fas fa-envelope"></i> <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
   <i class="fas fa-key"></i><label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <select id="select" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option  >Student</option>
  <option  >Teacher</option>
</select>
</form>
      </div>
      <div class="modal-footer">
        <button type="button"   id="submit" data-bs-dismiss="modal"  >Sign up</button>
         
      </div>
    </div>
  </div>
    </div>
  </div>
 </div>
</div>
 
<script>
   $(document).ready(function(){
    $('#submit').on("click",function(e){  
      e.preventDefault(); 
      var name = $('#exampleInputname').val();
      var email = $('#exampleInputEmail1').val();
      var password = $('#exampleInputPassword1').val();
      var select = $('#select').val();
      alert(select);
      
      $.ajax({
        url: "server.php",
        type: "post",
        data: {name: name, email: email, password: password, select: select},
        success: function(data){
           
        alert("signup");
        $('#myform').trigger('reset');
      
    }
      });
    });
   });
</script>


<?php
 include('./static/popular.php')
 ?>
<!-- contact page start -->
<?php

include('./static/contact.php')
?>

<!-- contact page end -->



 
   


 <div class="container">
  <div class="row my-3">
    <div class="col-md-12 p-3">
    <nav id="navbar-example2" class="navbar navbar-dark bg-dark px-3">
     
     <ul class="nav nav-pills"> 
      <li><i class="fa-regular fa-copyright"></i> All Right reserved 2022 <a class="navbar-brand" href="#scrollspyHeading1"> <mark>LDC INSTITUTE OF TECHNOLOGY OF STUDIES</mark>  -</a>Tursted <a class="navbar-brand" href="#"><mark>Wimgo</mark></a></li>
     </ul>   
   </nav>
     <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
  
  
     </div>
    </div>
  </div>
 </div>

<!-- Student Login start -->

 <!-- Modal -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="server2.php" method="post" autocomplete="off">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" name="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" name="login-btn" class="btn btn-primary">Submit</button>
                    </form>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal z-->
 
<!-- Student login end -->

 

 
   <!-- java script -->
   <script src="js/ajax.js"></script>
 
   </script>
     
     <script>
      var slideIndex = 1;
      showDivs(slideIndex);
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function currentDiv(n) {
        showDivs(slideIndex = n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-red", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-red";
      }
      </script>
      <script>
        function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className = 
            x.previousElementSibling.className.replace("w3-black", "w3-red");
          } else { 
            x.className = x.className.replace(" w3-show", "");
            x.previousElementSibling.className = 
            x.previousElementSibling.className.replace("w3-red", "w3-black");
          }
        }
        </script>

    </body>
</html>