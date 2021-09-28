<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$arrCount = count($arResult['ITEMS']);
$i=0;
foreach ($arResult['ITEMS'] as $key => $arrItem){
    $i++;
    if ($i == $arrCount) {
        unset($arResult['ITEMS'][$key]);
    }
}
?>
