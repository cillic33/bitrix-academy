<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 */

?>

<nav class="d-flex gap-3 justify-content-between mt-4 pt-lg-3">
	<div class="pagination d-none d-sm-flex">

		<?php
		$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
		$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
		// to show always first and last pages
		$arResult["nStartPage"] = 1;
		$arResult["nEndPage"] = $arResult["NavPageCount"];

		if ($arResult["NavPageNomer"] != 0): ?>
		<div class="page-item">
			<a class="a page-link page-arrow"
			   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageNomer"] - 1?>">
				<i class="fa-solid fa-chevron-left"></i>
			</a>
		</div>
		<?php endif;

		do
		{
			if ($arResult["nStartPage"] <= 2
				|| $arResult["nEndPage"] - $arResult["nStartPage"] <= 1
				|| abs($arResult['nStartPage'] - $arResult["NavPageNomer"]) <= 2)
			{
				if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
					<div class="page-item">
						<span class="page-link active"><?=$arResult["nStartPage"]?></span>
					</div>
				<?php elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
					<div class="page-item"><a class="a page-link"
											  href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
					</div>
				<?php else:?>
					<div class="page-item"><a class="a page-link"
											  href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
					</div>
				<?php
				endif;
				$bFirst = false;
				$bPoints = true;
			}
			else
			{
				if ($bPoints)
				{
					?>
					<div class="page-item">
						<div class="page-link page-dotted">...</div>
					</div>
					<?php
					$bPoints = false;
				}
			}
			$arResult["nStartPage"]++;
		} while ($arResult["nStartPage"] <= $arResult["nEndPage"]);
		?>

		<?php if ($arResult["NavPageNomer"] + 1 <= $arResult["NavPageCount"]): ?>
			<div class="page-item">
				<a class="a page-link page-arrow"
				   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageNomer"] + 1?>">
					<i class="fa-solid fa-chevron-right"></i>
				</a>
			</div>
		<?php endif; ?>
	</div>
</nav>
