<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

$arTemplateParameters = [
	"AUTH_URL" => [
		"NAME" => Loc::getMessage("ACADEMY_AUTH_URL"),
		"TYPE" => "STRING",
		"DEFAULT" => "/auth/"
	]
];