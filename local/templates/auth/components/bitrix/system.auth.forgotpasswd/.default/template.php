<?
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arResult
 * @var array $arParams
 */

Loc::loadMessages(__FILE__);
?>
<form class="authorize needs-validation" novalidate name="bform" method="post" target="_top"
		action="<?=$arResult["AUTH_URL"]?>">
	<h3 class="mb-3 pb-3"><?=Loc::getMessage("ACADEMY_FORGOT_PASSWORD")?></h3>

	<? if (strlen($arResult["BACKURL"])): ?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>">
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">

	<div class="d-grid gap-3">
		<? if ($arParams["AUTH_RESULT"]): ?>
			<? showMessage($arParams["~AUTH_RESULT"]) ?>
		<? endif ?>
		<?showNote(Loc::getMessage("ACADEMY_FORGOT_PASSWORD_INFO"), "info")?>
		<div class="form-floating">
			<input class="form-control rounded-pill"
					id="USER_LOGIN"
					placeholder="<?=Loc::getMessage("ACADEMY_LOGIN_OR_EMAIL")?>"
					required
					type="text"
					name="USER_LOGIN"
					maxlength="255"
					value="<?=$arResult["USER_LOGIN"]?>"
			>
			<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_ERROR")?></div>
			<label for="USER_LOGIN"><?=Loc::getMessage("ACADEMY_LOGIN_OR_EMAIL")?></label>
		</div>
		<button class="btn btn-primary rounded-pill w-100"
				type="submit"
				name="send_account_info"
				value="Y">
			<?=Loc::getMessage("ACADEMY_SEND")?>
		</button>
		<div class="line-through-divider text-center text-muted py-1">
			<?=Loc::getMessage("ACADEMY_OR")?>
		</div>
		<a class="btn btn-outline-primary rounded-pill w-100"
				role="button"
				href="<?=$arResult["AUTH_AUTH_URL"]?>">
			<?=Loc::getMessage("ACADEMY_AUTH")?>
		</a>
	</div>
</form>