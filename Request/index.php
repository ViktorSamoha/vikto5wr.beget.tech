<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/Request/msAuth.php");
require 'vendor/autoload.php';

$APIURL = 'https://online.moysklad.ru/api/remap/1.1/entity/product';
$APIKEY = 'YWRtaW5AbWFuZ28g0LvQsNCy0LrQsDoxN2M2ZjY1NGU4';
$Auth = new msAuth($APIKEY, $APIURL);
$res = $Auth->getRequest();
$listItm = $Auth->prodCycle($res);
$Auth->initBitrixEl($listItm);
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>