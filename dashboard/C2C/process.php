<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Database</title>
    <link rel = "icon" href ="res\images\logo.png" type = "image/x-icon">
</head>
<body>
    
</body>
</html>
<?php
include_once 'database.php';
session_start();


$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

if (isset($name)) {

$path= 'Uploads/videos/';
if (empty($name))
{
echo "Please choose a file";
}
else if (move_uploaded_file($tmp_name, $path.$name)) {
   echo 'Uploaded!';
   }
}
/*error_reporting(0);*/
if(isset($_POST['submit']))
{	$fname=$_POST['name'];
    $mono=$_POST['mobileno'];
    $email=$_POST['email'];
    $cat=$_POST['find'];
    
    $screenshots=$_POST['screenshots'];
    $date=$_POST['idate'];
    $type=$_POST['type'];
    $othertype=$_POST['othertype'];
    $platform=$_POST['platform'];
    $otherplatform=$_POST['otherplat'];
    

    $_SESSION["fname"]=$fname;
    $_SESSION["mono"]=$mono;
    $_SESSION["email"]=$email;
    $_SESSION["cat"]=$cat;
    
    $_SESSION["screenshots"]=$screenshots;
    $_SESSION["date"]=$date;
    $_SESSION["type"]=$type;
    $_SESSION["othertype"]=$othertype;
    $_SESSION["platform"]=$platform;
    $_SESSION["otherplatform"]=$otherplatform;
   
        
    $sql = "INSERT Into info (`name`,`mobileno`,`email`,`evidence`,`indate`,`intype`,`tyepother`,`pltin`,`other`,`findwhere`) 
            values('$fname','$mono','$email','$screenshots','$date','$type','$othertype','$platform','$otherplatform','$cat')";
           if (mysqli_query($conn, $sql)) 
           {
            echo "New record created successfully !";
            header("location:test.php");
          } 
          else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
         }
         mysqli_close($conn);
    }


?>