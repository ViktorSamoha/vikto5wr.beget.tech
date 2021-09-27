<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая страница");
$APPLICATION->SetPageProperty("TITLE","Тестовая страница");
$APPLICATION->SetPageProperty("keywords","Тестовая страница");
$APPLICATION->SetPageProperty("description","Тестовая страница");
?>
    <p>Тестовая страница, созданная через ИДЕ</p>
    <?"DESCRIPTION = ". $APPLICATION->GetPageProperty("description");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>