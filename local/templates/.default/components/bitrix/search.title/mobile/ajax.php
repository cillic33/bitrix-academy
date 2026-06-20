<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
if (!empty($arResult["CATEGORIES"]) && $arResult['CATEGORIES_ITEMS_EXISTS']):?>
	<? foreach ($arResult["CATEGORIES"] as $category_id => $arCategory):
		if ($category_id == 'all')
		{
			continue;
		}
		?>
		<? foreach ($arCategory["ITEMS"] as $i => $arItem): ?>
		<a href="<?= $arItem["URL"] ?>" class="a list-group-item list-group-item-action"><?= $arItem["NAME"] ?></a>
	<? endforeach; ?>
	<? endforeach; ?>
<?endif;
?>