<?php 
include_once 'database.php';
session_start();
/*error_reporting(0);*/
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="select count('id') from info";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!--frame size composition-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Title-->    
      <title>Courage2Correct | Home</title>
      <!--bootstrap call-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!--Sweet alert call-->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="sweetalert2.all.min.js"></script>
      <!--customize style sheet-->
      <style>
         body, html {
         height: 100%;
         margin: 0;
               font-family: Arial, Helvetica, sans-serif;
         }
         * {
         box-sizing: border-box;
         }
         .bg-image {
         /* Full height */
         height: 100%; 
         /* Center and scale the image nicely */
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         .bg-image2 {
         /* Full height */
         height: 200%; 
         /* Center and scale the image nicely */
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         /* Images used */
         .img1 { background-image: url("resources/images/img1.png"); }
         .img2 { background-image: url("resources/images/img2.png"); }
         /* Position text in the middle of the page/image */
         .bg-text {
         background-color: rgb(0,0,0); /* Fallback color */
         background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
         color: white;
         font-weight: bold;
         font-size: 80px;
         border: 10px solid #f1f1f1;
         position: fixed;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         z-index: 2;
         width: 300px;
         padding: 20px;
         text-align: center;
         }
         .reveal{
         position: relative;
         transform: translateY(150px);
         opacity: 0;
         transition: 1s all ease;
         }
         .reveal.active{
         transform: translateY(0);
         opacity: 1;
         }
      </style>
   </head>
   <body>
      <div class="bg-image img1">
         <img  align="right" style="height: 85px; position: sticky; top: 0;margin-right: 5px;" src="resources\images\logo.png"></img>
      </div>
      <div class="bg-image2 img2">
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <img  align="right" style="height: 85px; position: sticky; top: 0;margin-right: 5px;" src="resources\images\logo.png"></img>
         </div>
      </div>
      <div class="container mt-5">
      <form name="c2cform" onsubmit="return validateForm()" action="process.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
       <div class="row">
          <div class="col-sm-12 col-md-6 mb-3 text-justify">
            <div style="height: 800px;" class="card shadow reveal">
               <div style="background-color: #D5D5FF;" class="card-header">Details</div>
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
                     <label for="email" class="form-label">E-mail:</label>
                     <input type="email" class="form-control" id="email" placeholder="Enter Your Email Id" name="email" required>
                     <div id="e" class="invalid-feedback">
                        Please Enter Your Email Id.
                     </div>
                  </div>
                  <label for="yes no" class="form-label">Do you have screenshot or video ?</label>
                  <div class="form-check">
                     <input type="radio" class="form-check-input" id="yes" name="screenshots" value="yes" checked required>Yes
                     <label class="form-check-label" for="yes"></label>
                  </div>
                  <div class="form-check">
                     <input type="radio" class="form-check-input" id="no" name="screenshots" value="no">No
                     <label class="form-check-label" for="no"></label>
                  </div>
                  <div class="mb-3 mt-3">
                     <input class="btn btn-primary" type="file" name="file" id="fileToUpload">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 text-justify">
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
                        <option>Hacking</option>
                        <option>Image Abuse</option>
                        <option>- Morphing</option>
                        <option>- Fake Profile</option>
                        <option>Sexual Abuse</option>
                        <option>- Sextortion</option>
                        <option>- Sexting</option>
                        <option>Identity Theft</option>
                        <option>- Impersonation</option>
                        <option>- Doxing</option>
                     </select>
                     <div class="invalid-feedback">
                        Please Select Valid Incident Type.
                     </div>
                  </div>
                  <div class="mb-3 mt-3">
                     <label for="other" class="form-label">Other (If not found in list above):</label>
                     <input type="text" class="form-control" id="other" value="NULL" name="othertype">
                  </div>
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
                        <option>ICT Tool(MS Teams)</option>
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
                     <input type="text" class="form-control"value="NULL" id="other" name="otherplat">
                  </div>
                  <label for="platform" class="form-label">Select Platform to find the video:</label><br>
                  <input type="checkbox" class="form-check-input" id="Adult" name="find" value="Adult" checked>
                  <label class="form-check-label" for="check1">Adult</label>
                  <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="sel-Social-Media" name="find" value="Social Media">
                     <label class="form-check-label" for="check2">Social Media</label>
                  </div>
                  <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="sel-Streaming-Platform" name="find" value="Streaming Platform">
                     <label class="form-check-label">Streaming Platform</label>
                  </div>
                  <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="Other" name="find" value="Other" >
                     <label class="form-check-label" for="check1">Other</label>
                  </div>
                  </br>
                  <div class="row">
                     <div class="col-sm-12 col-md-12">
                        <center>
                           <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                        </center>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </form>
      <!--script-->
      <script>
         function validateForm() {
          
          var x=document.c2cform.email.value;  
         var atposition=x.indexOf("@");  
         var dotposition=x.lastIndexOf(".");  
         if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
         Swal.fire(
         'Please Enter valid Email!',
         'Please write your email address',
         'warning')
         return false;  
         }   else{
         
         let inputtxt = document.forms['c2cform']['mobileno'].value; 
         var phoneno = /^\d{10}$/;
         if(!inputtxt.match(phoneno))
         {
         Swal.fire(
         'Phone No is not valid!',
         'Please Enter Valid Phone number!',
         'warning'
         )
         document.getElementById('mobileno').value = "";
         }
         
         
         }
         
         }
         
         
      </script>
      <script>
         (function () {
         'use strict'
         
         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.querySelectorAll('.needs-validation')
         
         // Loop over them and prevent submission
         Array.prototype.slice.call(forms)
         .forEach(function (form) {
         form.addEventListener('submit', function (event) {
         if (!form.checkValidity()) {
         event.preventDefault()
         event.stopPropagation()
         }
         
         form.classList.add('was-validated')
         }, false)
         })
         })()
      </script>
      <script>
         function reveal() {
         var reveals = document.querySelectorAll(".reveal");
         
         for (var i = 0; i < reveals.length; i++) {
         var windowHeight = window.innerHeight;
         var elementTop = reveals[i].getBoundingClientRect().top;
         var elementVisible = 150;
         
         if (elementTop < windowHeight - elementVisible) {
         reveals[i].classList.add("active");
         
         } else {
         reveals[i].classList.remove("active");
         
         }
         }
         
         }
         
         
         window.addEventListener("scroll", reveal);
      </script>
   </body>
</html>
