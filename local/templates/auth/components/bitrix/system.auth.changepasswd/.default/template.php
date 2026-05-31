<?
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arResult
 * @var array $arParams
 */

Loc::loadMessages(__FILE__);
?>
<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" class="authorize needs-validation" novalidate>
	<h3 class="mb-3 pb-3"><?=Loc::getMessage("ACADEMY_CHANGE_PASSWORD")?></h3>
	<?if (strlen($arResult["BACKURL"])): ?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">

	<div class="d-grid gap-3">
		<? if ($arParams["AUTH_RESULT"]): ?>
			<? showMessage($arParams["~AUTH_RESULT"]) ?>
		<? endif ?>
		<div class="form-floating">
			<input class="form-control rounded-pill"
					id="USER_LOGIN"
					placeholder="<?=Loc::getMessage("ACADEMY_LOGIN")?>"
					required
					type="text"
					name="USER_LOGIN"
					maxlength="255"
					value="<?=$arResult["LAST_LOGIN"]?>"
			>
			<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_ERROR")?></div>
			<label for="USER_LOGIN"><?=Loc::getMessage("ACADEMY_LOGIN")?></label>
		</div>

		<div class="form-floating">
			<input class="form-control rounded-pill"
					id="USER_CHECKWORD"
					placeholder="<?=Loc::getMessage("ACADEMY_CHECKWORD")?>"
					required
					type="text"
					name="USER_CHECKWORD"
					maxlength="255"
					value="<?=$arResult["USER_CHECKWORD"]?>"
					autocomplete="off"
			>
			<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_ERROR")?></div>
			<label for="USER_CHECKWORD"><?=Loc::getMessage("ACADEMY_CHECKWORD")?></label>
		</div>

		<div class="form-floating">
			<input class="form-control rounded-pill"
					id="USER_PASSWORD"
					type="password"
					placeholder="<?=Loc::getMessage("ACADEMY_NEW_PASSWORD_REQ")?>"
					required
					autocomplete="new-password"
					name="USER_PASSWORD"
					maxlength="255"
					value="<?=$arResult["USER_PASSWORD"]?>"
			>
			<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_ERROR")?></div>
			<label for="USER_PASSWORD">
				<?=Loc::getMessage("ACADEMY_NEW_PASSWORD_REQ")?>
			</label>
		</div>

		<div class="form-floating">
			<input class="form-control rounded-pill"
					id="USER_CONFIRM_PASSWORD"
					type="password"
					placeholder="<?=Loc::getMessage("ACADEMY_NEW_PASSWORD_CONFIRM")?>"
					required
					autocomplete="new-password"
					name="USER_CONFIRM_PASSWORD"
					maxlength="255"
					value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>"
			>
			<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_ERROR")?></div>
			<label for="USER_CONFIRM_PASSWORD">
				<?=Loc::getMessage("ACADEMY_NEW_PASSWORD_CONFIRM")?>
			</label>
		</div>

		<?showNote($arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"], "info")?>

		<button class="btn btn-primary rounded-pill w-100"
				type="submit"
				name="change_pwd"
				value="Y">
			<?=Loc::getMessage("ACADEMY_CHANGE")?>
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