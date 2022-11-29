
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        #button {
            background-color: skyblue;
            border: none;
            padding: 5px;
            width: 10%;
            height:30px;
            cursor: bubble;
            margin:7px;
        }

        #button1 {
            background-color: red;
            border: none;
            padding: 5px;
            width: 10%;
            height:30px;
            margin:7px;
        }

        .sample1 {
            /* padding:100px 800px 30px;*/
            background-color: grey;
            font-family: algerian caliber Times new roman;
            word-spacing: 5px;
            font-size: 100%;
            color: black;
            text-align: center;
            border: 30px;
            border-radius: 9px;
        }

        .edu {
            text-align: center;
        }
        input{
            border-radius:11px;
            border:blue 1px;
             height:21px;
             size:40;
        }
        select
        {
        width: 21%;
         border-radius:11px;
         border:blue 1px;
        height:21px;
        }
    </style>
</head>

<body>
    <div class="sample1">
        <form action="./check.php" method="POST">
            <header>
                <center>
                    <font color="gold"><h3> <marquee behavior="alternate">WELCOME! TO THE SIGNUP PAGE</marquee></h3> 
                </center>
            </header>
            <p>
            <h3>
                <font color="black"> NAME :*
            </h3>
            <input type="text" name="NAME" id="name" size=40 required>
            </p>

            <p>
            <h3>EMAIL :*</h3><input type="email" name="EMAIL" id="EMAIL" size=40 required>
            </p>

            <p>
            <h3>
                <font color="black"> PASSWORD :*
            </h3>
            <input type="password" name="PASSWORD" id="PASSWORD" size=40 required>
            </p>

            <p>
            <h3>Gender :*</h3>
            <select name="GENDER" id="gender" >
                <option value="">---SELECT YOUR GENDER---</option>
           <option value="MALE">MALE</option>
           <option value="FEMALE">FEMALE</option>
           <option value="OTHERS">OTHERS</option>
           </select>
            </p>
            <p>
            <h3>
                <font color="black"> CONTACT NO. :*
            </h3>
            <input type="phone" name="PHONENO" id="PHONENO" size=40 required>
            </p>

            <p>
            <h3>
                <font color="black"> City :*
           </h3><input type="text" name="CITY" id="CITY" size=40 required>
            </p>
            
          
           <br>

            <input type="submit" value="submit" id=button >

            <input type="reset" value="reset" id=button1>


        </form>
    </div>
</body>

</html>