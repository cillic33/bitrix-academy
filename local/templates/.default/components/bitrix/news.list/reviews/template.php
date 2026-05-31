<?php
B_PROLOG_INCLUDED === true || die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
$this->setFrameMode(true);

use Bitrix\Main\Localization\Loc;
?>
<?php if ($arResult["ITEMS"]): ?>
	<div class="mb-4 pb-3 d-flex align-items-center justify-content-between">
		<h3 class="m-0 p-0"><?= Loc::getMessage("ACADEMY_TITLE_REVIEWS") ?></h3>
	</div>
	<div class="swiper-reviews full-page">
		<div class="swiper-reviews__row">
			<div class=" swiper w-100">
				<div class="swiper-wrapper">
					<?php foreach ($arResult["ITEMS"] as $review): ?>
						<?php
						$this->addEditAction($review["ID"], $review["EDIT_LINK"], CIBlock::getArrayByID($review["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->addDeleteAction($review["ID"], $review["DELETE_LINK"], CIBlock::getArrayByID($review["IBLOCK_ID"], "ELEMENT_DELETE"));
						?>
						<div id="<?= $this->getEditAreaId($review["ID"]) ?>" class="swiper-reviews__col swiper-slide">
							<a class="card-review" href>
								<div class="card-review__user">
									<?php if ($review["FIELDS"]["PREVIEW_PICTURE"]): ?>
										<div class="card-review__image">
											<div class="image image_size_56x56 text-center">
												<div class="image__inner">
													<img class="img img_lazy lazyload"
														 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
														 data-src="<?= $review["FIELDS"]["PREVIEW_PICTURE"]["SRC"] ?>">
												</div>
											</div>
										</div>
									<?php endif ?>
									<div class="card-review__body">
										<?php if (strlen($review["FIELDS"]["NAME"])): ?>
											<div class="card-review__name">
												<?= $review["FIELDS"]["NAME"] ?>
											</div>
										<?php endif ?>
										<?php if ($review["DISPLAY_PROPERTIES"]["RATING"]): ?>
											<div class="card-review__rating">
												<?php for ($i = 0; $i < $review["DISPLAY_PROPERTIES"]["RATING"]["VALUE"]; ++$i): ?>
													<div class="fa-solid fa-star"></div>
												<?php endfor ?>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<?php if (strlen($review["FIELDS"]["PREVIEW_TEXT"])): ?>
									<div class="card-review__description">
										<?= $review["FIELDS"]["PREVIEW_TEXT"] ?>
									</div>
								<?php endif ?>

								<?php if ($review["DISPLAY_ACTIVE_FROM"] || $review["DISPLAY_PROPERTIES"]["CITY"]): ?>
									<div class="card-review__date">
										<?php
										if ($review["DISPLAY_ACTIVE_FROM"]) {
											echo $review["DISPLAY_ACTIVE_FROM"];
											echo $review["DISPLAY_PROPERTIES"]["CITY"] ? ", " : "";
										}
										if ($review["DISPLAY_PROPERTIES"]["CITY"]) {
											echo $review["DISPLAY_PROPERTIES"]["CITY"]["DISPLAY_VALUE"];
										}
										?>
									</div>
								<?php
								endif ?>
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<?=$arResult["NAV_STRING"]?>
	</div>
<?php endif; ?>