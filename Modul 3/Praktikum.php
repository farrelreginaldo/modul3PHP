<html>
    <head>
        <title>masuk</title>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php
   $user = $_POST['username'];
   $pass = $_POST['password'];
   
   if($user == 'farrelreginaldo' && $pass == "12345678"){
        echo "Welcome back, " .$user;
   }
   else{
       echo"<h1>LOGIN FAILED</h1>";
   }
   ?>

   <br>
   <a href="WEB.php"><button type ="button" class="cancel">BACK</button></a>