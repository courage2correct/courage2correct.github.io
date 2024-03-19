<!DOCTYPE html>
<html lang="en">
<head>
    
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
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form name="c2cform" onsubmit="return validateForm()" action="process.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
<div class="container">
        <div class="card">
            <div class="card-body">
                <form name="c2cform" onsubmit="return validateForm()" action="process.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                    <div id="step1">
                        <!-- Step 1 content here -->
                        <!-- Personal Details -->

<div class="row">
        <div class="col-sm-12 col-md-6 mb-3 text-justify">
            <div style="height: 800px;" class="card shadow reveal">
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
                    <label for="evidence" class="form-label">Do you have any evidence?</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="evidenceYes" name="evidence" value="yes" onclick="showEvidenceUpload()" required>Yes
                        <label class="form-check-label" for="evidenceYes"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="evidenceNo" name="evidence" value="no" onclick="hideEvidenceUpload()">No
                        <label class="form-check-label" for="evidenceNo"></label>
                    </div>
                    <div id="evidenceUpload" style="display: none;">
                        <div class="mb-3 mt-3">
                            <label class="form-label">Please upload the file or submit a link:</label>
                            <input class="form-control" type="file" name="evidenceFile">
                        </div>
                    </div>
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
        <div class="col-sm-12 col-md-6 mb-3 text-justify">
            <div style="height: 800px;" class="card shadow reveal">
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
            <div class="col-sm-12 col-md-6 mb-3 text-justify">
                <div style="height: 800px;" class="card shadow reveal">
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
            <div class="col-sm-12 col-md-6 mb-3 text-justify">
                <div style="height: 800px;" class="card shadow reveal">
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

                    <div id="step5" style="display: none;">
                        <!-- Step 5 content here -->
                        <!-- Checkbox & Disclaimer -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="certifyCheck" required>
                            <label class="form-check-label" for="certifyCheck">I certify that the information provided by me in the above form is accurate and correct to the best of my knowledge. I understand that withholding of information or giving false information is a criminal offense and may result in legal action against me.</label>
                        </div>
                        <div class="alert alert-info mt-3">
                            DISCLAIMER: As per the prevailing laws, FIR of a major crime ('cognizable crimes like theft, burglary, motor vehicle theft, accident, chain-snatching, assault, rape, murder, attempt to commit murder, robbery, dacoity, extortion, etc.) can only be registered at a Police Station. Please contact your nearest Police Station for the same. This site shall only entertain complaints about cybercrime ('non-cognizable crimes'). Your complaint shall be referred to the concerned Police Station if it is needed, where you may be called for further clarification and/or to give a statement.
                        </div>
                        <button type="submit" class="btn btn-primary" id="submitButton" disabled>Submit</button>
                        <button type="button" class="btn btn-secondary" onclick="prevStep(4)">Back</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS script link here if required -->

    <script>
        // JavaScript functions for step navigation
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
        }

        function prevStep(prevStep) {
            hideStep(currentStep);
            showStep(prevStep);
            currentStep = prevStep;
        }

        // Function to enable the submit button when the checkbox is ticked
        document.getElementById('certifyCheck').addEventListener('change', function () {
            document.getElementById('submitButton').disabled = !this.checked;
        });
    </script>
</form>

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
    }

    function prevStep(prevStep) {
        hideStep(currentStep);
        showStep(prevStep);
        currentStep = prevStep;
    }
</script>
<script>
    // ... existing code ...

    function showEvidenceUpload() {
        document.getElementById('evidenceUpload').style.display = 'block';
    }

    function hideEvidenceUpload() {
        document.getElementById('evidenceUpload').style.display = 'none';
    }
</script>

</body>
</html>