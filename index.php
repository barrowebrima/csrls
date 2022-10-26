<?php 
include 'db.php';        
if(isset($_POST['t1']))
    {
    $fn=$_POST['p1'];           
    $ln=$_POST['p2'];           
    $g=$_POST['p3'];            
    $e=$_POST['p4'];
    $p=$_POST['p5'];
    $dob=$_POST['p6'];
    $lt=$_POST['p7'];
    $la=$_POST['p8'];
    $mda=$_POST['p9'];
    $d=$_POST['p10'];
    $c=$_POST['p11'];
    $en=$_POST['p12'];
    $cmd="insert into loan_applicants (FirstName, Lastname, Gender, Email, Phone, DOB, LoanType, LoanAmount, MDA, Designation, Confirmation, EmployeeNumber) values('$fn','$ln','$g','$e','$p','$dob','$lt','$la','$mda','$d','$c','$en')";

    if(mysqli_query($conn, $cmd))
    {
      header('Location: uploads.php');
      exit();
    }
    else{
      $error = mysqli_error($conn);
      echo "<div class=\"toast show position-fixed top-0 end-0 m-3\" style=\"z-index:2000\" role=\"alert\">
        <div class=\"toast-header\">
          <strong class=\"me-auto\">Error</strong>
        </div>
        <div class=\"toast-body\">$error</div>
      </div>
      ";
    }
     mysqli_close($conn);         
}
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
        <title>Civil Service Revolving Loan Scheme | Home</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">  

      </head>
      <body>
        <?php
      //include("uploads.php");
      //include("db.php");
      ?>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
          <div class="container">
            <a href="#" class="navbar-brand"><img src="img/pmo_logo.png" class="rounded-circle" ></a>

            <a href="#" class="navbar-brand">CSRLS</a>

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
                  <a href="#news" class="nav-link">Latest News</a>
                </li>
                <li class="nav-item">
                  <a href="#questions" class="nav-link">Questions</a>
                </li>
                <li class="nav-item">
                  <a href="#instructors" class="nav-link">Staff Profile</a>
                </li>
                <li class="nav-item">
                  <a href="resources/ApplicationForm_csrls_New.docx" class="nav-link">Download Form</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Showcase -->
        <section
          class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
        >
          <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
              <div>
                <h1><span class="text-warning">Civil Service Revolving Loan Scheme</span></h1>
                <p class="lead my-4">
                  We focus on attracting and retaining skilled and qualified professionals
                  and technical people in the civil service
                </p>
                <button
                  class="btn btn-primary btn-lg"
                  data-bs-toggle="modal"
                  data-bs-target="#enroll"
                >
                  Apply Loan
                </button>
              </div>
              <img
                class="img-fluid w-50 d-none d-sm-block"
                src="img/showcase.svg"
                alt=""
              />
            </div>
          </div>
        </section>

        <!-- Newsletter -->
        <!-- <section class="bg-primary text-light p-5"> -->
          <!-- <div class="container"> 
            <div class="d-md-flex justify-content-between align-items-center">
              <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

              <div class="input-group news-input">
                <input type="text" class="form-control" placeholder="Enter Email" />
                <button class="btn btn-dark btn-lg" type="button">Submit</button>
              </div>
            </div>
          </div>
        <!-- </section> -->

        <!-- Boxes -->
        <section class="p-5">
          <div class="container">
            <div class="row text-center g-4">
              <div class="col-md">
                <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                    <div class="h1 mb-3">
                      <i class="bi bi-person-square"></i>
                    </div>
                    <h3 class="card-title mb-3">Personal Loan</h3>
                    <p class="card-text">
                      Will help address pressing personal and family issues.
                    </p>
                    <a href="#questions" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                    <div class="h1 mb-3">
                      <i class="bi bi-house"></i>
                    </div>
                    <h3 class="card-title mb-3">Housing Loan</h3>
                    <p class="card-text">
                      To give a boost to your accomodation and housing projects.

                    </p>
                    <a href="#questions" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                    <div class="h1 mb-3">
                      <i class="bi bi-car-front"></i>
                    </div>
                    <h3 class="card-title mb-3">Car Loan</h3>
                    <p class="card-text">
                      Enables you to travel to and fro to work with ease.
                    </p>
                    <a href="#questions" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

       

        <!-- News Section -->

        

         <!-- testing -->
         <section id="news" class="p-5">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-md">
                <img src="img/fundamentals.svg" class="img-fluid" alt="" />
              </div>
              <div class="col-md p-5">

           <h2>Loan scheme disburses over D4 million</h2>
            <p class="lead">
           Over D4 Million Loan Scheme Disburses To 52 Beneficiary Personnel
           </p>
          <p>The Director, Finance Administration and Revolving Loan Scheme at the Personnel Management Office (PMO) has revealed that despite its limited funds, the Civil Service Revolving Loan Scheme (CSRLS) in 2022 has managed to disburse D4, 830,000 to 52 personnel loan beneficiaries within various Ministries and Departments across the Civil Service<span id="dots">...</span><span id="more"> Mr. Baboucarr Sarr made disclosed this noting that these beneficiaries are qualified loan applicants, whose applications were approved by the CSRLS Board.<br>
           In addition, he added, the scheme has managed to disburse D6,500,000 to 14 car loan beneficiaries from various Ministries and Departments across the Civil Service.<br>
            “We are currently disbursing D2, 000,000 to 4 Housing Loan beneficiaries from various Ministries and Departments across the Civil Service. The CSRLS has been endeavoring in meeting its main function of providing and effectively managing the car, housing, and personal loans to eligible civil servants since its inception in 2014,” Mr. Sarr explained.
            According to Mr. Sarr, the total number of loan applications annually fluctuates, adding that this year i.e. 2022, the Secretariat received a total number of 83 applications through the Records Office.<br>
            He said this number (83 applications) is one of the lowest compared to previous years while informing that in 2021, 317 applications were received by the Secretariat and in 2020, 305 applications were received.<br>

            He described the impact of the Loan Scheme within the Civil Service as very positive, adding that the Loan Scheme contributed tremendously to the lives of civil servants in terms of improving their quality of life and social status.
            “Many civil servants are now able to have cars of their own and build houses ranging from bungalows to storey buildings. The loan we give may not be able to complete their entire building as some people argue, but it could help you go very far,” he said.<br>
            As we speak he explained, 1,207 civil servants benefited from the Personal Loan of the Loan Scheme, 200 civil servants benefited from the Car Loan, and 140 benefited from the Housing loan, he noted.</span></p>

  <a class="btn btn-light mt-3" role="button" onclick="myFunction()" id="myBtn"><i class="bi bi-chevron-right"></i>Read more</a>

  <script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>

  </div>
  </div>
  </div>
 </section>

        <section id="learn" class="p-5 bg-dark text-light">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-md p-5">
                <h2>Benefits</h2>
                <p class="lead">
                   The impact of the Loan Scheme within the Civil Service is very positive, the Loan Scheme contributed tremendously to the lives of civil servants in terms of improving their quality of life and social status
                </p>
                <p>
                  As of now 1,207 civil servants benefited from the Personal Loan of the Loan Scheme, 200 civil servants benefited from the Car Loan, and 140 benefited from the Housing loan.
                </p>
                <a href="#" class="btn btn-light mt-3">
                  <i class="bi bi-chevron-right"></i> Read More
                </a>
              </div>
              <div class="col-md">
                <img src="img/react.svg" class="img-fluid" alt="" />
              </div>
            </div>
          </div>
        </section>

        <!-- Question Accordion -->
        <section id="questions" class="p-5">
          <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-one"
                  >
                    Where exactly are you located?
                  </button>
                </h2>
                <div
                  id="question-one"
                  class="accordion-collapse collapse"
                  data-bs-parent="#questions"
                >
                  <div class="accordion-body">
                    <p>Personnel Management Office</p>
                    <p>New Administrative Building, The Quadrangle</p>
                    <p>Banjul, The Gambia</p>
                  </div>
                </div>
              </div>
              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-two"
                  >
                    Who is eligible to apply a personal loan?
                  </button>
                </h2>
                <div
                  id="question-two"
                  class="accordion-collapse collapse"
                  data-bs-parent="#questions"
                >
                  <div class="accordion-body">
                    <p>(i) may be granted to civil servants on Grade 1 and above</p>
                    <p>(ii) shall not exceed one hundred thousand dalasis (100,000)</p>
                    <p>(iii) shall be used to meet pressing family or personal needs</p>
                    <p>(iv) shall attract interest at the rate of two percent (2%) over a repayment period not exceeding five (5) years</p>
                  </div>
                </div>
              </div>
              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-three"
                  >
                    Who is eligible to apply car loan?
                  </button>
                </h2>
                <div
                  id="question-three"
                  class="accordion-collapse collapse"
                  data-bs-parent="#questions"
                >
                  <div class="accordion-body">
                    <p>(i) may be granted to civil servants on Grade 10 and above</p>
                    <p>(ii) shall not exceed fifty percent (50%) of ten (10) years current net salary of the applicant</p>
                    <p>(iii) shall not exceed seven hundred and fifty thousand dalasis (D750,000)</p>
                    <p>(iv) the Government shall, subject to Rule 15 (18), underwrite fifty percent of the loan and the fifty percent shall be repaid by the borrower at the rate of five percent (5%) interest per annum, over a period not exceeding ten years.</p>
                  </div>
                </div>
              </div>
              <!-- Item 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-four"
                  >
                    Who is eligible to apply a housing loan?
                  </button>
                </h2>
                <div
                  id="question-four"
                  class="accordion-collapse collapse"
                  data-bs-parent="#questions"
                >
                  <div class="accordion-body">
                    <p>(i) may be granted to civil servants on Grade 1 and above</p>
                    <p>(ii) shall not exceed fifty percent (50%) of ten years current net salary of the applicant</p>
                    <p>(iii) shall not exceed one million dalasis (D1,000,000)</p>
                    <p>(iv) is repayable at one percent (1%) interest per annum over a maximum repayment period of twenty (20) years</p>
                  </div>
                </div>
              </div>
              <!-- Item 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#question-five"
                  >
                    How do i repay the loan?
                  </button>
                </h2>
                <div
                  id="question-five"
                  class="accordion-collapse collapse"
                  data-bs-parent="#questions"
                >
                  <div class="accordion-body">
                    <p>(1) A beneficiary of a loan shall repay the loan and interest on the loan by monthly deductions from his or her salary</p>
                    <p>(2) Deductions from the salary of a borrower shall be paid directly to the Civil Service Revolving Loan Scheme's bank account</p>
                    <p>(3) The monthly deductions in respect of both the principal loan and interest shall not exceed fifty (50%) percent of the borrrower's net monthly salary</p>
                    <p>(4) The borrower shall commence repayment of the principal and interest in the month following the first disbursement</p>
                    <p>(5) If any borrower fails or neglects to pay any sum due and payable, the Board shall on behalf of the Government institute legal proceedings to recover the loan or enforce any security for the loan given by the borrower</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="instructors" class="p-5 bg-primary">
          <div class="container">
            <h2 class="text-center text-white">Our Staff</h2>
            <p class="lead text-center text-white mb-5">
              Our staff have adequate work experience and are ready to serve you
            </p>
            <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <img
                      src="img/bsarr.jpg"
                      class="rounded-circle mb-3"
                      alt=""
                    />
                    <h4 class="card-title mb-3">Mr. Baboucarr Sarr</h4>
                    <p class="card-text">
                      Director CSRLS
                    </p>
                    
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <img
                      src="img/sompo.png"
                      class="rounded-circle mb-3"
                      alt=""
                    />
                    <h4 class="card-title mb-3">Ms. Mariam Sompo</h4>
                    <p class="card-text">
                      Senior Asst. secretary
                    </p>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <img
                      src="img/lsaidy.jpg"
                      class="rounded-circle mb-3"
                      alt=""
                    />
                    <h4 class="card-title mb-3">Mr. Lamin Saidy</h4>
                    <p class="card-text">
                      Director HRDD
                    </p>
                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <img
                      src="img/sjallow.jpg"
                      class="rounded-circle mb-3"
                      alt=""
                    />
                    <h4 class="card-title mb-3">Mr. Sheriff Jallow</h4>
                    <p class="card-text">
                      Director CSRPU
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Contact & Map -->
        <section class="p-5">
          <div class="container">
            <div class="row g-4">
              <div class="col-md">
                <h2 class="text-center mb-4">Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                  <li class="list-group-item">
                    <span class="fw-bold">Main Location:</span> Personnel Management Office, 
                    New Administrative Building,The Quadrangle, Banjul, The Gambia
                  </li>
                  <li class="list-group-item">
                    <span class="fw-bold">Office Phone:</span> (220) 4224142
                  </li>
                  
                  <li class="list-group-item">
                    <span class="fw-bold">Email:</span>
                    pmo@pmo.gov.gm
                  </li>
                  <li class="list-group-item">
                    <span class="fw-bold">Website:</span>
                    csrls.gov.gm
                  </li>
                </ul>
              </div>
              <div class="col-md">
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8222.201745875456!2d-16.576731343790865!3d13.45174374005883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec29d8abd4bf1d5%3A0x45c36cfab4f5e2ea!2sPersonnel%20Management%20Office!5e0!3m2!1sen!2sin!4v1658835795846!5m2!1sen!2sin"  class="w-100" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
              </div>
            </div>
          </div>
        </section>

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

        <!-- Modal -->
        <div
          class="modal fade"
          id="enroll"
          tabindex="-1"
          aria-labelledby="enrollLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="enrollLabel">Loan Application Form</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <p class="text-danger">All the fields are mandatory</p>
                <form action="index.php" method="post">
                  <div class="mb-3">
                    <label for="first-name" class="col-form-label">
                      * First Name:
                    </label>
                    <input name="p1" type="text" required="required" class="form-control" id="first-name" />
                  </div>
                  <div class="mb-3">
                    <label for="last-name" class="col-form-label">* Last Name:</label>
                    <input name="p2" type="text" required="required" class="form-control" id="last-name" />
                  </div>
                  <div class="mb-3">
                    <label for="gender" class="col-form-label">* Gender:</label>
                    <input name="p3" type="radio"  id="male"  value="Male" />
                     <label for="male">Male</label>
                    <input  name="p3" type="radio"  id="female" value="Female" />
                     <label for="female">Female</label>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="col-form-label">* Email:</label>
                    <input name="p4" type="email" required="required" class="form-control" id="email" />
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="col-form-label">* Phone:</label>
                    <input name="p5" type="tel" required="required" class="form-control" id="phone" />
                  </div>
                  <div class="mb-3">
                    <label for="dob" class="col-form-label">* DOB:</label>
                    <input name="p6" type="date" required="required" class="form-control" id="phone" />
                  </div>
                  
                  <div class="mb-3">
                    <label for="loantype" class="col-form-label">* Loan Type:</label>
                    <select name="p7" type="text" required="required" id="loan" >
                      <option value="personal">Personal</option>
                      <option value="housing">Housing</option>
                      <option value="car">Car</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="loanamount" class="col-form-label">* Loan Amount:</label>
                    <input name="p8" type="number" required="required" class="form-control" id="amount" />
                  </div>
                  <div class="mb-3">
                    <label for="mda" class="col-form-label">* Ministry/Department/Agency:</label>
                    <input name="p9" type="text" required="required" class="form-control" id="mda" />
                  </div>
                  <div class="mb-3">
                    <label for="designation" class="col-form-label">* Designation:</label>
                    <input name="p10" type="text" required="required" class="form-control" id="postion" />
                  </div>
                  <div class="mb-3">
                    <label for="confirmation" class="col-form-label">* Confirmation:</label>
                    <input name="p11" type="radio"  id="yes"  value="Yes" />
                     <label for="yes">Yes</label>
                    <input name="p11" type="radio"  id="no"  value="No" />
                     <label for="no">No</label>
                  </div>
                   <div class="mb-3">
                    <label for="payroll" class="col-form-label">* Employee Number:</label>
                    <input name="p12" type="text" required="required" class="form-control" id="payroll" />
                  </div>
                
                 <div>
                   <input type="submit" class="btn btn-primary" name="t1" value="Submit">
                 </div>
                </form>
                
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <!-- <button name=t1 type="submit" class="btn btn-primary">Submit</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

       <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>


        <script>

          /*mapboxgl.accessToken =
            'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
          var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-71.060982, 42.35725],
            zoom: 18,
          })*/
        </script>

      </body>
    </html>
