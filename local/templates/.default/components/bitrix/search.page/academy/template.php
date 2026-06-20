<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
/** @global CMain $APPLICATION */
$this->setFrameMode(true);

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Context;
use Bitrix\Main\UI\Extension;

$request = Context::getCurrent()->getRequest();

?>
<div class="search-page my-5">
    <div class="search-result">
        <?php if ($arResult["REQUEST"]["QUERY"] !== false && is_array($arResult["SEARCH"]) && count($arResult["SEARCH"]) > 0): ?>
            <?php
            $APPLICATION->setTitle(Loc::getMessage("ACADEMY_SEARCH_SUCCESS_PREFIX") . " «" . $request->get("q") . "»");
            ?>
            <?php if ($arParams["DISPLAY_TOP_PAGER"] == "Y"
                && $arParams["AJAX_MODE"] == "N"): ?>
                <?= $arResult["NAV_STRING"] ?>
            <?php endif; ?>

            <div id="search-items" class="row row-gap-5">
                <?php foreach ($arResult["SEARCH"] as $searchItem): ?>
                    <div class="main__col-12 col-sm-6 col-lg-3 col-xl-4">
                        <a class="catalog-product" href="<?= $searchItem["URL"] ?>">
                            <?php if ($searchItem["PREVIEW_PICTURE"]): ?>
                                <div class="image image_size_410x190 text-center">
                                    <div class="image__inner">
                                        <img class="img img_lazy lazyload"
                                             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                             alt="image"
                                             data-src="<?= $searchItem["PREVIEW_PICTURE"]["SRC"] ?>"></div>
                                </div>
                            <?php endif; ?>
                            <div class="catalog-product__name"><?= $searchItem["TITLE_FORMATED"] ?></div>
                            <?php if ($searchItem["PARAM1"] == "products"): ?>
                                <div class="catalog-product__price"><?= $searchItem["PRICE"]["DISPLAY_PRICE"] ?></div>
                            <?php endif; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] == "Y" && $arParams["AJAX_MODE"] == "N" && $arResult["NAV_RESULT"]->NavPageCount > 1): ?>
                <?= $arResult["NAV_STRING"] ?>
            <?php endif; ?>

            <?php if ($arParams["AJAX_MODE"] == "Y" && $arResult["NAV_RESULT"]->NavPageCount > 1):
                Extension::load("ajax");
                /**
                 * @var CIBlockResult $navResult
                 */
                $navResult = $arResult["NAV_RESULT"];
                ?>
                <nav class="d-flex gap-3 justify-content-between mt-4 pt-lg-3">
                    <a class="btn btn-outline-primary rounded-pill flex-grow-1 flex-xl-grow-0 news-ajax-btn" role="button"
                       href="javascript:void(0)"><?= Loc::getMessage("ACADEMY_AJAX_BTN") ?></a>
                </nav>
                <script>
                    BX.ready(function () {
                        window.SearchAjax.init({
                            "PAGE_COUNT": "<?=$navResult->NavPageCount ?>",
                            "PAGEN_NUM": "<?=$navResult->NavNum ?>",
                            "CURRENT_PAGE": "<?=$navResult->PAGEN ?>",
                            "AJAX_BTN_SELECTOR": ".news-ajax-btn"
                        });
                    });
                </script>
            <?php endif; ?>
        <?php else: ?>
            <?php $APPLICATION->setTitle(Loc::getMessage("ACADEMY_SEARCH_FAILURE_TITLE")); ?>
                <div class="mb-5 pb-4">
                    <?= Loc::getMessage("ACADEMY_FAILURE_DESC_PREFIX") ?> <a class="a link-inherit"
                                                                             href="<?= SITE_DIR ?>"><?= Loc::getMessage("ACADEMY_OF_MAIN_PAGE") ?></a>
                </div>
        <?php endif; ?>
    </div>
</div>
