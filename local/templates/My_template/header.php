<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><? $APPLICATION->ShowTitle() ?></title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/core-style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/components/bitrix/news.list/bootstrap_v4/ant_style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/components/bitrix/news.list/bootstrap_v4/antcarousel.js/assets/style.css');

    ?>
    <? $APPLICATION->ShowHead(); ?>

</head>

<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<div id="bread-crumbs">
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "My_bread_crumbs",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );?>
</div>
<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="<?= SITE_TEMPLATE_PATH ?>/assets/index.html"><img
                        src="<?= SITE_TEMPLATE_PATH ?>/assets/img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="index.html"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Amado Nav -->
        <nav class="amado-nav">
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "My_left_menu",
                array(
                    "ROOT_MENU_TYPE" => "left",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_THEME" => "site",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "3",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "bootstrap_v4"
                ),
                false
            ); ?>
        </nav>


        <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">
            <a href="#" class="btn amado-btn mb-15">%Discount%</a>
            <a href="#" class="btn amado-btn active">New this week</a>
        </div>
        <!-- Cart Menu -->
        <div class="cart-fav-search mb-100">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "My_mymenu_templ",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "mymenu",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "mymenu",
                    "USE_EXT" => "N"
                )
            );?>
        </div>

    </header>
    <!-- Header Area End --><? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
		