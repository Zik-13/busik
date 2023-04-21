<?php
    // Создание многомерного массива.
    $newMassiv = array(
      array(
          "+",
          "-",
          "*",
          "/"
      ),
      array(
          rand(0,10000),
          rand(0,10000),
          rand(0,10000),
          rand(0,10000),
          rand(0,10000),
          rand(0,10000)
      ),
    );


    $resultik = funtest($newMassiv);

    function funtest($arrays){
        $result = $arrays[1][rand(0,5)] . $arrays[0][rand(0,3)] . $arrays[1][rand(0,5)] . $arrays[0][rand(0,3)] . $arrays[1][rand(0,5)];
        echo $result;
        $trueAnswer = eval("return $result;");
        echo " = ". $trueAnswer;
        return $trueAnswer;
    }






/*
    CTRL+SHIFT+/
   $numOne = array(rand(0,100));
    $numTwo = array(rand(0,100));
    $numThree = array(rand(0,100));

    $FunLvlOne = array("+", "-");
    $FunLvlTwo = array("*", "/");
    $FunLvlThr = array("+", "-", "*", "/");
    $FunLvlThr1 = array("+", "-", "*", "/");

    $result = 0;

    checkNumbers($numOne[0], $numTwo[0], $numThree[0], $FunLvlThr[rand(0,3)], $FunLvlThr1[rand(0,3)]);

    function checkNumbers($num1, $num2, $num3, $pow, $pow2){
        (string) $resultik = $num3 . $pow . $num2 . $pow2 . $num1; // Вывод примера в текстовый формат.
        echo $resultik;
        (int)$answer = eval("return $resultik;"); // Получаем ответ по примеру.
        echo "=".$answer;
    }*/



    // (int) $result =  $numOne[0] .  $matcFun[rand(0,4)] . $numTwo[0] . $matcFun[rand(0,4)] . $numThree[0]; // Сборка примера
    // https://youtu.be/syqMx8e1g4U?t=145 link with lesson
?>