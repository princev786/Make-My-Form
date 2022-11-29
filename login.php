<?php
function uniqidReal($length=12){
  if(function_exists("random_bytes")){
      $bytes=random_bytes(ceil($length/2));

  }
elseif(function_exists("openssl_random_pseudo_bytes")){
  $bytes=openssl_random_pseudo_bytes(ceil($length/2));
}
else{
  throw new Exception("no cryptographically secure random function available");
}
return substr(bin2hex($bytes),0,$length);



}
// echo uniqidReal();





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="background:url('./assets/bg.jpg'); background-repeat:no-repeat; background-size: cover;">

    <CENTER><h2 style='font-family: Algerian'>WELCOME! TO THE LOGIN PAGE</h2></CENTER>
    <?php
    $unique=uniqidReal();
    // echo $unique;
    echo "<form action='./welcome.php?id=$unique' method='POST'>
        <div class='mb-3 my-4 px-5'>
          <label for='exampleInputEmail1' class='form-label'>Email address</label>
          <input type='email' class='form-control' name='email1' id='exampleInputEmail1' aria-describedby='emailHelp'>
          
        </div>
        <div class='mb-3 px-5'>
          <label for='exampleInputPassword1' class='form-label'>Password</label>
          <input type='password' class='form-control' name='password1' id='exampleInputPassword1'>
        </div>
        <center>
        <button type='submit' class='btn btn-primary text-center px-5'>LOGIN</button>
    </center>  
    </form>";
    ?>
        <!-- // $unique=uniqidReal();
        // echo " <form action='./services.php' method='get'>
        // <input type='hidden' name='id' value='$unique'>
        // </form>"; -->

       
       <!-- <center><button type="submit">click me to confirm</button></center> -->
 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous">
    </script>
</body>

</html>