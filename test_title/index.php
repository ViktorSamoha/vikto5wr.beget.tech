<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая страница");
$APPLICATION->SetPageProperty("TITLE", "Тестовая страница");
$APPLICATION->SetPageProperty("keywords", "Тестовая страница");
$APPLICATION->SetPageProperty("description", "Тестовая страница");
?><?$APPLICATION->IncludeComponent(
	"bitrix:photo.random",
	"",
	Array(
		"CACHE_GROUPS" => "Y",
        "SET_TITLE"=>"Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS" => array("2"),
		"IBLOCK_TYPE" => "catalog",
		"PARENT_SECTION" => ""
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:photo.random",
	"",
	Array(
		"CACHE_GROUPS" => "Y",
        "SET_TITLE"=>"Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS" => array("2"),
		"IBLOCK_TYPE" => "catalog",
		"PARENT_SECTION" => ""
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:photo.random",
	"",
	Array(
		"CACHE_GROUPS" => "Y",
        "SET_TITLE"=>"Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"IBLOCKS" => array("2"),
		"IBLOCK_TYPE" => "catalog",
		"PARENT_SECTION" => ""
	)
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>