<?php

$first_variable = "I did not him!";
$second_variable = "oh! Hi Mark!";
$word_pos = strpos($second_variable , Mark);
$var_first = strlen ($first_variable);
$var_second = strlen ($second_variable);


echo "1st He says: '";
echo $first_variable;
echo "'<br></br>";
echo "and then he said: '";
echo $second_variable;
echo "'<br></br>";

echo "The number of characters in the first string is ";
echo $var_first;
echo "<br></br>";

echo "The number of characters in the second string is ";
echo $var_second;
echo "<br></br>";

echo "The name 'Mark' starts at position ";
echo $word_pos +1;
echo " in the second string";
echo "<br></br>";

echo "We can concatenate two strings: <br/></br> ";
echo ($first_variable)."". $second_variable ."\n";


?>