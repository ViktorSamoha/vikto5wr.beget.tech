<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("GetListNewCore");
?>
    <pre>
        <?
        $res = \Bitrix\Iblock\ElementTable::getList([
            'filter' => array("ID",
                "IBLOCK_ID" => 4
            ),
            'select' => array(
                "ID",
                "IBLOCK_ID",
                "NAME",
            ),
            'order' => array("NAME"),
            'limit' => 5,
        ])->fetchAll();
        print_r($res);
        ?>
    </pre>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>