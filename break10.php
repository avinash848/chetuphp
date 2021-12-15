<?php

// Copy 1 file data to another file, after every 10 chr line break, and count consonants, vowels

$filename = "org.txt";
$file = fopen($filename,"w");

$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
            a galley of type and scrambled it to make a type specimen book. It has survived not only
            five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets 
            containing Lorem Ipsum passages, and more recently with desktop publishing 
            software like Aldus PageMaker including versions of Lorem Ipsum.";
fwrite($file,$content);

fclose($file);

$file = fopen($filename,"r");

filesize($filename);

$filename2 = "copy.txt";
$file2 = fopen($filename2,"w+");

$c=0;
$l=0;
$br=0;
        while(!feof($file)):
            $data1 = fread($file,10);
            fwrite($file2,$data1."\n");
            $br++;
        endwhile;
fclose($file);
fclose($file2);

?>