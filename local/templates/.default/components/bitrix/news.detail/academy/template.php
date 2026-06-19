<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @var CBitrixComponentTemplate $this */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if ($arResult): ?>
	<div>
		<div class="card-news">
			<?php if ($arResult["FIELDS"]["DETAIL_PICTURE"]): ?>
				<div class="card-news__image">
					<div class="image image_size_850x430">
						<div class="image__inner">
							<img class="img img_lazy lazyload object-fit-cover"
								 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
								 alt="<?=$arResult["NAME"]?>"
								 title="<?=$arResult["NAME"]?>"
								 width="<?=$arResult["FIELDS"]["DETAIL_PICTURE"]["WIDTH"]?>"
								 height="<?=$arResult["FIELDS"]["DETAIL_PICTURE"]["HEIGHT"]?>"
								 data-src="<?=$arResult["FIELDS"]["DETAIL_PICTURE"]["SRC"]?>">
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="card-news__inner p-xl-5">
				<div class="card-news__date">
					<?=$arResult["DISPLAY_DATE"]?>
				</div>
				<? if (strlen($arResult["FIELDS"]["NAME"])): ?>
					<div class="card-news__body">
						<h1 class="card-news__name mt-0 mb-4 fw-normal"><?=$arResult["FIELDS"]["NAME"]?></h1>
					</div>
				<? endif ?>
			</div>
		</div>
	</div>
	<?=$arResult["FIELDS"]["DETAIL_TEXT"]?>
<?php endif; ?>