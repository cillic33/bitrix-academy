<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

use Bitrix\Main\Localization\Loc;

?>
<?php if ($arResult["ITEMS"]): ?>
	<?php if ($arParams["DISPLAY_TOP_PAGER"]): ?>
		<?=$arResult["NAV_STRING"]?><br/>
	<?php endif; ?>

	<div id="news" class="d-grid gap-3">
		<?php foreach ($arResult["ITEMS"] as $item): ?>
			<?php
			$this->AddEditAction($item["ID"], $item["EDIT_LINK"], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($item["ID"], $item["DELETE_LINK"], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"));
			?>
			<div id="<?=$this->getEditAreaId($item["ID"])?>">
				<a class="card-news" href="<?=$item["DETAIL_PAGE_URL"]?>">
					<?php if ($item["FIELDS"]["PREVIEW_PICTURE"]): ?>
						<div class="card-news__image">
							<div class="image image_size_850x430">
								<div class="image__inner">
									<img class="img img_lazy lazyload object-fit-cover"
											src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
											alt="<?=$item["NAME"]?>"
											title="<?=$item["NAME"]?>"
											width="<?=$item["PREVIEW_PICTURE"]["WIDTH"]?>"
											height="<?=$item["PREVIEW_PICTURE"]["HEIGHT"]?>"
											data-src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="card-news__inner p-xl-5">
						<div class="card-news__date">
							<?=$item["DISPLAY_DATE"]?>
						</div>
						<div class="card-news__body">
							<? if (strlen($item["FIELDS"]["NAME"])): ?>
								<h3 class="card-news__name mt-0 mb-4 fw-normal"><?=$item["FIELDS"]["NAME"]?></h3>
							<? endif ?>
							<?php if (isset($item["FIELDS"]["PREVIEW_TEXT"])): ?>
								<div class="card-news__description"><?=$item["FIELDS"]["PREVIEW_TEXT"]?></div>
							<?php endif; ?>
						</div>
						<div class="card-news__bottom">
							<span class="btn btn-white rounded-pill fw-semibold">
								<span class="px-2">
									<?=Loc::getMessage("ACADEMY_MORE")?>
									<i class="fa-solid fa-chevron-right ms-2"></i>
								</span>
							</span>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>

	<?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<br/><?=$arResult["NAV_STRING"]?>
	<?php endif; ?>
<?php endif; ?>