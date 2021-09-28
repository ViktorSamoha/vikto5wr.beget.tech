<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
CUtil::InitJSCore(array('fx'));
?>
<div class="news-detail<?=$themeClass?>">
	<div class="mb-3" id="<?echo $this->GetEditAreaId($arResult['ID'])?>">

		<?if($arParams["DISPLAY_PICTURE"]!="N"):?>
			<? if ($arResult["VIDEO"])
			{
				?>
				<div class="mb-5 news-detail-youtube embed-responsive embed-responsive-16by9" style="display: block;">
					<iframe src="<?
					echo $arResult["VIDEO"] ?>" frameborder="0" allowfullscreen=""></iframe>
				</div>
				<?
			}
			else if ($arResult["SOUND_CLOUD"])
			{
				?>
				<div class="mb-5 news-detail-audio">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?
					echo urlencode($arResult["SOUND_CLOUD"]) ?>&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</div>
				<?
			}
			else if ($arResult["SLIDER"] && count($arResult["SLIDER"]) > 1)
			{
				?>
				<div class="mb-5 news-detail-slider">
					<div class="news-detail-slider-container" style="width: <? echo count($arResult["SLIDER"]) * 100 ?>%;left: 0%;">
						<? foreach ($arResult["SLIDER"] as $file):?>
							<div style="width: <? echo 100 / count($arResult["SLIDER"]) ?>%;" class="news-detail-slider-slide">
								<img src="<?= $file["SRC"] ?>" alt="<?= $file["DESCRIPTION"] ?>">
							</div>
						<? endforeach ?>
						<div style="clear: both;"></div>
					</div>
					<div class="news-detail-slider-arrow-container-left">
						<div class="news-detail-slider-arrow"><i class="fa fa-angle-left"></i></div>
					</div>
					<div class="news-detail-slider-arrow-container-right">
						<div class="news-detail-slider-arrow"><i class="fa fa-angle-right"></i></div>
					</div>
					<ul class="news-detail-slider-control">
						<? foreach ($arResult["SLIDER"] as $i => $file):?>
							<li rel="<?= ($i + 1) ?>" <? if (!$i)
								echo 'class="current"' ?>><span></span></li>
						<? endforeach ?>
					</ul>
				</div>
				<?
			}
			else if ($arResult["SLIDER"])
			{
				?>
				<div class="mb-5 news-detail-img">
					<img
						class="card-img-top"
						src="<?= $arResult["SLIDER"][0]["SRC"] ?>"
						alt="<?= $arResult["SLIDER"][0]["ALT"] ?>"
						title="<?= $arResult["SLIDER"][0]["TITLE"] ?>"
					/>
				</div>
				<?
			}
			else if (is_array($arResult["DETAIL_PICTURE"]))
			{
				?>
				<div class="mb-5 news-detail-img">
					<img
						class="card-img-top"
						src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
						alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
						title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
						/>
				</div>
				<?
			}
			?>
		<?endif?>

		<div class="news-detail-body">

			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h3 class="news-detail-title"><?=$arResult["NAME"]?></h3>
			<?endif;?>

			<div class="news-detail-content">
				<?if($arResult["NAV_RESULT"]):?>
					<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
					<?echo $arResult["NAV_TEXT"];?>
					<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
				<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
					<?echo $arResult["DETAIL_TEXT"];?>
				<?else:?>
					<?echo $arResult["PREVIEW_TEXT"];?>
				<?endif?>
			</div>

		</div>

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "bootstrap_v4",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "N",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "PREVIEW_PICTURE",
                    3 => "DETAIL_TEXT",
                    4 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "4",
                "IBLOCK_TYPE" => "my_news",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MEDIA_PROPERTY" => "",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "10",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "SEARCH_PAGE" => "/search/",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SLIDER_PROPERTY" => "",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "",
                "STRICT_SECTION_CHECK" => "N",
                "TEMPLATE_THEME" => "blue",
                "USE_RATING" => "N",
                "USE_SHARE" => "N",
                "COMPONENT_TEMPLATE" => "bootstrap_v4"
            ),
            false
        ); ?>

	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<div class="news-detail-date"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></div>
	<?endif?>
	</div>
</div>
<script type="text/javascript">
	BX.ready(function() {
		var slider = new JCNewsSlider('<?=CUtil::JSEscape($this->GetEditAreaId($arResult['ID']));?>', {
			imagesContainerClassName: 'news-detail-slider-container',
			leftArrowClassName: 'news-detail-slider-arrow-container-left',
			rightArrowClassName: 'news-detail-slider-arrow-container-right',
			controlContainerClassName: 'news-detail-slider-control'
		});
	});
</script>
