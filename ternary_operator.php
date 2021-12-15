<?php

/*
   $a=2;
   $b=3;
   $c=4;
   

   $s =($a>$b)?(($a>$c)?"A is greatest":"C is greatest"):(($b>$c)?"B is greatest":"C is greatest");
    
   echo $s;

   */






   $a=2;
   $b=3;
   $c=4;
   $d=5;
   

   $s =($a>$b && $a>$c && $a>$d)?  $a:  (($b>$c && $b>$d)?:($c>$d ? $c:$d));
    
   echo "largest number".$s;

   


      
 /*
  $a=2;
  $b=3;
  $c=4;
  $d=5;
  $e=6;

  $s =($a>$b)?(($a>$c)?"A is greatest":"C is greatest"):(($b>$c)?"B is greatest":"C is greatest"):
      ($c>$d)?"C is greater":"D is greater"):($d>$e)?"D is greater":"E is greater");
   
  echo $s;

 */




// $a=2;
// $b=3;
// $c=4;
// $d=5;
// $e=6;
// $f=7;

// $s =($a>$b)?(($a>$c)?"A is greatest":"C is greatest"):(($b>$c)?"B is greatest":"C is greatest"):
//     ($c>$d)?"C is greater":"D is greater"):($d>$e)?"D is greater":"E is greater"):($e>$f)?"E is greater":"F is greater");
 
// echo $s;









  







   
?>