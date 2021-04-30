<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Availability</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script2.js"></script>
</head>
<body class="bg-dark">
  <a href="index.html"><button" class="btn btn-outline-primary" style="margin:1vh"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</button></a>
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container">
          <h1 class="display-4 text-white">COVID Bed Availability</h1><h5 class="text-muted">West Bengal</h5><br>
          <form action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">
            <div class="form-group">
              <select class="form-control" id="input-text" name="input-text">
                <option value="">--Select Location--</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Alipurduar">Alipurduar</option>
                <option value="Bankura">Bankura</option>
                <option value="Birbhum">Birbhum</option>
                <option value="CoochBehar">Coochbehar</option>
                <option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
                <option value="Darjeeling">Darjeeling</option>
                <option value="Hooghly">Hooghly</option>
                <option value="Howrah">Howrah</option>
                <option value="Jalpaiguri">Jalpaiguri</option>
                <option value="Jhargram">Jhargram</option>
                <option value="Kalimpong">Kalimpong</option>
                <option value="Malda">Malda</option>
                <option value="Murshidabad">Murshidabad</option>
                <option value="Nadia">Nadia</option>
                <option value="North 24 Parganas">North 24 Parganas</option>
                <option value="Paschim Bardhaman">Paschim Bardhaman</option>
                <option value="Paschim Medinipur">Paschim Medinipur</option>
                <option value="Purba Burdwan">Purba Burdwan</option>
                <option value="Purba Medinipur">Purba Medinipur</option>
                <option value="Purulia">Purulia</option>
                <option value="South 24 Parganas">South 24 Parganas</option>
                <option values="Uttar Dinajpur">Uttar Dinajpur</option>
              </select>
            </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-outline-danger" name="submit">Submit</button>
              </div>
          </form>
          <p class="lead">
            <small class="text-muted">Last updated 30-04-2021 15:59</small>
            
                    <?php
                    $district="";
                    if(isset($_POST['submit'])){
                      echo "<table class='table table-striped table-dark'>
                      <thead>
                        <tr>
                          <th scope='col'>District</th>
                          <th scope='col'>Hospital Name</th>
                          <th scope='col'>Total Beds</th>
                          <th scope='col'>Vacant Beds</th></tr></thead><tbody>
                  
                          </tbody>";
                        $conn=mysqli_connect("localhost","root","","hospdb");
                        date_default_timezone_set("Asia/Kolkata");
                        $district=$_POST['input-text'];
                        //echo $district;
                        $str="SELECT * FROM MYTABLE WHERE DISTRICT='$district' ORDER BY vacant DESC";
                        $query=mysqli_query($conn,$str);
                        while($row = mysqli_fetch_array($query)) {
                          echo "<tr><td>".$row['district']."</td><td>".$row['hospname']."</td><td>".$row['total']."</td><td>".$row['vacant']."</td></tr>";
                       }
                        
                    }
                        
                    ?>
                
                
              </table>
          </p>
        </div>
      </div>
</body>
</html>