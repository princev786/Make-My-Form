<?php

$server='localhost';
$host='root';
$pass='';
$database='prince9696';

//connection to the database

$conn=mysqli_connect($server,$host,$pass,$database);

if($conn){
    //echo "successfully connected";
}
else{
    //  die (mysqli_connect_error());
   }



session_start();

$data="customer999";

$con=mysqli_connect($server,$host,$pass,$data);
if($con){
    // echo "SUCCESSFULLY CONNECTED";
}

$email=$_SESSION['LEMAIL'];
// $fno=$_SESSION['fno'];
// echo $email;
$uid=$_GET['id'];

$sql123="SELECT `NAME OF TEXT FIELDS`,`NAME OF NUMERIC FIELDS`,`NAME OF DROPDOWN FIELDS`,`NAME OF CHECKBOX FIELDS`,`NAME OF BULLET FIELDS`,`ORGANISATION NAME`,`VALUED`,`VALUEC`,`VALUEB` FROM names WHERE `ID`='$uid' ";
$output=mysqli_query($conn,$sql123);
$row=mysqli_fetch_array($output,MYSQLI_NUM);

$not=$row[0];
$non=$row[1];
$nod=$row[2];
$noc=$row[3];
$nob=$row[4];
$org_name=$row[5];
$valued=$row[6];
$valuec=$row[7];
$valueb=$row[8];
// printf("%s",$row[3]);

// $name_t=explode(",",$not);
// $name_n=explode(",",$non);
// $name_d=explode(",",$nod);

$name_t=explode(",",$not);
$name_n=explode(",",$non);
$name_d=explode(",",$nod);
$name_c=explode(",",$noc);
$name_b=explode(",",$nob);
$value_d=explode(";",$valued);
$value_c=explode(";",$valuec);
$value_b=explode(";",$valueb);
// printf("%s",$name_t[0]);
// printf("%s",$name_n[0]);
// printf("%s",$name_d[0]);

$sql1="SELECT `TEXT FIELDS`,`NUMERIC FIELDS`,`DROPDOWN FIELDS`,`CHECKBOX FIELDS`,`BULLET FIELDS` FROM form9696 WHERE `ID`='$uid' ";
$result1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($result1,MYSQLI_NUM);
// printf("%s",$row[0]);
// printf("%s",$row[1]);
// printf("%s",$row[2]);

$num_text=$row[0];
$num_num=$row[1];
$num_dropdown=$row[2];
$num_checkbox=$row[3];
$num_bullets=$row[4];
// printf("%s",$num_text);
// printf("%s",$num_num);
// printf("%s",$num_dropdown);

// $_SESSION['count']=1;




//CREATING TABLE FOR DATA
$refresh=isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL']=='max-age=0';
// ECHO $refresh;
$tbname=$org_name;
// echo $tbname;
if($refresh==1 && $_SESSION['count']!=2)  {
$sql3= "CREATE TABLE customer999.$tbname (`SNO` INT NOT NULL AUTO_INCREMENT ,PRIMARY KEY(`SNO`)) ENGINE = InnoDB";
$result3=mysqli_query($con,$sql3);

// if(!$result)
// {
//    exit();
// }
$_SESSION['count']=2;
// ALTER TABLE `aimt` ADD `$name_t[$i]` TEXT NOT NULL;
for ($i=0; $i <$num_text ; $i++) { 
    $sql5="ALTER TABLE `$tbname` ADD `$name_t[$i]` VARCHAR(30) NOT NULL";
    $result5=mysqli_query($con,$sql5);
 }
 
for ($i=0; $i <$num_num ; $i++) { 
   $sql6="ALTER TABLE `$tbname` ADD `$name_n[$i]` VARCHAR(30) NOT NULL";
   $result6=mysqli_query($con,$sql6);
}

 for ($i=0; $i <$num_dropdown ; $i++) { 
    $sql7="ALTER TABLE `$tbname` ADD `$name_d[$i]` VARCHAR(30) NOT NULL";
    $result7=mysqli_query($con,$sql7);
 }
 for ($i=0; $i <$num_checkbox ; $i++) { 
  $sql9="ALTER TABLE `$tbname` ADD `$name_c[$i]` VARCHAR(30) NOT NULL";
  $result9=mysqli_query($con,$sql9);
}
for ($i=0; $i <$num_bullets ; $i++) { 
  $sql12="ALTER TABLE `$tbname` ADD `$name_b[$i]` VARCHAR(50) NOT NULL;";
  $result12=mysqli_query($con,$sql12);
}
//  ALTER TABLE `tbname` ADD `SUCCESS` VARCHAR(30) NOT NULL

}
// echo ($t[0])[0];

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
    button {
      color: white;
      background-color: blue;
      padding-left: 3px;
      padding-right: 3px;
    }

    input {
      border-radius: 12px;
      border: blue 5px;
    }
  </style>
</head>

<body style="background-color:rgb(206, 175, 98);">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MAKE MY FORM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  <div class='container'>
    <?php
echo "<form action='./thanks.php?id=$uid' method='POST'>";
?>
    <?php
//counter variables
$num_text=$row[0];
$num_num=$row[1];
$num_dropdown=$row[2];
$num_checkbox=$row[3];
$num_bullets=$row[4];
echo '<br>';
// writing code to make text headings and fields
for ($i=0; $i <$num_text ; $i++) { 
   echo "<center><h3>$name_t[$i]</h3></center>
   <center><input type='text' name='$name_t[$i]' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
   <br>
   ";
}

//writing code to make numeric headings and fields
for ($i=0; $i <$num_num ; $i++) { 
    echo "<center><h3>$name_n[$i]</h3></center>
    <center><input type='number' name='$name_n[$i]' id='no_of_fields' style='width:50%;height:30px;border-radius:11px;'></center>
    <br>
    ";
 }

?>
    <?php
for ($i=0; $i <$num_dropdown ; $i++) { 
     $d_v=explode(",",$value_d[$i]);
     $counter=count($d_v);
     echo "<center><h3>$name_d[$i]</h3></center>
     <center><select name='$name_d[$i]' style='width:50%;height:30px;border-radius:11px;'>";
     for ($j=0; $j <$counter ; $j++) { 
        echo "<center><option value='$d_v[$j]'>$d_v[$j]</option></center>";
     }
     echo "</select></center>";
     echo "<br>";
}
?>
<?php
for ($i=0; $i <$num_checkbox ; $i++) { 
     $c_v=explode(",",$value_c[$i]);
     $counter=count($c_v);
     echo "<center><h3>$name_c[$i]</h3></center>";
     for ($j=0; $j <$counter ; $j++) { 
        echo "<center><input type='checkbox' name='arrayc[]' value='$c_v[$j]'>$c_v[$j]</center>";
       echo "<br>";
     }
    //  echo "";
     echo "<br>";
}
?>
 <?php
for ($i=0; $i <$num_bullets ; $i++) { 
     $b_v=explode(",",$value_b[$i]);
     $counter=count($b_v);
     echo "<center><h3>$name_b[$i]</h3></center>";
     if($i==0){
     for ($j=0; $j <$counter ; $j++) { 
        echo "<center><input type='radio' name='$name_b[$i]' style='width:5%;height:30px;border-radius:11px;' value='$b_v[$j]'>$b_v[$j]</center><br>";}
     }
      else{
        for ($j=1; $j <$counter ; $j++) { 
          echo "<center><input type='radio' name='$name_b[$i]' style='width:5%;height:30px;border-radius:11px;' value='$b_v[$j]'>$b_v[$j]</center><br>";}
        }
     }
    //  echo "</center>";
     echo "<br>";

?>
    <!--making button to submit form-->
  
  
    <center><button type="submit">SUBMIT</button></center>
    
    </form>
  </div>

  <script>
    function message() {
      alert("SORRY! YOU MUST HAVE TO LOGOUT FIRST. ");
    }

    function message1() {
      alert("YOU ARE SUCCESSFULLY LOGGED OUT!");
    }
  </script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>