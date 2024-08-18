<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels=["a","e","i","o","u"];
foreach($strings as $string){
    $count=0;
    for($i=0;$i<strlen($string);$i++){
        for($j=0;$j<count($vowels);$j++){
            if($string[$i]==$vowels[$j]){
                $count++;
            }
        }
    }
    echo "Original String: ".$string.", Vowel Count: ".$count.", Reversed String: ".strrev($string)."\n";  
}