<?php
error_reporting(0);
$uid=$_GET['id'];
if($uid==''){
  echo "<b>Please Login First then You will access this.</b>";
  exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICES PAGE</title>
    <style>
      button{
        color:white;
        background-color:blue;
        padding-left:3px;
        padding-right:3px;
      }
    </style>
</head>
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="./profile.php" >YOUR PROFILE</a>
        </li>
        
   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php" onclick=message1()>LOGOUT</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
<?php
// <!-- creating form structure-->
echo "<form action='./services1.php?id=$uid' method='POST'>
<center><h3>NUMBER OF TEXT FIELDS</h3></center>
<center><input type='number' name='not' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>NUMBER OF NUMERIC FIELDS</h3></center>
<center><input type='number' name='non' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>NUMBER OF DROPDOWN FIELDS</h3></center>
<center><input type='number' name='nod' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>NUMBER OF CHECKBOXES</h3></center>
<center><input type='number' name='noc' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>
<center><h3>NUMBER OF BULLETS</h3></center>
<center><input type='number' name='nob' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
<br>

<center><button type='submit'>SUBMIT</button></center>

</form>";
?>
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
//name fields function
//function name()

</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>