<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

   session_start();
$server="localhost";
$host="root";
$pass="";
$database="customer999";

$conn=mysqli_connect($server,$host,$pass,$database);
if($conn){
    // echo "SUCCESSFULLY CONNECTED";
}
$data="prince9696";
$con=mysqli_connect($server,$host,$pass,$data);
if($con){
    // echo "SUCCESSFULLY CONNECTED";
}

//taking out the values of session arrays
// $email=$_SESSION['email'];
// $fno=$_SESSION['fno'];


$uid=$_GET['id'];

$sql1="SELECT `TEXT FIELDS`,`NUMERIC FIELDS`,`DROPDOWN FIELDS`,`CHECKBOX FIELDS`,`BULLET FIELDS` FROM form9696 WHERE `ID`='$uid'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1,MYSQLI_NUM);

$num_text=$row1[0];
$num_num=$row1[1];
$num_dropdown=$row1[2];
$num_checkbox=$row1[3];
$num_bullet=$row1[4];

// printf("%s",$num_text);
// printf("%s",$num_num);
// printf("%s",$num_dropdown);

$sql="SELECT `NAME OF TEXT FIELDS`,`NAME OF NUMERIC FIELDS`,`NAME OF DROPDOWN FIELDS`,`NAME OF CHECKBOX FIELDS`,`NAME OF BULLET FIELDS`,`ORGANISATION NAME` FROM names WHERE `ID`='$uid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

$not=$row[0];
$non=$row[1];
$nod=$row[2];
$noc=$row[3];
$nob=$row[4];
$org_name=$row[5];
// printf("%s",$row[3]);



$name_t=explode(",",$not);
$name_n=explode(",",$non);
$name_d=explode(",",$nod);
$name_c=explode(",",$noc);
$name_b=explode(",",$nob);

// storing values in different arrays
$array_t=[];
$array_n=[];
$array_d=[];
$array_c=[];
$array_b=[];
// $array_c1=[];
// $array_t[0]=$_POST[$name_t[0]];
// printf("%s",$array_t[0]);

for ($i=0; $i <$num_text ; $i++) { 
   $array_t[$i]=$_POST[$name_t[$i]];
//    printf('%s<br>',$array_t[$i]);
 }

 for ($i=0; $i <$num_num ; $i++) { 
    $array_n[$i]=$_POST[$name_n[$i]];
    // printf('%s<br>',$array_n[$i]);
  }

  for ($i=0; $i <$num_dropdown ; $i++) { 
    $array_d[$i]=$_POST[$name_d[$i]];
    // printf('%s<br>',$array_d[$i]);
  }

  for ($i=0; $i <$num_checkbox ; $i++) { 
   $array_c[$i]=$_POST['arrayc'];
   $str=implode(",",$array_c[$i]);
   // printf('%s<br>',$array_d[$i]);
 }
 for ($i=0; $i <$num_bullet ; $i++) { 
   $array_b[$i]=$_POST[$name_b[$i]];
   // printf('%s<br>',$array_b[$i]);
 }
 




// $NAME1=$_POST[$name_t[1]];
// printf("%s",$NAME1);


$tbname=$org_name;

// OPEN IT AS SOON AS POSSIBLE
// $sql3= "CREATE TABLE customer999.$tbname (`SNO` TEXT NOT NULL ) ENGINE = InnoDB";
// $result3=mysqli_query($conn,$sql3);
// if($result)
// {
//     //echo "SUCCESSFULLY CREATED";
// }

// // ALTER TABLE `aimt` ADD `$name_t[$i]` TEXT NOT NULL;
// for ($i=0; $i <$num_text ; $i++) { 
//     $sql5="ALTER TABLE `$tbname` ADD `$name_t[$i]` TEXT NOT NULL";
//     $result5=mysqli_query($conn,$sql5);
//  }
 
// for ($i=0; $i <$num_num ; $i++) { 
//    $sql6="ALTER TABLE `$tbname` ADD `$name_n[$i]` TEXT NOT NULL";
//    $result6=mysqli_query($conn,$sql6);
// }

//  for ($i=0; $i <$num_dropdown ; $i++) { 
//     $sql7="ALTER TABLE `$tbname` ADD `$name_d[$i]` TEXT NOT NULL";
//     $result7=mysqli_query($conn,$sql7);
//  }

//TILL HERE




//INSERTING DATA
// INSERT INTO `aimt` (`subscription_details`, `NAME`, `CLASS`, `ADDRESS`, `PHONENO`, `PINCODE`, `COURSE`) VALUES ('', 'PRINCE VERMA', '', '', '', '', '');

// UPDATE `aimt` SET `subscription_details`='[value-1]',`CLASS`='[value-3]',`ADDRESS`='[value-4]',`PHONENO`='[value-5]',`PINCODE`='[value-6]',`COURSE`='[value-7]' WHERE `NAME` LIKE 'PRINCE VERMA';
$num=$num_text +$num_num +$num_dropdown +$num_checkbox +$num_bullet;
// TAKING FORM DATA

// first query inserted
if($num>0)
{
 $query= "INSERT INTO $tbname (`$name_t[0]`) VALUES ('$array_t[0]')";
  $entry=mysqli_query($conn,$query);
  if($entry){
   echo "successfully inserted<br>";
  }
}

// now updating the all text records
for ($i=1; $i <$num_text ; $i++) { 
    $query1="UPDATE $tbname SET `$name_t[$i]`='$array_t[$i]' WHERE `$name_t[0]` LIKE '$array_t[0]'";
    $entry1=mysqli_query($conn,$query1);
    if($entry1){
       // echo "success<br>";
    }
 } 
//updating all the dropdown records
 for ($i=0; $i <$num_dropdown ; $i++) { 
    $query2="UPDATE $tbname SET `$name_d[$i]`='$array_d[$i]' WHERE `$name_t[0]` LIKE '$array_t[0]'";
    $entry2=mysqli_query($conn,$query2);
    if($entry2){
        //echo "success<br>";
    }
 } 
//updating all the numeric records
 for ($i=0; $i <$num_num ; $i++) { 
    $query3="UPDATE $tbname SET `$name_n[$i]`='$array_n[$i]' WHERE `$name_t[0]` LIKE '$array_t[0]'";
    $entry3=mysqli_query($conn,$query3);
    if($entry3){
       // echo "success<br>";
    }
 } 
// updating checkbox records
 for ($i=0; $i <$num_checkbox ; $i++) { 
   $query4="UPDATE $tbname SET `$name_c[$i]`='$str' WHERE `$name_t[0]` LIKE '$array_t[0]'";
   $entry4=mysqli_query($conn,$query4);
   if($entry4){
       //echo "success<br>";
   }
} 
for ($i=0; $i <$num_bullet ; $i++) { 
   $query5="UPDATE $tbname SET `$name_b[$i]`='$array_b[$i]' WHERE `$name_t[0]` LIKE '$array_t[0]'";
   $entry5=mysqli_query($conn,$query5);
   if($entry5){
       //echo "success<br>";
   }
} 






//first inserting all the text fields
// for ($i=0; $i <$num_text ; $i++) { 
//     $query1="UPDATE $tbname SET `subscription_details`='[value-1]',`CLASS`='[value-3]',`ADDRESS`='[value-4]',`PHONENO`='[value-5]',`PINCODE`='[value-6]',`COURSE`='[value-7]' WHERE `NAME` LIKE 'PRINCE VERMA';";
//     $entry1=mysqli_query($conn,$query1);
//  }

// for ($i=0; $i <$num_dropdown ; $i++) { 
//     printf('%s<br>',$array_d[$i]);
// }





// $NAME=$_POST[$name_t[0]];
// printf("%s",$NAME);
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANK YOU</title>

    <style>
      .container{
         background-color:white;
         color:magenta;
         padding-bottom:7%;
         padding-left:3%;
         padding-top:3%;
      }
      h1{
         padding-left:3%;
         padding-top:3%;
      }
      
    </style>
</head>
<body style="background-color: rgba(314, 71, 9, 0.978)">
    <div class="container">
         <h1><center>THANKS FOR YOUR RESPONSE!</center></h1>
            <p><center> YOUR RESPONSE HAS BEEN RECORDED.</center></p>
    </div>
</body>
</html>