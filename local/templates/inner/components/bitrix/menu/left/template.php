<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 */
?>

<?php if ($arResult): ?>
		<div class="navigation navigation_vertical">
			<div class="navigation__list">

				<?php $countOpenedItems = 0;?>
				<?php foreach ($arResult as $menuItem):?>

					<?php if ($menuItem["DEPTH_LEVEL"] == 1):?>

						<?php if ($countOpenedItems):?>
							<?php while ($countOpenedItems):?>
									</div>
								</div>
								<?php --$countOpenedItems;?>
							<?php endwhile;?>
						<?php endif;?>

						<?php if ($menuItem["IS_PARENT"]):?>
							<?php ++$countOpenedItems;?>
								<div class="navigation__li dropdown">
									<a class="navigation__link <?php if ($menuItem["SELECTED"]):?>active<?php endif;?>" data-bs-toggle="dropdown" data-bs-display="static" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?><i
										class="fa-solid fa-chevron-down ms-2"></i></a>
									<div class="dropdown-menu">
							<?php else:?>
								<div class="navigation__li">
									<a class="navigation__link <?php if ($menuItem["SELECTED"]):?>active<?php endif;?>" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?></a>
								</div>
							<?php endif;?>

					<?php elseif ($menuItem["DEPTH_LEVEL"] == 2):?>
						<a class="a dropdown-item <?php if ($menuItem["SELECTED"]):?>active<?php endif;?>" href="<?=$menuItem["LINK"]?>"><?=$menuItem["TEXT"]?></a>
					<?php endif;?>


				<?php endforeach;?>

				<?php if ($countOpenedItems):?>
					<?php while ($countOpenedItems):?>
							</div>
						</div>
						<?php --$countOpenedItems;?>
					<?php endwhile;?>
				<?php endif;?>

			</div>
		</div>
<?php endif ?>