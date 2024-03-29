<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID Leads & Requirements</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="bg-dark">
<script>
    swal("Hospitals in WB shall directly provide with Remdesivir!");
  </script>
      <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container">
          <h1 class="display-4 text-white">COVID requirements Page</h1>
          <h5 class="text-muted">Please provide genuine requirements</h5><br>
          <div class="text-center">
          <a href="../rem.html"><button class="btn btn-outline-primary">Have Info? Share with us</button></a></div>
        </div>

              <?php
              $conn=mysqli_connect("localhost","root","","remdes");
              $query="select * from postinfo ORDER BY posttime DESC";
              $print=mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($print)) {
                echo "<p class='lead'><div class='bg-secondary text-white jumbotron fluid-jumbotron'><br> ".
                   "<div class='text-dark'><h5>{$row['name']}</h5><h6><u>{$row['contactinfo']}</u></h6></div>".
                   "<h4>{$row['updateinfo']}</h4> ".
                   "TIME : {$row['posttime']}</div> <br> ".
                   "<hr class='my-4 text-white'></p>";
             }
              ?>
      </div>
</body>
</html>