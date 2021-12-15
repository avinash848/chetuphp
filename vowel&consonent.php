 


<?php
    
// $file = fopen("file1.txt","r") or die("no such file");
//   $a=0;
//   $b=0;
//   $c=0;
//   $d=0;
//   $e=0;
//   $f=0;
//   $g=0;
//  while(!feof($file)){
//     $ch = fgetc($file);
//     if($ch>='a' && $ch<='z'){
//         if($ch=='a' || $ch=='e' $ch=='i' $ch=='o' $ch=='u')
//             $a++;
//         else
//             $b++;
//     }
//     elseif($ch=='A' && $ch=='Z'){
//         if($ch=='A' || $ch=='E' $ch=='I' $ch=='O' $ch=='U')
//            $c++;
//        else
//           $d++;
//     }
//     elseif($ch=='0' || $ch=='9'){
//         $e++;
//       else
//         $f++;
//     }
//     elseif($ch==' '){
//             $f++;
//         else
//             $g++;
//     }
//  }
//  echo ("lower case vowel =$a<br>");
//  echo ("lower case consonent =$b<br>");
//  echo ("Upper case vowel =$c<br>");
//  echo ("Upper case consonent =$d<br>");
//  echo ("Digit =$e<br>");
//  echo ("Sapce =$f<br>");
//  echo ("Special charecter =$g<br>");
//  fclose($file);




$file = fopen("file1.txt","r") or die("No Such File");
$a=0;
$b=0;
$c=0;
$d=0;
$e=0;
$f=0;
$g=0;
while(!feof($file)){
    $ch = fgetc($file);
    if($ch>='a' && $ch<='z'){
        if($ch=='a' || $ch=='e' || $ch=='i' || $ch=='o' || $ch=='u')
        $a++;
        else
        $b++;
    }
    elseif($ch>='A' && $ch<='Z'){
        if($ch=='A' || $ch=='E' || $ch=='I' || $ch=='O' || $ch=='U')
        $c++;
        else
        $d++;
    }
    elseif($ch>='0' && $ch<='9')
    $e++;
    elseif($ch==' ')
    $f++;
    else
    $g++;
}
echo("Lower Case Vowels = $a<br>");
echo("Lower Case Consonent = $b<br>");
echo("Upper Case Vowels = $c<br>");
echo("Upper Case Consonent = $d<br>");
echo("Digit = $e<br>");
echo("Space = $f<br>");
echo("Special Character = $g<br>");
fclose($file);
  




?>