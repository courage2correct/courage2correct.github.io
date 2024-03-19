<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Courage2Correct | Incident Responce
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
   <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css" rel="stylesheet" />
  <!--swalfire alert-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
      
    
  <style>
   
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 80%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .form-card {
            width: 100%;
        }

        .form-card .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }

        .form-card .card-body {
            padding: 20px;
        }

        .form-card .form-label {
            font-weight: bold;
        }

        .form-card .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .form-card .btn-primary {
            background-color: #007bff;
            border: none;
            font-weight: bold;
        }

        .form-card .btn-secondary {
            background-color: #6c757d;
            border: none;
            font-weight: bold;
        }

        .form-check-label {
            font-weight: normal;
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 5px;
        }
        
        .navbar{
        margin-bottom:auto;
      }
        #step5 {
            margin-top: auto; /* Push the step5 card to the bottom */
            margin-left: 10px;
margin-right: 10px;
        }
        .custom-tooltip {
            position: relative;
            display: inline-block;
        }

        .custom-tooltip .tooltip-text {
            visibility: hidden;
            width: 200px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -100px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .custom-tooltip .tooltip-text::after {
            content: " ";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
        }

        .custom-tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }

    </style>
</head>


<body class="g-sidenav-show overlay hero-container bg-gray-100" style=""style=" overflow-y: auto;   margin: 0; padding: 0; background-image: url('../assets/img/hero-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
  <div class="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: -1;"></div>
  <!--side nav-->

  <!--<div class="min-height-300 bg-primary position-absolute w-100"></div>-->
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" style="max-height: 3rem;" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <!--<li class="nav-item">
          <a class="nav-link" href="../index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-file-text-fill text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Report Incident</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-search text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Track Your Case</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi-person-fill text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Support</span>
          </a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link " href="./pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>-->
  </aside>
  <main class="main-content position-relative border-radius-lg ">
   

  <!--side nav end-->
  <?php include('../nav.php');?>


    <div class="container-fluid py-4 " id="formContainer" style="overflow-y: auto;">
  
    <form name="c2cform" onsubmit="return handleSubmit();" action="test3.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
        
        <div id="step1" >
    
                        <!-- Step 1 content here -->
                        <!-- Personal Details -->

<div class="row ">
        <div class="col-sm-12 col-md-12 mb-3 text-justify" style="height: 680px; overflow-y: auto;">
            <div style="height:auto;" class="card shadow reveal">
                <div style="background-color: #D5D5FF;" class="card-header">Personal Details</div>
                <div class="card-body">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                        <div class="invalid-feedback">
                            Please Enter Your Full Name.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mobileno" class="form-label">Mobile No.:</label>
                        <input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile No." name="mobileno" required>
                        <div class="invalid-feedback">
                            Please Enter Your Mobile Number.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mobileno" class="form-label">Email.:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                        <div class="invalid-feedback">
                            Please Enter Your Mobile Number.
                        </div>
                    </div>
                    <label for="evidence" class="form-label">Please share your front face image.</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="evidenceYes" name="evidence" value="yes" onclick="showEvidenceUpload()" required>Yes
                        <label class="form-check-label" for="evidenceYes"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="evidenceNo" name="evidence" value="no" onclick="hideEvidenceUpload()" checked>No
                        <label class="form-check-label" for="evidenceNo"></label>
                    </div>
                    <div id="evidenceUpload" style="display: none;">
                        <div class="mb-3 mt-3">
                            <label class="form-label">Please upload the file:</label>
                            <input class="form-control" accept=".png" type="file" name="evidenceFile">
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="imageTemplate" class="form-label custom-tooltip">
                        Please provide the image template from the video in .png format only:
                        <span class="tooltip-text">Please provide an object crop image that is static in the video for more than 30 seconds. For example: lamp, painting, etc.</span>
                    </label>
                    <input type="file" class="form-control" accept=".png"  id="imageTemplate" name="imageTemplate" required>
                </div>
                  </br>
                    <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
                </div>
            </div>
        </div>
    </div>

                    </div>

                    <div id="step2" style="display: none;">
                        <!-- Step 2 content here -->
                        <!-- Mobile Number & Evidence -->
<div class="row">
        <div class="col-sm-12 col-md-12 mb-3 text-justify">
            <div style="height:auto;" class="card shadow reveal">
                <div style="background-color: #D5D5FF;" class="card-header">Incident Details</div>
                <div class="card-body">
                    <div class="mb-3 mt-3">
                        <label for="country" class="form-label">Country:</label>
                        <input type="text" class="form-control" id="country" placeholder="Enter Your Country" name="country" required>
                        <div class="invalid-feedback">
                            Please Enter Your Country.
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="skinColor" class="form-label">Skin Color:</label>
                        <input type="text" class="form-control" id="skinColor" placeholder="Enter Your Skin Color" name="skinColor" required>
                        <div class="invalid-feedback">
                            Please Enter Your Skin Color.
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="activity" class="form-label">Kind of Activity in the Video:</label>
                        <input type="text" class="form-control" id="activity" placeholder="Enter the Activity in the Video" name="activity" required>
                        <div class="invalid-feedback">
                            Please Enter the Activity in the Video.
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="keyword" class="form-label">Keyword to Search the Video:</label>
                        <input type="text" class="form-control" id="keyword" placeholder="Enter the Keyword" name="keyword" required>
                        <div class="invalid-feedback">
                            Please Enter the Keyword.
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
                    <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Back</button>
                </div>
            </div>
        </div>
    </div>



                    </div>

                    <div id="step3" style="display: none;">
                        <!-- Step 3 content here -->
                        <!-- Country, Skin Color, Activity, Keyword -->
<div class="row">
            <div class="col-sm-12 col-md-12 mb-3 text-justify">
                <div style="height:auto;" class="card shadow reveal">
                    <div style="background-color: #D5D5FF;" class="card-header">Incident Details</div>
                    <div class="card-body">
                        <div class="mb-3 mt-3">
                            <label for="idate" class="form-label">Incident Date:</label>
                            <input type="date" class="form-control" id="idate" name="idate" required>
                            <div class="invalid-feedback">
                                Select Valid Date.
                            </div>
                        </div>
                        <div>
                            <label for="type" class="form-label">Incident Type:</label>
                            <select class="form-select" id="type" name="type" required>
                                <option class="invalid-feedback" value="" selected disabled>Select</option>
                                <option>Image Abuse</option>
                            <option>Video Viral Incident</option>
                            <option>Non-Consensual Distribution of Media</option>
                            <option>Image-Based Harassment</option>
                            <option>Video-Based Harassment</option>
                            <option>Deepfake</option>
                            <option>Revenge Pornography</option>
                            <option>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please Select Valid Incident Type.
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="other" class="form-label">Other (If not found in list above):</label>
                            <input type="text" class="form-control" id="other" value="NULL" name="othertype">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="nextStep(4)">Next</button>
                        <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Back</button>
                    </div>
                </div>
            </div>
        </div>

                    </div>

                    <div id="step4" style="display: none;">
                        <!-- Step 4 content here -->
                        <!-- Incident Details -->
<div class="row">
            <div class="col-sm-12 col-md-12 mb-3 text-justify">
                <div style="height:auto;" class="card shadow reveal">
                    <div style="background-color: #D5D5FF;" class="card-header">Incident Details</div>
                    <div class="card-body">
                        <div>
                            <label for="platform" class="form-label">Platform of Incident:</label>
                            <select class="form-select" id="platform" name="platform" required>
                                <option class="invalid-feedback" value="" selected disabled>Select</option>
                                <option>Email</option>
                                <option>WhatsApp</option>
                                <option>Telegram</option>
                                <option>Facebook</option>
                                <option>Instagram</option>
                                <option>Snapchat</option>
                                <option>Twitter</option>
                                <option>ICT Tool (MS Teams)</option>
                                <option>Website</option>
                                <option>Phone Call</option>
                                <option>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please Select Valid Platform.
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="other" class="form-label">Other (If not found in list above):</label>
                            <input type="text" class="form-control" value="NULL" id="other" name="otherplat">
                        </div>
                        <label for="platform" class="form-label">Select Platform to find the video:</label></br>
                        <input type="checkbox" class="form-check-input" id="Adult" name="find" value="Adult" checked>
                        <label class="form-check-label" for="Adult">Adult</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="sel-Social-Media" name="find" value="Social Media">
                            <label class="form-check-label" for="sel-Social-Media">Social Media</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="sel-Streaming-Platform" name="find" value="Streaming Platform">
                            <label class="form-check-label" for="sel-Streaming-Platform">Streaming Platform</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="Other" name="find" value="Other">
                           

 <label class="form-check-label" for="Other">Other</label>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="nextStep(5)">Next</button>
                        <button type="button" class="btn btn-secondary" onclick="prevStep(3)">Back</button>
                    </div>
                </div>
            </div>
        </div>
              </div>
  </div>
                    <div id="step5" style="display: none;">
                    <div id="detailsCard"class="card" id="submitButtonCard ">
                <div class="card-body">
                    
                        <!-- Step 5 content here -->
                        <!-- Checkbox & Disclaimer -->
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="certifyCheck" unchecked required onchange="enableSubmitButton()">

                            <label class="form-check-label" for="certifyCheck">I certify that the information provided by me in the above form is accurate and correct to the best of my knowledge. I understand that withholding of information or giving false information is a criminal offense and may result in legal action against me.</label>
                        </div>
                        <div class="alert mt-3">
                            DISCLAIMER: As per the prevailing laws, FIR of a major crime can only be registered at a Police Station. Please contact your nearest Police Station for the same. This site shall only entertain complaints about cybercrime ('non-cognizable crimes'). Your complaint shall be referred to the concerned Police Station if it is needed, where you may be called for further clarification and/or to give a statement.
                        </div>
                        <button type="submit" class="btn btn-primary"   id="submitButton" disabled>Submit</button>
                        <button type="button" class="btn btn-secondary" onclick="prevStep(4)">Back</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>
<!-- Add this script in the head or before the closing body tag of your HTML page -->
<script>
    let currentStep = 1;

    function showStep(step) {
        document.getElementById(`step${step}`).style.display = 'block';
    }

    function hideStep(step) {
        document.getElementById(`step${step}`).style.display = 'none';
    }

    function nextStep(nextStep) {
        hideStep(currentStep);
        showStep(nextStep);
        currentStep = nextStep;
        adjustCardHeight();
    }

    function prevStep(prevStep) {
        hideStep(currentStep);
        showStep(prevStep);
        currentStep = prevStep;
        adjustCardHeight();
    }

    function adjustCardHeight() {
        const card = document.getElementById('detailsCard');
        card.style.height = card.scrollHeight + 'px';
    }

    // Function to validate email address
    function validateEmail(emailField) {
        const email = emailField.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(email)) {
            swal('Error', 'Please enter a valid email address.', 'error');
            emailField.focus();
            return false;
        }

        return true;
    }

    // Function to validate mobile number
    function validateMobile(mobileField) {
        const mobile = mobileField.value;
        const mobileRegex = /^\d{10}$/;

        if (!mobileRegex.test(mobile)) {
            swal('Error', 'Please enter a valid 10-digit mobile number.', 'error');
            mobileField.focus();
            return false;
        }

        return true;
    }

    // Function to handle "Do you have any evidence?" input
    function handleEvidenceOption() {
        const evidenceInput = document.querySelector('input[name="evidence"]:checked');
        const evidenceUpload = document.getElementById('evidenceUpload');

        if (!evidenceInput) {
            swal('Error', 'Please select whether you have evidence or not.', 'error');
            return false;
        }

        if (evidenceInput.value === 'yes') {
            showEvidenceUpload();
            // Validate file extension for evidenceFile
            const evidenceFileInput = document.getElementById('evidenceFile');
            if (!validateFileExtension(evidenceFileInput)) {
                return false;
            }
        } else {
            hideEvidenceUpload();
        }

        return true;
    }

    // Function to show evidence file upload field
    function showEvidenceUpload() {
        document.getElementById('evidenceUpload').style.display = 'block';
    }

    // Function to hide evidence file upload field
    function hideEvidenceUpload() {
        document.getElementById('evidenceUpload').style.display = 'none';
    }

    // Function to validate file extension for PNG
    function validateFileExtension(fileInput) {
        const allowedExtension = 'image/png';
        const file = fileInput.files[0];

        if (file.type !== allowedExtension) {
            swal('Error', 'Please upload a PNG file.', 'error');
            fileInput.value = ''; // Reset the file input to clear the selected file
            return false;
        }

        return true;
    }

    // Function to handle form submission
    function handleSubmit() {
        // Validate required fields
        const requiredFields = document.getElementById(`step${currentStep}`).querySelectorAll("[required]");
        for (const field of requiredFields) {
            if (!field.value.trim()) {
                swal('Error', 'Please fill in all required fields before proceeding to the next step.', 'error');
                field.focus();
                return false;
            }
        }

        // Validate email and mobile number fields
        const emailField = document.getElementById('email');
        const mobileField = document.getElementById('mobileno');

        if (!validateEmail(emailField) || !validateMobile(mobileField)) {
            return false; // Prevent form submission if email or mobile validation fails
        }

        // Validate "Do you have any evidence?" input
        if (!handleEvidenceOption()) {
            return false; // Prevent form submission if evidence validation fails
        }

        // Validate file extension for evidenceFile and imageTemplate inputs
        const evidenceFileInput = document.getElementById('evidenceFile');
        const imageTemplateInput = document.getElementById('imageTemplate');

        if (currentStep === 1 && (!validateFileExtension(evidenceFileInput) || !validateFileExtension(imageTemplateInput))) {
            return false; // Prevent form submission if file validation fails for Step 1
        }

        // Proceed with form submission if all validations are successful
        return true;
    }

    // Function to enable the submit button when the checkbox is ticked
    document.getElementById('certifyCheck').addEventListener('change', function () {
        document.getElementById('submitButton').disabled = !this.checked;
    });

    // Initial adjustment of card height on page load
    adjustCardHeight();
</script>


</div>      
      
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Portal Configurator</h5>
          
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>