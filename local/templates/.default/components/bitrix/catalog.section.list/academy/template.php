<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arResult */
/** @var array $arParams */
/** @var CBitrixComponentTemplate $this */
$this->setFrameMode(true);

use Bitrix\Main\Localization\Loc;
?>

<?php if ($arResult["SECTIONS"]): ?>

    <h3 class="mb-4 pb-3"><?=Loc::getMessage("ACADEMY_POPULAR_SECTIONS_TITLE")?></h3>

    <div class="swiper-sections">
        <div class="swiper-sections__row">
            <div class=" swiper w-100">
                <div class="swiper-wrapper">

                    <?php foreach ($arResult["SECTIONS"] as $arSection): ?>

                        <?php
                        $this->addEditAction($arSection["ID"], $arSection["EDIT_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT"));
                        $this->addDeleteAction($arSection["ID"], $arSection["DELETE_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE"));
                        ?>

                        <div id="<?= $this->getEditAreaId($arSection["ID"]) ?>"
                             class="swiper-sections__col swiper-slide">
                            <a class="catalog-section" href="<?=$arSection["SECTION_PAGE_URL"]?>">
                                <?php if ($arSection["PICTURE"]): ?>
                                    <div class="image image_size_170x170 text-center">
                                        <div class="image__inner">
                                            <img class="img img_lazy lazyload"
                                                 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                 alt="<?= $arSection["PICTURE"]["ALT"] ?>"
                                                 title="<?= $arSection["PICTURE"]["TITLE"] ?>"
                                                 data-src="<?= $arSection["PICTURE"]["SRC"] ?>">
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="catalog-section__name"><?= $arSection["NAME"] ?></div>
                            </a>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
