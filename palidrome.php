<?php

    //    Check the no is palimdrome or not

function palindrome(){
    $num= 221;
    $rev=0;
     $n=$num;
    while($num!=0){
        $r=$num%10;
        $rev=$rev*10+$r;
        $num=floor($num/10);
    }
    if($rev==$n){
        echo "$n This is palindrome number";
    }
    else{
        echo "$n Not palindrome number";
    }
}
palindrome();   
?>