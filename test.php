<?php
//function to create unique id's 
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

echo uniqidReal();




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
   <form action="./trial.php" method="get">
    <?php
    $unique=uniqidReal();
    echo"
    <input type='hidden' name='id' value='$unique' >";


 

?>
<center><button type="submit">SUBMIT</button></center>
   </form> 

</body>
</html>


















