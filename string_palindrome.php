
<?php


                    //String palimdrom




function strpalindrome(){

    $a="madam";
    $b=strrev($a);
    $reverse=str_split($b);

    $palin=" ";

    foreach( $reverse as $value){
        $palin=$value;
    }
    echo ("<p style='color:red;'>$a</p>");
    if($a=$palin){
        echo " is palindrome";
    }
    else{
        echo " is palindrome";
    }
}

strpalindrome();
?>