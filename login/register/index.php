<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

if ($USER->isAuthorized())
{
	LocalRedirect(SITE_DIR);
}

$APPLICATION->SetTitle("Регистрация");
?><?php $APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"academy",
	[
		"AUTH" => "Y",
		"AUTH_URL" => "/login/",
		"REQUIRED_FIELDS" => ["EMAIL"],
		"SET_TITLE" => "N",
		"SHOW_FIELDS" => ["EMAIL"],
		"SUCCESS_PAGE" => "/login/",
		"USER_PROPERTY" => [],
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	],
	false
); ?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>