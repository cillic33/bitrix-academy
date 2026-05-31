<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;

/**
 * @var array $arResult
 * @var array $arParams
 */

Loc::loadMessages(__FILE__);

$request = Application::getInstance()->getContext()->getRequest();
?>
<form
		class="authorize needs-validation"
		novalidate
		name="form_auth"
		method="post"
		target="_top"
		action="<?=$arResult["AUTH_URL"]?>">

	<h3 class="mb-3 pb-3"><?=Loc::getMessage("ACADEMY_TITLE_AUTH")?></h3>

	<input type="hidden" name="AUTH_FORM" value="Y"/>
	<input type="hidden" name="TYPE" value="AUTH"/>
	<? if (strlen($arResult["BACKURL"])): ?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>"/>
	<? endif ?>
	<? foreach ($arResult["POST"] as $key => $value): ?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>"/>
	<? endforeach ?>
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
			<label for="USER_LOGIN"><?=Loc::getMessage("ACADEMY_LOGIN")?></label>
		</div>
		<div class="form-floating">
			<input class="form-control rounded-pill"
					id="USER_PASSWORD"
					type="password"
					placeholder="<?=Loc::getMessage("ACADEMY_PASSWORD")?>"
					required
					autocomplete="current-password"
					name="USER_PASSWORD"
					maxlength="255">
			<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_ERROR")?></div>
			<label for="USER_PASSWORD">
				<?=Loc::getMessage("ACADEMY_PASSWORD")?>
			</label>
		</div>
		<? if ($arResult["STORE_PASSWORD"] == "Y"): ?>
			<div class="py-2 d-flex justify-content-between">
				<div class="form-check">
					<input class="form-check__input form-check-input"
							type="checkbox"
							id="USER_REMEMBER"
							name="USER_REMEMBER"
							value="Y"
							checked>
					<label class="form-check__label form-check-label" for="USER_REMEMBER">
						<?=Loc::getMessage("ACADEMY_REMEMBER")?>
					</label>
				</div>
				<a class="a link-gray text-decoration-none"
						href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>">
					<?=Loc::getMessage("ACADEMY_URL_FORGOT_PASSWORD")?>
				</a>
			</div>
		<? endif ?>
		<button class="btn btn-primary rounded-pill w-100"
				type="submit"
				name="Login"
				value="Y">
			<?=Loc::getMessage("ACADEMY_SUBMIT")?>
		</button>
		<div class="line-through-divider text-center text-muted py-1">
			<?=Loc::getMessage("ACADEMY_OR")?>
		</div>
		<a class="btn btn-outline-primary rounded-pill w-100"
				role="button"
				href="<?=$arResult["AUTH_REGISTER_URL"]?>">
			<?=Loc::getMessage("ACADEMY_REGISTER")?>
		</a>
	</div>
</form>