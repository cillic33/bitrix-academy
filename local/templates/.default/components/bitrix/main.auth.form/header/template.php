<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 * @var array $arParams
 * @var CBitrixComponentTemplate $this
 * @global CUser $USER
 */

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

$this->setFrameMode(true);
Loc::loadMessages(__FILE__);
$request = Application::getInstance()->getContext()->getRequest();
$page = $arParams["AUTH_PAGE"];
?>

<?php if ($arResult): ?>
	<div class="header__user">
		<div class="user-thumbnail">
			<div class="user-thumbnail__control">
				<?php if ($arResult['AUTHORIZED']): ?>
					<a class="btn btn-outline-primary rounded-pill w-100" role="button" href="<?=$arParams["PERSONAL_PAGE"]?>">
						<?=Loc::getMessage("ACADEMY_AUTH_PERSONAL_PAGE")?>
					</a>
				<?php else: ?>
					<a class="btn btn-primary rounded-pill w-100" role="button" href="<?=$page?>">
						<?=Loc::getMessage("ACADEMY_AUTH_ENTER")?>
						<span class="d-none d-lg-inline">
							<?=Loc::getMessage("ACADEMY_AUTH_FOR_DEALERS")?>
						</span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>