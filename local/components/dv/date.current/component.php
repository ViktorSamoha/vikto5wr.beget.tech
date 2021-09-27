<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arResult['DATE'] = date('Y-m-d');

$Date1 = date('d-m-Y', mktime(0,0,0,date("n"),date("j")-7,date("Y")));
$Date2 = date('d-m-Y', mktime(0,0,0,date("n"),date("j"),date("Y")));
$arResult['$Date1']=$Date1;
$arResult['$Date2']=$Date2;
$currencyXML = file_get_contents('https://www.cbr.ru/scripts/XML_dynamic.asp?date_req1='.$Date1.'&date_req2='.$Date2.'&VAL_NM_RQ=R01235');
$currencyXML = str_replace(Array("\r\n","\n","\r"),'',$currencyXML);
preg_match_all('#<Value>(.*?)</Value>#', $currencyXML, $arValues, PREG_PATTERN_ORDER);

if(count($arValues[1])>=2) {
    $arValues[1] = array_reverse($arValues[1]);
    $arResult['kurs'] = str_replace(",",".",$arValues[1][0]);
    $arResult['diff'] = round(floatval(str_replace(",",".",$arValues[1][0])) -floatval(str_replace(",",".",$arValues[1][1])), 4);
}
$this->IncludeComponentTemplate();
?>

