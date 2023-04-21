<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel="stylesheet" href="styles.css">
<div class="blocked-coping">
    <?require_once("matchfun/matchGenereate.php");?>
</div>

    <?require_once("matchfun/matchCheckResult.php");?>

    <form method="post">
        <label>Ответ:</label>
        <input type="number" name="answer">
        <input type="submit" name="submit" value="Проверить">
    </form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>