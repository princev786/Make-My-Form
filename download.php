<?php
    $conn=mysqli_connect("localhost","root","","customer999");
    $id=$_GET['id'];
    $sql="SELECT `ORGANISATION NAME` FROM `names` WHERE `ID`='$uid'";
    $result=mysqli_query($conn,$sql);
    $tbname=mysqli_fetch_array($resut,MYSQLI_NUM);

    // MAKING TABLE OF DATA

    $sql3="SELECT * FROM `$tbname`";
    $result3=mysqli_query($conn,$sql3);
    
?>