<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-' . $arParams['TEMPLATE_THEME'] : '';
?>
<div class="ant-carousel">
    <div class="ant-carousel-hider">
        <ul class="ant-carousel-list">
            <? foreach ($arResult['ITEMS'] as $arrItem) { ?>
                <li class="ant-carousel-element"><img src="<?= $arrItem['PREVIEW_PICTURE'][SRC] ?>"
                                                      alt="<?= $arrItem['PREVIEW_PICTURE'][ALT] ?>">
                    <p><?= $arrItem['NAME'] ?></p>
                    <p><?= $arrItem['PREVIEW_TEXT'] ?></p>
                    <p><a href="<?= $arrItem['DETAIL_PAGE_URL'] ?>">Подробнее</a></p>
                </li>

            <?
            }
            ?>
        </ul>
    </div>
    <div class="ant-carousel-arrow-left">
    </div>
    <div class="ant-carousel-arrow-right">
    </div>
    <div class="ant-carousel-dots">
    </div>
</div>