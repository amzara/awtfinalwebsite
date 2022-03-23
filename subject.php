<?php 
$a[]="Physical Properties of Materials 1";
$a[]="All About Bacteria 1";
$a[]="Addition and Subtraction for Kids";
$a[]="Multiplication Table";
$a[]="What is an Engineer";
$a[]="Jessi Has a Problem";
$a[]="Technology for Kids 1";
$a[]="Technology for Kids 2";
$q = $_REQUEST['q']; 
$hint="";

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($a as $name){
        if(stristr($q, substr($name,0,$len))){
            if($hint === ""){
                $hint = $name;
            }
            else{
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>