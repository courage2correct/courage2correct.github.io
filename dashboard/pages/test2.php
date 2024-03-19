<!DOCTYPE html>
<html>

<head>
    <title>Revenge Pornography Detection Form</title>
    <!-- Add Bootstrap CSS link here -->
    <!-- Add your custom CSS link here if required -->
    <style>
        /* ... Your existing CSS styles ... */
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Your form code here -->
        <form name="c2cform" onsubmit="return handleSubmit()" action="process.php" method="post"
            class="needs-validation" enctype="multipart/form-data" novalidate>
            <!-- Step 1 -->
            <div id="step1">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="mobileno" class="form-label">Mobile No.:</label>
                    <input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile No." name="mobileno"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email Id" name="email"
                        required>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep(1)">Next</button>
            </div>

            <!-- Step 2 -->
            <div id="step2" style="display: none;">
                <div class="mb-3">
                    <label for="idate" class="form-label">Incident Date:</label>
                    <input type="date" class="form-control" id="idate" name="idate" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Incident Type:</label>
                    <select class="form-select" id="type" name="type" required>
                        <option class="invalid-feedback" value="" selected disabled>Select</option>
                        <option>Hacking</option>
                        <option>Image Abuse</option>
                        <option>Video Viral Incident</option>
                        <!-- Add more options here if needed -->
                    </select>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
                <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Back</button>
            </div>

            <!-- Step 3 -->
            <div id="step3" style="display: none;">
                <!-- Step 3 content -->
                <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
                <button type="button" class="btn btn-secondary" onclick="prevStep(3)">Back</button>
            </div>

            <!-- Step 4 -->
            <div id="step4" style="display: none;">
                <!-- Step 4 content -->
                <button type="button" class="btn btn-primary" onclick="nextStep(4)">Next</button>
                <button type="button" class="btn btn-secondary" onclick="prevStep(4)">Back</button>
            </div>

            <!-- Step 5 -->
            <div id="step5" style="display: none;">
                <!-- Step 5 content -->
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" onclick="prevStep(4)">Back</button>
            </div>
        </form>
    </div>

    <script>
        // Function to show the next step and hide the current step
        function nextStep(step) {
            const currentStep = document.getElementById(`step${step}`);
            const nextStep = document.getElementById(`step${step + 1}`);

            // Validate the current step before proceeding to the next step
            if (validateStep(currentStep)) {
                currentStep.style.display = "none";
                nextStep.style.display = "block";
            }
        }

        // Function to show the previous step and hide the current step
        function prevStep(step) {
            const currentStep = document.getElementById(`step${step}`);
            const prevStep = document.getElementById(`step${step - 1}`);

            currentStep.style.display = "none";
            prevStep.style.display = "block";
        }

        // Function to validate the fields in a step
        function validateStep(step) {
            // Get all required input fields in the current step
            const requiredFields = step.querySelectorAll("[required]");

            // Check if all required fields are filled
            for (const field of requiredFields) {
                if (!field.value.trim()) {
                    alert("Please fill in all required fields before proceeding to the next step.");
                    field.focus();
                    return false;
                }
            }

            return true;
        }
    </script>
</body>

</html>
