<?php

function palindrome(){
    $num= 123;
    $rev=0;
     $n=$num;
    while($num!=0){
        $r=$num%10;
        $rev=$rev*10+$r;
        $num=floor($num/10);
    }
    if($rev==$n){
        echo "$rev ";
    }
    else{
        echo "$rev ";
    }
}
palindrome();   


?>