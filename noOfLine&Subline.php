<?php


//No of line and subline in string



// error_reporting(0);
function check(){

    $para="Lorem ipsum dolor .sit amet consectetur adipisicing elit. Maiores dolor natus 
    dicta praesentium, cupiditate fugit placeat fuga exercitationem magni 
    voluptates doloremque, error vel quo porro. vero recusandae accusantium in aut?";
    echo substr_count($para,".");
}

check();
?>