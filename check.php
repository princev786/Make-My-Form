<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //echo "successful signup with name='$name' email='$email' contact='$phoneno' ";
    echo "<blink><h1>YOU HAVE SUCCESSFULLY CREATED YOUR PROFILE ! </h1></blink> '<br>' ";

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

    //creating variables to store data
    $name=$_POST['NAME'];
    $phoneno=$_POST['PHONENO'];
    $email=$_POST['EMAIL'];
    $gender=$_POST['GENDER'];
    $password=$_POST['PASSWORD'];
    $city=$_POST['CITY'];
   // $password=$_POST['PASS'];

   //writing sql query

   $sql="INSERT INTO users9696 (`NAME`, `EMAIL`, `GENDER`, `PHONENO`, `CITY`, `PASSWORD`, `DATE AND TIME`) VALUES ('$name', '$email', '$gender', $phoneno, '$city', '$password', current_timestamp())";
   $result=mysqli_query($conn ,$sql);
   if($result){
//    echo "successsfully updated or inserted";
   }


}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROCESSING</title>

    <style>
        a {
            text-decoration: none;
            color: black;
            font-size: 25px;
            font-family: fantasy;

        }

        #but {
            font-size: 15%;
            color: white;
            letter-spacing: 2px;
            word-spacing: 3px;

        }

        .container {
            padding: 45px;
            display: flex;
            text-align: center;
            justify-content: center;
            margin: 0px;

        }

        button {
            background-color: blue;
        }
    </style>


</head>


<body>
<div class="container">
    <center>
        <div class="container">
            <a href="./login.php" id="button">
                <p class="button">LOGIN</p>
            </a>
    </center>

    </div>


</body>
</html>