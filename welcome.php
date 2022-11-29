<?php
$uid=$_GET['id'];
$email=$_POST['email1'];
$password=$_POST['password1'];
//echo $email;
//echo $password;
session_start();
$server='localhost';
$host='root';
$pass='';
$database='prince9696';

//connection to the database

$conn=mysqli_connect($server,$host,$pass,$database);

if($conn){
  //  echo "successfully connected";
}
else{
    //  die (mysqli_connect_error());
   }
  
   //now checking the credentials
   
   //sql1="SELECT * FROM users7689 WHERE PASSWORD='$password1' AND EMAIL='$email1' ";
   //$result=mysqli_query($conn,$sql1);
   
  $_SESSION['count']=1;
  $_SESSION['LEMAIL']=$email;
  

   $sql="SELECT * FROM users9696 WHERE PASSWORD='$password' AND EMAIL='$email'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_row($result);
   if($row!=0)
   { 
   // echo "successfully login!";
    //echo "<br>WELCOME ""<br>";
  //   
    
   }
   else{
       echo "<h1>login credentials are not correct</h1>";
       ECHO "<center><br>CREATE YOUR ACCOUNT FIRST!<BR><center>";
       ECHO "<br><center><a href='./signin.php'><font-size=21px>signup</font></a><center>";
       exit();
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color:rgb(206, 175, 98)";>

<nav class= "navbar navbar-dark bg-dark">
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
          <a class="nav-link active" aria-current="page" href="./profile.php" >YOUR PROFILE</a>
        </li>
        
   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php" onclick=message1()>LOGOUT</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


<!-- adding links to our code -->

<div class="container">
<br>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body ">
    <h5 class="card-title">FREE VERSION</h5>
    <p class="card-text">WE SUPPORT YOU TO MAKE FORMS AND COLLECT YOUR DATA IN EASY WAY.</p>
    <?php
   echo " <a href='./services.php?id=$uid' class='btn btn-primary'><i>MAKE ME</i></a>";
    ?>
  </div>
</div>
<br>
<div class="card">
  <div class="card-header">
    PRO
  </div>
  <div class="card-body">
    <h5 class="card-title">PAID VERSION</h5>
    <p class="card-text">WE SUPPORT YOU TO MAKE SECURE QUIZZES WITH 100% HONESTY LEVEL .</p>
    <a href="#" class="btn btn-primary">MAKE ME</a>
  </div>
</div>




</div>










<script>
    function message(){
  alert("SORRY! YOU MUST HAVE TO LOGOUT FIRST. ");
}

function message1(){
  alert("YOU ARE SUCCESSFULLY LOGGED OUT!");
}

function success(){
  alert("WELCOME TO THE WORLD OF ROYAL ESTATES !");
}

</script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>