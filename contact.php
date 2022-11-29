<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
          header,.container
          {
              background-image:url('./assets/tel.jpg');
              background-repeat: no-repeat;
              background-size: cover;
         }
         .space
         {
              padding: 30%;
         }
         h1
         {
             color:magenta;
         }


    </style>
</head>
<body style="background-color:rgb(206, 175, 98);">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MAKE MY FORM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false"  aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>



              </ul>

            </div>
        </div>
      </nav>
        
      <header>
  <div class="container" >
   <center> <h1 style="font-family: Algerian"><b>MAKE MY FORM</b></h1></center>
    <p class="space" >   </p>
  </div>
</header>
<!--form-->
<form action="./thanks.php" method="POST">
  <div class="mb-3 my-4 px-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 px-5">
          <label for="exampleInputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword">
        </div>
  <div class="mb-3 px-5">
    <label for="exampleInputPassword1" class="form-label">PROBLEM OR ISSUE</label>
    <input type="textarea" class="form-control" name="problem" id="exampleInputTextArea">
  </div>
 
       
  <center>
  <button type="submit" class="btn btn-primary text-center px-5">SUBMIT</button>
</center>  
</form>
<br>
<center><h3><font family="Algrerian">EMAIL ADDRESS</font></h3></center>
<center><h5><font family="Fantasy">prince3690@gmail.com</font></h5></center>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>