<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая страница");
$APPLICATION->SetPageProperty("TITLE","Тестовая страница");
$APPLICATION->SetPageProperty("keywords","Тестовая страница");
$APPLICATION->SetPageProperty("description","Тестовая страница");
?>
    <p>Тестовая страница, созданная через ИДЕ</p>
<? $APPLICATION->IncludeComponent(
    "dv:date.current",
    ".default",
    Array(
    ),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>