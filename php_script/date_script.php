<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
    if (CModule::IncludeModule("iblock")) {
        $arSelect = array("ID", "DATE_CREATE");
        $arFilter = array(
            "IBLOCK_ID" => IntVal(4),
            "ACTIVE_DATE" => "Y",
            "ACTIVE" => "Y",
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
            $curDate = $arItem["DATE_CREATE"];
            $stmp = MakeTimeStamp($curDate, "DD.MM.YYYY HH:MI:SS");
            $arrAdd = array(
                "DD"	=> 1,
                "MM"	=> 0,
                "YYYY"	=> 0,
                "HH"	=> 0,
                "MI"	=> 0,
                "SS"	=> 0,
            );
            $stmp = AddToTimeStamp($arrAdd, $stmp);
            $el = new CIBlockElement;
            $arLoadProductArray= Array(
                "DATE_ACTIVE_FROM" => ConvertTimeStamp($stmp, "FULL"),
            );
            $PRODUCT_ID = $arItem["ID"];
            $arItem = $el->Update($PRODUCT_ID, $arLoadProductArray);
        }
    }
    ?>
