<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Registration Form</title>
    <style>
        .error{
            color:white;
            font-family: lato;
            background: yellowgreen;
            display: inline-block;
            padding: 2px 10px;
        }

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }
        h1{
            font-family: sans-serif;
            display: block;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            letter-spacing: 3px;
            color: hotpink;
            text-transform: uppercase;
        }
        label{
            width: 150px;
            display: inline-block;
            text-align: left;
            font-size: 1.5rem;
            font-family: 'lato';
        }
        input{
            border: 2px solid #ccc;
            font-size: 1.2rem;
            font-weight: 100;
            font-family: 'Lato';
            padding: 10px;
        }

        form{
            margin: 25px auto;
            padding: 20px;
            border: 5px solid #ccc;
            width: 500px;
            background: #3e7e9;
        
        }
        div.form-element{
            margin: 20px 0;
        }
        input[type=submit]::after{
            background: #fff;
            content: '';
            position: absolute;
            z-index: -1;
        }
        input[type=submit]{
            border: 3px solid;
            border-radius: 2px;
            color: ;
            display: block;
            font-size: 1em;
            font-weight: bold;
            margin: 1em auto;
            padding: 1em 4em;
            position: relative;
            text-transform: uppercase;
        }
        input[type=submit]::before{
            background: #fff;
            content: '';
            position: absolute;
            z-index: -1;
        }
        input[type = submit]:hover{
            color: #1A33FF;
        }



 
    </style>




</head>
<body>
  <?php
   $nameErr = "";
  $emailErr = "";
  $genderErr = "";
  $websiteErr = "";
  $name = "";
   $email = "";
   $website = "";
   $comment = "";
   $gender = "";

   if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(empty($_POST["name"])){
           $nameErr = "Name Field is required";
       }else {
           $name = test_input($_POST["name"]);
           if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
               $nameErr = "Only letters and white space allowed";
           }
       }
       if(empty($_POST["website"])){
           $website = test_input($_POST["website"]);
              if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                  $websiteErr = "Invalid URL";
              }
              if(empty($_POST["comment"])){
                  $comment = test_input($_POST["comment"]);
              }
              if(empty($_POST["gender"])){
                  $genderErr = "Gender is Required";
              }else{
                  $gender = test_input($_POST["gender"]);
              }
       }
       function test_input($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data  = htmlspecialchars($data);

           return $data;
       }

   }

  ?>
 <h1>Registration Form Example</h1>
  <form method="post" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"])?>">
      <b>Enter Name </b> <input type="text" name="name" value="<?php echo $name?>">
      <span class="error" > * <?php echo $nameErr;?></span>
      <br><br>

      <b>Enter Email </b> <input type="text" name="name" value="<?php echo $email?>">
      <span class="error" > * <?php echo $emailErr;?></span>
      <br><br>

      <b>Enter Number </b> <input type="text" name="name" value="<?php echo $website?>">
      <span class="error" > * <?php echo $websiteErr;?></span>
      <br><br>

      <b> Message </b> <textaree name="comment " rows="5" cols="40"><?php echo $comment;?></textaree>
      <br> <br>
      <b>Select Gender</b>
      <input type="radio" name="gender" <?php if(isset($gender) && $gender == "female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if(isset($gender) && $gender == "male") echo "checked";?> value="male">Male
      <input type="radion" name="gender" <?php if(isset($gender) && $gender == "other") echo "checked";?> value="other">Other
      <span class = "error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Register">

  </form>

   <?php
   echo "<h2> Your Input: </h2>";
   echo $name;
   echo "<br>";
   echo $email;
   echo "<br>";
   echo $website;
   echo "<br>";
   echo $comment;
   echo "<br>";
   echo $gender;


   ?>








</body>
</html>