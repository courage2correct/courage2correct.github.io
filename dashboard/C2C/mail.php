<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Mail</title>
    
</head>
<body>
    
</body>
</html>
<?php
$myfile = fopen("final.txt", "r") or die("Unable to open file!");
$result= fread($myfile,filesize("final.txt"));
fclose($myfile);

$servername='localhost';
$username="root";
$password="";
try
{
    $con=new PDO("mysql:host=$servername;dbname=c2c",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
 
//get the last record from the database using timestamp
$stmt = $con->query("SELECT * FROM info ORDER BY id DESC LIMIT 1");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!$rows){
         echo '<tr>Data Not Found</tr>';
        }
        else{
            foreach($rows as $row){
              $fname=$row["name"];
              $mono=$row["mobileno"];
              $email= $row["email"];
              
            }
            echo "database fetch";  
          }
        

require_once 'mailer/class.phpmailer.php';
/* creates object */
$mail = new PHPMailer(true);
$mailid = $email;
$subject = "Result For Your Query.";
$message = '
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap css-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!--Bootstrap script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    font-family: arvo;
}

th {
    text-align: center;
    padding: 0px;
}
td{
 text-align: center;
    padding: 15px;
    font-family: arvo;
}
tr:nth-child(even){background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);}
tr:nth-child(odd){background: linear-gradient(90deg, #e3ffe7 0%, #d9e7ff 100%);}

th {
    background-color:#D5D5FF;
    font-family: arvo;
}

</style>
</head>
<body>

<div class="container mt-3">
    Hello '.$fname.',
   Here  is your Result: '.$result.'

  
</div>
 
</body>
</html>';

try
{
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="courage.2.correct@gmail.com";
$mail->Password ="fehwyqoglxcljwms";
$mail->SetFrom('courage.2.correct@gmail.com','Courage2Correct');
$mail->AddReplyTo("courage.2.correct@gmail.com","Courage2Correct");
$mail->AddCC("courage.2.correct@gmail.com");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
if($mail->Send())
{
    echo("msg send");
    header('Location:index.php');
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
?>
