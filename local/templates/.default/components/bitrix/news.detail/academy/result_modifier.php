<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 * @var array $arParams
 */

if ($arResult["FIELDS"]["DETAIL_PICTURE"])
{
	$img = CFile::resizeImageGet(
		$arResult["FIELDS"]["DETAIL_PICTURE"],
		[
			"width" => $arParams["RESIZE_IMG_WIDTH"],
			"height" => $arParams["RESIZE_IMG_HEIGHT"],
		],
		BX_RESIZE_IMAGE_EXACT,
		true
	);

	$arResult["FIELDS"]["DETAIL_PICTURE"]["WIDTH"] = $img["width"];
	$arResult["FIELDS"]["DETAIL_PICTURE"]["HEIGHT"] = $img["height"];
	$arResult["FIELDS"]["DETAIL_PICTURE"]["SRC"] = $img["src"];
}

$arResult["DISPLAY_DATE"] = FormatDate($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($arResult["ACTIVE_FROM"]));