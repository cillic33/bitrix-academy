<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 * @var array $arParams
 */

foreach ($arResult["SECTIONS"] as $i => $arSection)
{
    if ($arSection["PICTURE"])
    {
        $img = CFile::resizeImageGet(
            $arSection["PICTURE"],
            [
                "width" => $arParams["RESIZE_IMG_WIDTH"],
                "height" => $arParams["RESIZE_IMG_HEIGHT"],
            ],
            BX_RESIZE_IMAGE_EXACT,
            true
        );

        $arResult["SECTIONS"][$i]["PICTURE"]["WIDTH"] = $img["width"];
        $arResult["SECTIONS"][$i]["PICTURE"]["HEIGHT"] = $img["height"];
        $arResult["SECTIONS"][$i]["PICTURE"]["SRC"] = $img["src"];
    }
}
