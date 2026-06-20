<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Loader;
use Bitrix\Catalog\PriceTable;

/**
 * @var array $arResult
 */

$iblockItems = [];
$iblockSections = [];
$products = [];

foreach($arResult["SEARCH"] as $i => $arItem)
{
    if ($arItem["MODULE_ID"] == "iblock")
    {
        if (str_starts_with($arItem['ITEM_ID'], 'S'))
        {
            $iblockSections[$i] = substr($arItem['ID'], 1);
        }
        else
        {
            $iblockItems[$i] = $arItem['ITEM_ID'];

            if ($arItem['PARAM1'] == 'products')
            {
                $products[$arItem['ITEM_ID']] = [
                    'QUANTITY_LIST' => [1],
                    'IBLOCK_ID' => $arItem['PARAM2']
                ];
            }
        }
    }
}

if ($iblockItems)
{
    $elems = CIBlockElement::GetList([], ['=ID' => $iblockItems]);
    while ($elem = $elems->Fetch())
    {
        if ($elem['PREVIEW_PICTURE'] && $picture = CFile::GetFileArray($elem['PREVIEW_PICTURE']))
        {
            $arResult["SEARCH"][array_search($elem['ID'], $iblockItems)]['PREVIEW_PICTURE'] = $picture;
        }
    }
}

if ($iblockSections)
{
    $elems = CIBlockSection::GetList([], ['=ID' => $iblockSections]);
    while ($elem = $elems->Fetch())
    {
        if ($elem['PICTURE'] && $picture = CFile::GetFileArray($elem['PICTURE']))
        {
            $arResult["SEARCH"][array_search($elem['ID'], $iblockSections)]['PREVIEW_PICTURE'] = $picture;
        }
    }
}

$prices = [];
if ($products && Loader::includeModule("catalog"))
{
    $priceList = \CCatalogProduct::GetOptimalPriceList($products);
    if ($priceList) {
        foreach($arResult["SEARCH"] as &$arItem)
        {
            if ($arItem['ITEM_ID'] && $priceList[$arItem['ITEM_ID']]) {
                $arItem['PRICE'] = $priceList[$arItem['ITEM_ID']][0];
                $arItem['PRICE']['DISPLAY_PRICE'] = CurrencyFormat(
                    $arItem['PRICE']['RESULT_PRICE']['DISCOUNT_PRICE'],
                    $arItem['PRICE']['RESULT_PRICE']['CURRENCY']
                );
            }
        }
    }
}

?>