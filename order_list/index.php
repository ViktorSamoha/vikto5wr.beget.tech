<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
\Bitrix\Main\Loader::includeModule('sale');
$parameters = [
    'filter' => [
        "USER_ID" => $USER->GetID(),
    ],
    'order' => ["DATE_INSERT" => "ASC"]
];

$dbRes = \Bitrix\Sale\Order::getList($parameters);
while ($order = $dbRes->fetch()) {
    $arOrderList[] = $order;
}
foreach ($arOrderList as $orListItm) {
    $dbBasketItems = CSaleBasket::GetList(
        array(
            "NAME" => "ASC",
            "ID" => "ASC"
        ),
        array(
            "LID" => $orListItm["LID"],
            "ORDER_ID" => $orListItm["ID"],
            "CAN_BUY" => "Y"
        ),
        false,
        false,
        array("ID", "CALLBACK_FUNC", "MODULE",
            "PRODUCT_ID", "QUANTITY", "DELAY",
            "CAN_BUY", "PRICE", "WEIGHT"),
    );
    while ($arItems = $dbBasketItems->Fetch()) {
        if (strlen($arItems["CALLBACK_FUNC"]) > 0) {
            CSaleBasket::UpdatePrice($arItems["ID"],
                $arItems["CALLBACK_FUNC"],
                $arItems["MODULE"],
                $arItems["PRODUCT_ID"],
                $arItems["QUANTITY"]);
            $arItems = CSaleBasket::GetByID($arItems["ID"]);
        }
        $arBasketItems[] = $arItems;
    }
}
?>
<pre>
    <?
    print_r($arBasketItems);
    ?>
</pre>
