<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("GetList");
?>
    <pre>
        <?
        if (CModule::IncludeModule("iblock")) {
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_*");
            $arFilter = array(
                "IBLOCK_ID" => IntVal(4),
                "ACTIVE_DATE" => "Y",
                "ACTIVE" => "Y",
                #"=DATE_ACTIVE_FROM" => date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(12,46,51,9,30,2021))
                "=DATE_ACTIVE_FROM" => array(false, ConvertTimeStamp(false, "FULL"))
            );
            $res = CIBlockElement::GetList(
                array(),
                $arFilter,
                false,
                false,
                $arSelect
            );
            while ($ob = $res->GetNextElement()) {
                $arItem = $ob->GetFields();
                $arItem["PROPERTIES"] = $ob->GetProperties();
                $arResult[] = $arItem;
            }
            print_r($arResult);
        }
        ?>
    </pre>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>