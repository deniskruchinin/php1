<?php
$a = 6;
$b = 3;
echo'b='.$b ."<br>" .'a='.$a;
echo "<br>"."<br>"."<br>";
$a=$a+$b-$b=$a; //честно спер, хотя вначале именно такой вариант и хотел но чет не хватило 
echo'b='.$b ."<br>" .'a='.$a;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        $a = 5;
        $b = '05';
        <li> var_dump($a == $b); // Почему true?  Происходит неявное приведение типа данных переменной $b </li>
        <li> var_dump((int)'012345'); // Почему 12345? Не уверен, но возможно первый символ  '0' преобразуется в null   </li>
        <li> var_dump((float)123.0 === (int)123.0); // Почему false?  Тождественное равенство, сравнение типов данных и их значений </li>
        <li> var_dump((int)0 === (int)'hello, world');   // Почему true? Если певый символ не цифра то преобразуется в 0 
        </li>
    </ul>



    <a href="./minimalistica/">задание4</a>
</body>

</html>