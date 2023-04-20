<?php

    $numOne = array(rand(0,10000));
    $numTwo = array(rand(0,10000));
    $numThree = array(rand(0,10000));
    $matcFunLvlOne = array("+", "-");
    $matcFunLvlTwo = array("*", "/");
    $trueAnswer = 0;
    $result = 0;
    funchek($numOne[0], $numTwo[0], $numThree[0], $matcFunLvlOne[0], $result);
    echo $result;

    function funchek($num1, $num2, $num3, $mat, $resl)
    {
        switch ($mat){
            case "+":
                $resl = $num1 + $num2 + $num3;
                break;
            case "-":
                $num1 - $num2 - $num3;
                break;
                return $resl;
        }
    }



    // (int) $result =  $numOne[0] .  $matcFun[rand(0,4)] . $numTwo[0] . $matcFun[rand(0,4)] . $numThree[0]; // Сборка примера
    // https://youtu.be/syqMx8e1g4U?t=145 link with lesson

    echo $result;
?>