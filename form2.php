<?php

$num1=rand(1,9);
$num2=rand(1,9);

if(isset($_POST["submit"])){
    $cresult=$_POST["cresult"];
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];

     $total=$num1+$num2;
     if($cresult==$total){
         echo "ok";
     }
     else{
         echo "not ok";
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
    <form method="post" action="#">
     <?php  echo "What is"." ".$num1." + ".$num2 ?><br>
     <input type="text" name="cresult"><br>
     <input name="num1" type="hidden" value="<?php echo $num1; ?>" /><br>
       <input name="num2" type="hidden" value="<?php echo $num2; ?>" />
     <input type="submit" value="submit" name="submit">
</form>
 </body>
 </html>

