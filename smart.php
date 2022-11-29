<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 
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
   $uid=$_GET['id'];

   $sql1="SELECT `TEXT FIELDS`,`NUMERIC FIELDS`,`DROPDOWN FIELDS`,`CHECKBOX FIELDS`,`BULLET FIELDS` FROM form9696 WHERE `ID`='$uid'";
   $result1=mysqli_query($conn,$sql1);
   $row1=mysqli_fetch_array($result1,MYSQLI_NUM);
   
   $num_text=$row1[0];
   $num_num=$row1[1];
   $num_dropdown=$row1[2];
   $num_checkbox=$row1[3];
   $num_bullet=$row1[4];
  
   
//CREATING VARIABLES
$not=$_POST['namet'];
$non=$_POST['namen'];
// $nod=$_POST['named'];



$org_name=$_POST['org_name'];


if($num_checkbox>0){
$noc=$_POST['namec'];
$value_c=$_POST['valuec'];
$value_c1=implode(",",$value_c);
$noc1=implode(",",$noc);
}
else{
    $noc='';
    $value_v='';
    $value_c1='';
    $noc1='';
}
if($num_bullet>0){
    $nob=$_POST['nameb'];
    $value_b=$_POST['valueb'];
    $value_b3=implode(",",$value_b);
    $nob1=implode(",",$nob);
    }
    else{
        $nob='';
        $value_b='';
        $value_b3='';
        $nob1='';
    }
    if($num_dropdown>0){
        $nod=$_POST['named'];
        $value=$_POST['value'];
        $value1=implode(",",$value);
        $nod1=implode(",",$nod);
        }
        else{
            $nod='';
            $value='';
            $value1='';
            $nod1='';
        }
        

// $email=$_POST['email'];
// $fno=$_POST['fno'];

$not1=implode(",",$not);
$non1=implode(",",$non);

// $nob1=implode(",",$nob);


// $value_b3=implode(",",$value_b);

// echo ($value[0])[0];

// session_start();
//creating session array 
// $_SESSION['email']=$email;
// $_SESSION['fno']=$fno;

//echo $not,$nod,$non;
$sql="INSERT INTO names (`NAME OF TEXT FIELDS`, `NAME OF NUMERIC FIELDS`, `NAME OF DROPDOWN FIELDS`,`NAME OF CHECKBOX FIELDS`,`NAME OF BULLET FIELDS`,`ORGANISATION NAME`,`ID`,`VALUED`,`VALUEC`,`VALUEB`) VALUES ('$not1', '$non1', '$nod1','$noc1','$nob1','$org_name','$uid','$value1','$value_c1','$value_b3')";

$result=mysqli_query($conn,$sql);
if($result){
    // echo "successfully inserted";

}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<a href='./services2.php?id=$uid'>click me to gennerate form </a>";
    ?>
</body>
</html>