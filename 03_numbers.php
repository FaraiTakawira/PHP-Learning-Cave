<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
  // PHP Required Field

 $num = 407;
 $total = 0;
 $x = $num;
 while ($X!=0){
     $rem = $x%10;
     $total = $total+$rem*$rem*$rem;
     $x = $x/10;
 }
 if($num == $total)
 {
     echo "Yes it is an armstrong number";
 }
 else{
     echo "No it is not";
 }


?>
</body>
</html>