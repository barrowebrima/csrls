

<?php include 'filesLogic.php';
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
        <title>CSRLS | Document upload</title>
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

    <!-- Showcase -->
    <section
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1><span class="text-warning">Upload document</span></h1>
            <p class="lead my-4">
              we believe you have successfully filled the application form, now it's time to upload the required documents
            </p>
           
            <!-- <button 
              class="btn btn-primary btn-lg"
              data-bs-toggle="modal"
              data-bs-target="#enroll"
            >
              Upload document
            </button>-->
          </div>
          <img
            class="img-fluid w-50 d-none d-sm-block"
            src="img/upload.svg"
            alt=""
          />
        </div>
      </div>
    </section>

    <section class="p-5">
       <div class="container">
            <p class="lead">Instructions for document upload</p>
            <p> Merge the following documents into a single pdf file not exceeding 5MB</p>
            <ul><li>Filled application form</li>
              <li>Title Deed</li>
              <li>Bill of Sale</li>
            </ul>
             <form  class="form-group col-md-6" action="validation.php" method="post" enctype="multipart/form-data"  >
          <label class="col-form-label">Name the file with your name and employement number e.g fatou_117766</label>
          <input type="file" name="myfile" class="form-control"> <br>
          <button type="submit" class="btn btn-primary" name="save">upload document</button>
        </form>
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
            <p class="lead">Fill out this form and we will get back to you</p>
             <form action="uploads.php" method="post" enctype="multipart/form-data" >
          <label class="col-form-label">Upload File</label>
          <input type="file" name="myfile"class="form-control"> <br>
          <button type="submit" name="save">upload</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

  </body>
</html>

