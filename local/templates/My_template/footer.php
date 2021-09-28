</div>
<!-- Product Catagories Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->
<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="<?= SITE_TEMPLATE_PATH ?>/assets/index.html"><img
                                    src="<?= SITE_TEMPLATE_PATH ?>/assets/img/core-img/logo2.png" alt=""></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by Colorlib
                    </p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "My_bottom_menu",
                                    array(
                                        "COMPONENT_TEMPLATE" => "My_bottom_menu",
                                        "ROOT_MENU_TYPE" => "bottom",
                                        "MENU_CACHE_TYPE" => "N",
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MAX_LEVEL" => "2",
                                        "CHILD_MENU_TYPE" => "bottom",
                                        "USE_EXT" => "Y",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false
                                );?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->
<?php

use Bitrix\Main\Page\Asset;

?>
<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery/jquery-2.2.4.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/popper.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/plugins.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/active.js');

?>
</body>

</html>