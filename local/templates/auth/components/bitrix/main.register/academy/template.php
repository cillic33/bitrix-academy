<?php B_PROLOG_INCLUDED === true || die();

/**
 * @var array $arResult
 * @var array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 */

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();
?>

<?php if ($arResult): ?>
	<?php if ($USER->IsAuthorized()): ?>
		<p><?=Loc::getMessage("ACADEMY_MAIN_REGISTER_AUTH")?></p>
	<?php else: ?>
		<form method="post"
				action="<?=POST_FORM_ACTION_URI?>"
				name="regform"
				enctype="multipart/form-data"
				class="authorize needs-validation"
				novalidate>
			<?php if ($arResult["BACKURL"]): ?>
				<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>"/>
			<?php endif; ?>
			<h3 class="mb-3 pb-3"><?=Loc::getMessage("ACADEMY_AUTH_REGISTER")?></h3>
			<? if ($arResult["ERRORS"]): ?>
				<?showMessage(implode("<br>", $arResult["ERRORS"]))?>
			<? endif ?>
			<div class="d-grid gap-3">
				<?php foreach ($arResult["SHOW_FIELDS"] as $FIELD): ?>
					<?php
					switch ($FIELD)
					{
						case "LOGIN":
							?>
							<div class="form-floating">
								<input class="form-control rounded-pill"
										id="USER_<?=$FIELD?>"
										placeholder="<?=Loc::getMessage("ACADEMY_REGISTER_FIELD_LOGIN")?>"
										required
										value="<?=$arResult["VALUES"][$FIELD]?>"
										name="REGISTER[<?=$FIELD?>]"
										type="text">
								<?php if (in_array($FIELD, $arResult["REQUIRED_FIELDS"])): ?>
									<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_REQ")?></div>
								<?php endif; ?>
								<label for="USER_<?=$FIELD?>"><?=Loc::getMessage("ACADEMY_REGISTER_FIELD_LOGIN")?></label>
							</div>
							<?php break;
						case "EMAIL":
							?>
							<div class="form-floating">
								<input class="form-control rounded-pill"
										id="USER_<?=$FIELD?>"
										placeholder="<?=Loc::getMessage("ACADEMY_REGISTER_FIELD_EMAIL")?>"
										required
										name="REGISTER[<?=$FIELD?>]"
										value="<?=$arResult["VALUES"][$FIELD]?>"
										type="text">
								<?php if (in_array($FIELD, $arResult["REQUIRED_FIELDS"])): ?>
									<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_REQ")?></div>
								<?php endif; ?>
								<label for="USER_<?=$FIELD?>"><?=Loc::getMessage("ACADEMY_REGISTER_FIELD_EMAIL")?></label>
							</div>
							<?php break;
						case "PASSWORD":
							?>
							<div class="form-floating">
								<input class="form-control rounded-pill"
										id="USER_PASSWORD_FIRST"
										type="password"
										placeholder="<?=Loc::getMessage("ACADEMY_REGISTER_FIELD_PASSWORD")?>"
										name="REGISTER[<?=$FIELD?>]"
										value="<?=$arResult["VALUES"][$FIELD]?>"
										required
										autocomplete="current-password">
								<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_REQ")?></div>
								<label for="USER_PASSWORD_FIRST"><?=Loc::getMessage("ACADEMY_REGISTER_FIELD_PASSWORD")?></label>
							</div>

							<?php
							break;
						case "CONFIRM_PASSWORD":
							?>
							<div class="form-floating">
								<input class="form-control rounded-pill"
										id="USER_PASSWORD_DUPLICATE"
										type="password"
										placeholder="<?=Loc::getMessage("ACADEMY_REGISTER_FIELD_CONFIRM_PASSWORD")?>"
										required
										name="REGISTER[<?=$FIELD?>]"
										value="<?=$arResult["VALUES"][$FIELD]?>"
										autocomplete="current-password">
								<div class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_REQ")?></div>
								<label for="USER_PASSWORD_DUPLICATE"><?=Loc::getMessage("ACADEMY_REGISTER_FIELD_CONFIRM_PASSWORD")?></label>
							</div>

							<?php
							break;

						case "PERSONAL_GENDER":
							?><select name="REGISTER[<?=$FIELD?>]">
							<option
									value=""><?=Loc::getMessage("ACADEMY_USER_DONT_KNOW")?></option>
							<option
									value="M"<?=$arResult["VALUES"][$FIELD] == "M" ? " selected='selected'" : ""?>><?=Loc::getMessage("ACADEMY_USER_MALE")?></option>
							<option
									value="F"<?=$arResult["VALUES"][$FIELD] == "F" ? " selected='selected'" : ""?>><?=Loc::getMessage("ACADEMY_USER_FEMALE")?></option>
							</select><?php
							break;

						case "PERSONAL_COUNTRY":
						case "WORK_COUNTRY":
							?><select name="REGISTER[<?=$FIELD?>]"><?php
							foreach ($arResult["COUNTRIES"]["reference_id"] as $key => $value)
							{
								?>
								<option value="<?=$value?>"<?php if ($value == $arResult["VALUES"][$FIELD]): ?> selected="selected"<?php endif ?>><?=$arResult["COUNTRIES"]["reference"][$key]?></option>
								<?php
							}
							?></select><?php
							break;

						case "PERSONAL_PHOTO":
						case "WORK_LOGO":
							?><input size="30" type="file"
							name="REGISTER_FILES_<?=$FIELD?>" /><?php
							break;

						case "PERSONAL_NOTES":
						case "WORK_NOTES":
							?><textarea cols="30" rows="5"
							name="REGISTER[<?=$FIELD?>]"><?=$arResult["VALUES"][$FIELD]?></textarea><?php
							break;
						default:
							if ($FIELD == "PERSONAL_BIRTHDAY"): ?>
								<small><?=$arResult["DATE_FORMAT"]?></small><br/><?php endif;
							?><input size="30" type="text" name="REGISTER[<?=$FIELD?>]"
							value="<?=$arResult["VALUES"][$FIELD]?>" /><?php
							if ($FIELD == "PERSONAL_BIRTHDAY")
							{
								$APPLICATION->IncludeComponent(
										"bitrix:main.calendar",
										"",
										[
												"SHOW_INPUT" => "N",
												"FORM_NAME" => "regform",
												"INPUT_NAME" => "REGISTER[PERSONAL_BIRTHDAY]",
												"SHOW_TIME" => "N",
										],
										null,
										["HIDE_ICONS" => "Y"]
								);
							}
							?><?php
					} ?>

				<?php endforeach; ?>

				<?php
				if ($arResult["USE_CAPTCHA"] == "Y")
				{
					?>

					<div class="mb-3">
						<div class="mb-3">
							<div class="captcha">
								<input type="hidden" name="captcha_sid"
										value="<?=$arResult["CAPTCHA_CODE"]?>" />
								<img class="img"
										src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>"
										width="180"
										height="40"
										alt="CAPTCHA">
							</div>
						</div>
						<div class="form-floating">
							<input class="form-control rounded-pill"
									id="USER_WORD"
									name="captcha_word"
									placeholder="<?=Loc::getMessage("ACADEMY_REGISTER_CAPTCHA_TITLE")?>"
									required type="text">
							<div
									class="invalid-feedback px-4"><?=Loc::getMessage("ACADEMY_REQ")?></div>
							<label
									for="USER_WORD"><?=Loc::getMessage("ACADEMY_REGISTER_CAPTCHA_TITLE")?></label>
						</div>
					</div>

					<?php
				}
				?>

				<button class="btn btn-primary rounded-pill w-100"
						type="submit"
						name="register_submit_button"
						value="<?=Loc::getMessage("ACADEMY_AUTH_REGISTER")?>"><?=Loc::getMessage("ACADEMY_SUBMIT")?></button>
				<div
						class="line-through-divider text-center text-muted py-1"><?=Loc::getMessage("ACADEMY_OR")?></div>
				<a class="btn btn-outline-primary rounded-pill w-100"
						role="button"
						href="<?=$arParams["AUTH_URL"]?>"><?=Loc::getMessage("ACADEMY_AUTH")?></a>
			</div>
		</form>
	<?php endif ?>
<?php endif; ?>