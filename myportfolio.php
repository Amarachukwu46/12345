<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/port.css">
    <style>
     
    </style>
  
</head>
<body data-bs-theme="dark">
     <!-- nav -->
  <nav class="navbar navbar-expand-lg nav1">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/img 1.png" alt="img" width="50"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="me-auto"></div>
        <ul class="navbar-nav text-center">
          <li class="nav-item text-sm-center">
            <a class="nav-link" href="myportfolio.php" style="margin-right: 20;">Portfolio</a>
          </li>
        </ul>
      </div>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked onclick="myfunction()">
        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
        </div>
    </div>
  </nav>
  
  <!-- close nav -->
 <!-- section1 -->


 <section class="main py-5">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-6 py-5">
          <h3><small>Hello, I'm</small> <br> Maya</h3>
          <h6>Web Designer</h6>
      </div>
    </div>
  </div>
 </section>
 <!-- closeSection1 -->
 
 <!-- section2 -->

    <section class="about py-5"  > 
      <div class="text-center display-6">My Portfolio</div>
      <div class="container-lg py-5">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-sm-12">
            <img src="img/IMG_1360.JPG" class="img-fluid" alt="">
          </div>
         <div class="col-lg-7 pt-4">
            <div class="card border-1" id="card">
              <div class="card-header text-center text-primary fw-bold ">About me</div>
              <div class="card-body text-center">
                <p class="card-tittle">WEB DESIGNER & A STUDENT</p>
                <p class="lead"> <span class="fw-bold">Name:</span> Ilomuanya Amarachi Sonia</p>
                <p class="lead"> <span class="fw-bold">Contact:</span> 07032761536</p>
                <p class="lead"> <span class="fw-bold">Email:</span> Ilomuanya@gmail.com</p>
                <p class="lead"> <span class="fw-bold">Nationality/state:</span> Imo state, Nigeria</p>
              </div>
            </div>
            <div class="text-center fw-bold py-3 display-6">Progress Bar</div>
            <div class="g-4">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 95%">HTML</div>
                </div>

                <div class="py-3">
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 85%">CSS</div>
                </div>
                </div>

               <div class="pb-3">
               <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 60%">JAVASCRIPT</div>
                </div>
               </div>

                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 30%">PHP</div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>

   <?php
   include "footer2.php";
   ?>
</body>
</html>