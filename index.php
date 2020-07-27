<?php
//задание 1 

$a = rand(-10, 10);
$b =  rand(-10, 10);
$c = null;

if ($a >= 0 && $b >= 0) {
    $c = "-";
    echo "$a" . "$c" . "$b" . "=" . ($a - $b);
} elseif ($a < 0 && $b < 0) {
    $c = "*";
    echo "$a" . "$c" . "$b" . "=" . ($a * $b);
} elseif ($a >= 0 && $b < 0 || $a < 0 && $b >= 0) {
    $c = "+";
    echo "($a)" . "$c" . "($b)" . "=" . ($a + $b);
};


echo "<br/>" . "задание 2" . "<br/>";;
//задание 2 

function f($n, $Num)
{
    echo " " . "$n";
    if ($n >= $Num) return;
    f($n + 1, $Num);
}
f(0, 15);


echo "<br/>" . "задание 3" . "<br/>";
//задание 3

function sum($a, $b)
{
    return $a + $b;
};
function subtraction($a, $b)
{
    return $a - $b;
};
function multiplication($a, $b)
{
    return $a * $b;
};
function division($a, $b)
{
    return $a / $b;
};
echo sum(2,2);


echo "<br/>" . "задание 4" . "<br/>";
//задание 4

function arithmetic($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "+":
            echo sum($arg1, $arg2);
            break;
        case "-":
            echo sum($arg1, $arg2);
            break;
        case "*":
            echo sum($arg1, $arg2);
            break;
        case "/":
            echo sum($arg1, $arg2);
            break;
        default:
        echo "ошибка";
            break;
    };
};
arithmetic(1,3,"+");

