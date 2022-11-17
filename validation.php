<?php
// This page requires that the users should submit the form first
// Validation 1: Check if form submitted cookie doesn't exist
if (!isset($_COOKIE["form_submitted"])) {
  // Redirect to home page
  header('Location: index.php');
  exit();
}
// Validation 2: Check if form has not been submitted yet
if ($_COOKIE["form_submitted"] != "true") {
  // Redirect to home page
  header('Location: index.php');
  exit();
}

include("filesLogic.php");
?>

<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>

        <link
          href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
          rel="stylesheet" />
          
        <link rel="stylesheet" href="style.css" />
        <title>CSRLS | validation</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">  

      </head>
      <body>


      	 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand"><img src="img/pmo_logo.png" class="rounded-circle" ></a>

        <a href="index.php" class="navbar-brand">CSRLS</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Latest News</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Questions</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Staff Profile</a>
            </li>
            <li class="nav-item">
              <a href="resources/ApplicationForm_csrls_New.docx" class="nav-link">Download Form</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>


  <?php echo $GLOBALS["upload_message"]; ?>

 <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>

 <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>

 <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>

       <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div class="d-flex align-items-center justify-content-center ">
      		<pre><a href="uploads.php" class="btn btn-primary">click here to try again</a>   <a href="index.php" class="btn btn-primary">Exit</a></pre>
      		
      	</div>
      </section>


       <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>

       <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>

       <!-- <section class="p-5 p-lg-0 pt-lg-5 ">
      	<div>
      		
      		
      	</div>
      </section>-->





             <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2022 Personnel Management Office, CSRLS</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
       <div>
        <p>
          <a href="https://twitter.com/PersonnelGambia"><i class="bi bi-twitter text-light mx-1"></i></a>
          <a href="https://www.facebook.com/Personnel-Management-Office-The-Gambia-100788028685067"><i class="bi bi-facebook text-light mx-1"></i></a>
          
        </p>
      </div>
    </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

  </body>
</html>

