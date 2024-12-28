<?php
$name = "Jahidul";
$string01 = "My Name is $name";

echo $string01;

//Heredoc

$heredoc= <<<EOD

Hello How are You?
I Am Fine. And You?
I am Also Fine.

EOD;

print $heredoc;


//PHP ASCII

echo ord('A');
echo PHP_EOL;  //PHP_EOL   function will work for End Of Line.
echo ord('a');
echo PHP_EOL;
echo ord('A');
echo PHP_EOL;
echo chr(98);


echo PHP_EOL;

//Accessing Character within a string

$string = "Hello World";
echo $string[0];
echo PHP_EOL;
echo $string[-5];

echo PHP_EOL;
//Substring and Strlen Function

$substring = "Hello World";
$length = strlen($substring);
echo substr($substring,$length-5);//$substring,1,5
echo PHP_EOL;
//String Reverse

$str_reverse = "Hello Jahid";

//Example 1
$length = strlen($str_reverse)-1;
for($i=$length;$i>=0;$i--){
    echo $str_reverse[$i];
    
}
echo PHP_EOL;

//Example 2
$str_rev2 = "Hello World";
echo strrev($str_rev2);