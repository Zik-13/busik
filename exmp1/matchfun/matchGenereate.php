<?php

    $numOne = array(rand());
    $numTwo = array(rand());
    $numThree = array(rand());

    $FunLvlOne = array("+", "-");
    $FunLvlTwo = array("*", "/");
    $FunLvlThr = array("+", "-", "*", "/");

    $result = 0;

    checkNumbers($numOne[0], $numTwo[0], $numThree[0], $FunLvlOne[rand(0,1)]);

    function checkNumbers($num1, $num2, $num3, $pow){
        $resultik = (string)$num3 . (string)$pow . (string)$num2 . (string)$pow . (string)$num1;
        echo $resultik;
        $answer = $resultik; // Функция имеет ошибку, выводит все ввиде строки.
        echo "=" . $answer;
    }



    // (int) $result =  $numOne[0] .  $matcFun[rand(0,4)] . $numTwo[0] . $matcFun[rand(0,4)] . $numThree[0]; // Сборка примера
    // https://youtu.be/syqMx8e1g4U?t=145 link with lesson


    /* Ответ от GPT

    $str = "10+10+10";
$result = eval("return $str;");
echo $result; // выведет 30


Однако, использование функции eval() может быть опасным, если в строке будут содержаться вредоносные команды. Лучше использовать более безопасные способы, например, функцию evalMath() из библиотеки math.php:

require_once('math.php');
$str = "10+10+10";
$result = evalMath($str);
echo $result; // выведет 30


В этом случае необходимо установить библиотеку math.php.
*/
?>