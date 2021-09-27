<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arResult['DATE'] = date('Y-m-d');

$curDate = date('d-m-Y', mktime(0,0,0,date("n"),date("j")+1,date("Y")));
$curDate2 = date('d-m-Y', mktime(0,0,0,date("n"),date("j")-10,date("Y")));

$currencyXML = file_get_contents('http://www.cbr.ru/scripts/XML_dynamic.asp?date_req1='.$curDate2.'&date_req2='.$curDate.'&VAL_NM_RQ=R01235');

$currencyXML = str_replace(Array("\r\n","\n","\r"),'',$currencyXML);

preg_match_all('#<Value>(.*?)</Value>#', $currencyXML, $arValues, PREG_PATTERN_ORDER);

if(count($arValues[1])>=2) {

	$arValues[1] = array_reverse($arValues[1]);

    $arResult['KURS'] = str_replace(",",".",$arValues[1][0]);

    $arResult['DIFF'] = round(floatval(str_replace(",",".",$arValues[1][0])) - floatval(str_replace(",",".",$arValues[1][1])), 4);
}
$this->IncludeComponentTemplate();
?>

