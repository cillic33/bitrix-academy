<?php B_PROLOG_INCLUDED === true || die();
/**
 * @var array $arResult
 */
?>
<?php if ($arResult):?>
<div class="navigation">
	<div class="navigation__list">

		<?php $countOpenedItems = 0;?>
		<?php foreach ($arResult as $menuItem):?>
			<?php if ($menuItem["DEPTH_LEVEL"] == 1):?>

				<?php if ($countOpenedItems):?>
						</div>
					</div>
					<?php --$countOpenedItems;?>
				<?php endif;?>

				<?php if ($menuItem["IS_PARENT"]):?>
					<div class="navigation__li dropdown">
						<a class="navigation__link"
						   data-bs-toggle="dropdown"
						   data-bs-display="static" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?><i class="fa-solid fa-chevron-down ms-2"></i></a>
						<div class="dropdown-menu">

					<?php ++$countOpenedItems;?>
				<?php else:?>
					<div class="navigation__li"><a class="navigation__link" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?></a></div>
				<?php endif;?>

			<?php elseif ($menuItem["DEPTH_LEVEL"] == 2):?>
				<a class="a dropdown-item" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?></a>
			<?php endif;?>
		<?php endforeach;?>

		<?php if ($countOpenedItems):?>
				</div>
			</div>
			<?php --$countOpenedItems;?>
		<?php endif;?>

	</div>
</div>
<?php endif;?>