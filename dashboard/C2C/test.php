<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!--bootstrap call-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!--Sweet alert call-->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="sweetalert2.all.min.js"></script>
</head>
<body>
   
      <script>
      swal.fire({
    title: "Submited!",
    text: "We will contact you in next 2-3 days!",
    type: "success"
}).then(function() {
    window.location = "index.php";
});
      </script>
   
</body>
</html>