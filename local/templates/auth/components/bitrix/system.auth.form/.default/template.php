<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arResult
 */

Loc::loadMessages(__FILE__);
?>
<form class="authorize">
	<div class="text-center mb-4 pb-xl-4">
		<div class="text-primary" style="font-size: 120px">
			<div class="fa-regular fa-circle-check"></div>
		</div>
		<h3 class="m-0"><?=Loc::getMessage("ACADEMY_LOGIN_OK")?></h3>
	</div>
	<div class="d-grid gap-3">
		<a class="btn btn-primary rounded-pill w-100" type="button" href="<?=SITE_DIR?>">
			<?=Loc::getMessage("ACADEMY_MAIN")?>
		</a>
		<a class="btn btn-outline-primary rounded-pill w-100" role="button" href="<?=$arResult["PROFILE_URL"]?>">
			<?=Loc::getMessage("ACADEMY_PERSONAL")?>
		</a>
	</div>
</form>