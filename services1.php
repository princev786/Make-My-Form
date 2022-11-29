<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

  session_start();
  //now connecting to a database

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

  $uid=$_GET['id'];
//creating variables
$noc=$_POST['noc'];
$not=$_POST['not'];
$non=$_POST['non'];
$nod=$_POST['nod'];
$nob=$_POST['nob'];
// $id=$_POST['id'];
// $email=$_POST['email'];
// $fno=$_POST['fno'];
$email=$_SESSION['LEMAIL'];

$sql="INSERT INTO form9696 ( `CHECKBOX FIELDS`, `TEXT FIELDS`, `NUMERIC FIELDS`, `DROPDOWN FIELDS`,`BULLET FIELDS`,`ID`,`EMAIL`) VALUES ( '$noc', '$not', '$non', '$nod','$nob','$uid','$email')";
$result=mysqli_query($conn,$sql);
if($result)
{
  //echo "THANK YOU FOR MAKING FORM WITH US";
}
// $_SESSION['email']=$email;
// $_SESSION['fno']=$fno;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROCESSING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


        <style>
      button{
        color:white;
        background-color:blue;
        padding-left:3px;
        padding-right:3px;
      }
    </style>
</head>
<body style="background-color:rgb(206, 175, 98);">
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MAKE MY FORM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick=message()>Home</a>
        </li>
   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php" onclick=message1()>LOGOUT</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
  <?php
echo "<form action='./smart.php?id=$uid' method='POST'>"
?>
<?php
echo "<center><h3>TEXT FIELD NAMES</h3></center>
<center><input type='text' name='namet[]' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>NUMERIC FIELD NAMES</h3></center>
<center><input type='text' name='namen[] id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>DROPDOWN FIELDS NAMES</h3></center>
<center><input type='text' name='named[]' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>BULLET FIELD NAMES</h3></center>
<center><input type='text' name='nameb[] id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>CHECKBOX FIELD NAMES</h3></center>
<center><input type='text' name='namec[] id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>EVENT NAME*</h3></center>
<center><input type='text' name='org_name' id='ORGANISATION NAME' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
";
?>
<?php

for ($i=0; $i < $nod; $i++) { 
  echo "<center><h3>DROPDOWN FIELD $i OPTIONS</h3></center>
  <center><input type='text' name='value[]' id='no_of_fields'></center>
  <br>
  ";
 
}
for ($i=0; $i < $noc; $i++) { 
  echo "<center><h3>CHECKBOX FIELD $i OPTIONS</h3></center>
  <center><input type='text' name='valuec[]' id='no_of_fields'></center>
  <br>
  ";
 
}
for ($i=0; $i < $nob; $i++) { 
  echo "<center><h3>BULLET FIELD $i OPTIONS</h3></center>
  <center><input type='text' name='valueb[]' id='no_of_fields'></center>
  <br>
  ";
 
}
?>
<?php
 echo "<center><button type='submit'>SUBMIT</button></center>";
echo "</form>";
?>
</div>
















<!--TAKING NAMES OF FIELDS-->
<!-- 
// echo $non;
/*echo "<center><h2>TEXT FIELDS</h2></center><BR>";
for($i=1;$i<=$not;$i++)
{
echo "<form   action='./services2.php' method='POST'>
<center><h3>$i FIELD</h3></center>
<center><input type='text' name='namet[]' id='no_of_fields'></center>
<br>
   </form>";
}
echo "<center><button type='submit'>SUBMIT</button></center>";
?>*/
 -->




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>