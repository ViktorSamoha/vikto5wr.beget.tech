<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Страница обратной связи");
$APPLICATION->SetPageProperty("TITLE", "Страница обратной связи");
$APPLICATION->SetPageProperty("description", "Страница обратной связи");
?>

<?$APPLICATION->IncludeComponent(
	"dv:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "sale@vikto5wr.beget.tech",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение отправлено.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL", "PHONE"),
		"USE_CAPTCHA" => "Y",
		"AJAX_MODE" =>"Y",
	)
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>