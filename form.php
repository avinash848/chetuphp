<?php
//  $num1=12;
//  $num2=1;
 $num1=rand(9,1);
 $num2=rand(1,9);

 if(isset($_POST["submit"])){
     $Cresult=$_POST["Cresult"];
     $num1=$_POST["num1"];
     $num2=$_POST["num2"];

     $total=$num1 +$num2;
     if($Cresult ==$total){
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
    <form action="#" method="POST">
        <?php echo "What is"." ".$num1."+".$num2 ?><br><br>
       <input name="Cresult" type="text"><br><br>
       <input name="num1" type="hidden" value="<?php echo $num1; ?>" /><br>
       <input name="num2" type="hidden" value="<?php echo $num2; ?>" />
       <input value="submit" type="submit" name="submit"/>
     </form>
</body>
</html>
