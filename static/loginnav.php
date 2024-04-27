<nav   class="navbar   navbar-expand-sm navbar-light " style="    background: linear-gradient(to bottom left, #006666 7%, #ffffff 100%) ;     
">
     <div class="container">
    <div class="container-fluid">
 <div class="imageh1">
 <a href="index.php"> <img id="ldcimg" src="images/OIP.jpeg" alt="" > 
</a>
<h1><b id="college">LDC Institue of Technology</b> </h1>
 </div>
       
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li id="scrollspyHeading1" class="nav-item">    
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          
           
           
           
       
    <li class="nav-item">
      <a class="nav-link " aria-current="page" href="courses2.php"> Courses</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " aria-current="page" href="payment.php">Payment Stutus</a>
    </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href=" "><?php echo $_SESSION['auth_user']['username'] ?></a></li>
            <!-- <li><a class="dropdown-item" href="#">B.tech 2 year</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">B.tech 3 year</a></li>
            <li><a class="dropdown-item" href="#">B.tech 4 year</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">MCA</a></li>
            <li><a class="dropdown-item" href="#">Diplopma</a></li> -->
          </ul>
        </li>
    

  

    <li class="nav-item">
      <a class="nav-link " aria-current="page" href="in">Feedback</a>
    </li>

    <li class="nav-item">
      <a class="nav-link " aria-current="page" href="">Contact </a>
    </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Students Details
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="NiceAdmin/pages-login.php">B.tech 1 year</a></li>
            <li><a class="dropdown-item" href="#">B.tech 2 year</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">B.tech 3 year</a></li>
            <li><a class="dropdown-item" href="#">B.tech 4 year</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">MCA</a></li>
            <li><a class="dropdown-item" href="#">Diplopma</a></li>
          </ul>
        </li>
        <?php if (isset ($_SESSION['authentication'])) { ?>
          <li class="nav-item">
      <a href="logout.php" b class="nav-link btn btn-danger" aria-current="page"  >Logout </a>
    </li> 
    <?php } ?>
        
      </ul>
      </div>
    </div>
  </nav>