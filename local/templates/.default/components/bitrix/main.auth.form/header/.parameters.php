<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

$arTemplateParameters = [
	"AUTH_PAGE" => [
		"NAME" => Loc::getMessage("ACADEMY_AUTH_PAGE"),
		"TYPE" => "STRING",
		"DEFAULT" => "/login/"
	],
	"PERSONAL_PAGE" => [
		"NAME" => Loc::getMessage("ACADEMY_PERSONAL_PAGE"),
		"TYPE" => "STRING",
		"DEFAULT" => "/personal/"
	]
];