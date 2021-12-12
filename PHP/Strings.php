<?php
$str = "This is a string. ";
echo $str;
$lenn = strlen($str);
echo "<br>";
echo "The length of string is ".$lenn .".   Thankyou <br>";
echo "The number of word in this string is : ".str_word_count($str). "<br> Thankyou <br>";
echo "The reversed string is :".strrev($str)." <br> Thankou..! <br>";
echo "The position of is in the string is :".strpos($str,"is"). "  Thankyou..!";
echo "<br>The replaced string is: ". str_replace("is","at", $str) . " Thankyou <br>";

?>