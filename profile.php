<?php
session_start();
$EMAIL= $_SESSION['LEMAIL'];

$server='localhost';
     $username='root';
     $pass='';
     $database='prince9696';

     //now establishing the connection

     $conn=mysqli_connect($server,$username,$pass,$database);

     //checking the connection
     if($conn)
     {
     // echo 'sucessfull connection established with database';
     }

    else{
        die (mysqli_connect_error());
    }
$SQL="SELECT `NAME` FROM users9696 WHERE `EMAIL`='$EMAIL'";
$RESULT=mysqli_query($conn,$SQL);
$row=mysqli_fetch_array($RESULT,MYSQLI_NUM);
$name=$row[0];
// echo $name;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE PAGE</title>
    <style>
      img{
        border-radius:50%;
      }
      .container2{
        color:blood;
        /* align-items:center; */
        /* background-color:grey; */
      }
    </style>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="background:url('./assets/car2.jpg');background-size:cover;">
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MAKE ME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./services.php">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./contact.php">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./login.php">LOGIN</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
 
<div class="container">
<center><img src="./assets/car.jpg" alt="upload" height="30%" width="30%"></center>
<center><input type="file" ></center>
<br>

<?php

echo "
<div class='container2' >
<center>
<h5>FULL NAME : $name </h5>
<H5>EMIAL-ID :  $EMAIL</H5>
<H5>SUBSCRIPTION STATUS: TRUE</H5>
<H5>FORMS YOU HAVE CREATED SO FAR:</H5>
</center></div> ";
$sql1="SELECT `ID` FROM form9696 WHERE `EMAIL`='$EMAIL'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
$count=count($row1);
ECHO $count;
foreach ( $row1 as $forms) {
  # code...
  echo "<a href='./services2.php?id=$forms'><center><p>$forms</p></center>";
  echo "<a href='./download.php?id=$forms'><button>Download</button></a>";
}


?>

</div>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
