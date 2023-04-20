<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<link rel="stylesheet" href="styles.css">
<div class="blocked-coping">
    <?
        require_once("matchfun/matchGenereate.php");
    ?>
</div>

    <div>
        <form method="post">
            <p>Введи ответ =) </p><input name="answer" required>
            <p></p><input type="submit" value="Проверить"></p>
        </form>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>