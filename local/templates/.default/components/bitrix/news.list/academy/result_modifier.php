<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 * @var array $arParams
 */

foreach ($arResult["ITEMS"] as $i => $item)
{
	if ($item["FIELDS"]["PREVIEW_PICTURE"])
	{
		$img = CFile::resizeImageGet(
			$item["PREVIEW_PICTURE"],
			[
				"width" => $arParams["RESIZE_IMG_WIDTH"],
				"height" => $arParams["RESIZE_IMG_HEIGHT"],
			],
			BX_RESIZE_IMAGE_EXACT,
			true
		);

		$arResult["ITEMS"][$i]["FIELDS"]["PREVIEW_PICTURE"]["WIDTH"] = $img["width"];
		$arResult["ITEMS"][$i]["FIELDS"]["PREVIEW_PICTURE"]["HEIGHT"] = $img["height"];
		$arResult["ITEMS"][$i]["FIELDS"]["PREVIEW_PICTURE"]["SRC"] = $img["src"];
	}

	$arResult["ITEMS"][$i]["DISPLAY_DATE"] = FormatDate($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($item["DATE_CREATE"]));
}
