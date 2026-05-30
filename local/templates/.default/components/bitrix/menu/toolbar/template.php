<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 */

$countOpenedItems = 0;
?>
<?if($arResult):?>
	<?php foreach ($arResult as $menuItem):?>
		<?php if ($menuItem["DEPTH_LEVEL"] == 1):?>

			<?php if ($countOpenedItems):?>
			</div>
				</div>
				<?php --$countOpenedItems;?>
			<?php endif;?>

			<?php if ($menuItem["IS_PARENT"]):?>
				<?php ++$countOpenedItems;?>
				<div class="toolbar__li dropdown">
				<a class="toolbar__link" data-bs-toggle="dropdown" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?><i class="fa-solid fa-chevron-down ms-2"></i></a>
				<div class="dropdown-menu">
			<?php else:?>
				<div class="toolbar__li"><a class="toolbar__link" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?></a></div>
			<?php endif;?>

		<?php elseif ($menuItem["DEPTH_LEVEL"] == 2):?>
			<div><a class="a dropdown-item" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?></a></div>
		<?php endif;?>
	<?php endforeach;?>

	<?php while ($countOpenedItems):?>
		</div>
		</div>
		<?php --$countOpenedItems;?>
	<?php endwhile;?>

	<div class="toolbar__li toolbar__li_contact">
		<?php
		$APPLICATION->IncludeComponent(
			"bitrix.academy:phone",
			"academy",
			[
					"HTML_CLASS" => "toolbar__link",
					"PHONE" => $arParams["PHONE"]
			],
			$component
		);
		?>
		<span class="ms-3">
			<?php $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				[
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/opening_hours_top.php",
				],
				$component
			) ?>
		</span>
	</div>
<?else:?>
	<?php showError(\Bitrix\Main\Localization\Loc::getMessage("ACADEMY_NO_MENU", ["#TYPE#" => $arParams["ROOT_MENU_TYPE"]])) ?>
<?endif?>
