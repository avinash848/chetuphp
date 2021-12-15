<?php
    //   1 To 100 Prime number in Function


   function oneTO100(){
    //   $num=100;
    //    for($i=2; $i<=$num; $i++){
    //        $isPrime=true;
    //       for($j=2; $j<($i/2); $j++){
    //           if($i%$j==0){
    //               $isPrime=false;
    //           }
    //       }
    //        if($isPrime==true){
    //            echo "$i this is prime number<br>";
    //        }
    //    }

    $num=100;
    for($i=2; $i<=$num; $i++){
        $isprime=true;
        for($j=2; $j<($i/2); $j++){
           if($i%$j==true){
               $isprime=false;
           }
        }
        if($isprime==true){
            echo "$i this is prime number<br>";
        }
        else{
            echo "$i Not prime number<br>";
        }
    } }
   oneTo100();
?>
