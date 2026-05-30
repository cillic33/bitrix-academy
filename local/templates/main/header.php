<?php
B_PROLOG_INCLUDED === true || die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header_visible.php";
\Bitrix\Main\Page\Asset::getInstance()->addCss("/local/templates/.default/swiper-main.css");
\Bitrix\Main\Page\Asset::getInstance()->addJs("/local/templates/.default/swiper-main.js");
?>