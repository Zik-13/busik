<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("oUr Super Page");
?>
<link rel="stylesheet" href="styles.css">
<div class="blocked-coping">
    <?
    $newMassiv = array(
        array(
            "+",
            "-",
            "*",
            "/"
        )
    );

    $resultik = [];


    if (!isset($_POST['question'])) {
        $resultik = funtest($newMassiv);
    } else {
        if ($_POST['trueAns'] !== $_POST['answer'] && empty($_POST['answer'])) {
            echo 'Не правильно!';
            $_POST['question'] = '';
            $resultik = funtest($newMassiv);
        } else {
            echo 'Ты угадал!';
            echo 'da ebat tvoy rot';
        }
    }

    function funtest($arrays){

        $result = rand(0,10000) . $arrays[0][rand(0,3)] . rand(0,10000) . $arrays[0][rand(0,3)] . rand(0,10000);
        echo $result;
        $trueAnswer = eval("return $result;");
        $arResult['question'] = $result;
        $arResult['trueAnswer'] = $trueAnswer;
        return $arResult;
    }

    ?>

    <form method="POST">
        <input type="hidden" name="question" value="<?=$resultik['question']?>">
        <input type="hidden" name="trueAns" value="<?=$resultik['trueAnswer']?>">
        <input type="text" name="answer">
        <input type="submit">
    </form>

</div>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>