<?php
if(isset($_POST['submit'])){
    $answer = $_POST['answer'];
    if(empty($answer)){
        echo "Пожалуйста, введите email";
    } else {
        if($answer !== $resultik){
            echo "Ответ неверный";
        } else {
            echo "Ответ верный";
        }
    }
}

/*echo "<pre>";
print_r($_POST);
print_r($resultik);
echo "</pre>";*/