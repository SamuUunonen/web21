<?php
$a=2;
if ($a ==1) {
    echo "this is tru <br>";
    echo "one more line";
}
else {
    echo "this is false";
}

$d = date("D");
if ($d == "Fri") {
    echo "Have a nice Friday";
}
elseif ($d == "Sun") {
    echo "Have a nice Sunday";
}
elseif ($d == "Mon") {
    echo "This is the first wrking day";
}
else {
    echo "Have a nice day<br><hr>";
}


$x = 5;
switch($x) {
    case 1:
        echo "This is case 1";
        break;
    case 2:
        echo "This is case 2";
        break;
    case 3:
        echo "This is case 3";
        break;
    default:
        echo "This is default case<br><hr>";
}


$i=0;
do {
    $i++;
    echo "The numbber is ". $i . "<br> />";
} while ($i <= 5);

for ($i=1; $i<=5; $i++) 
{
    echo "For Loop: The number is ". $i . "<br />";
}


$x = array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br> />";
}

?>